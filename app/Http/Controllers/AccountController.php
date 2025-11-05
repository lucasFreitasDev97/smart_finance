<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use App\Services\AccountService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected AccountService $accountService;

    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    public function index(User $user): View
    {
        $accounts = $user->accounts;

        return view('accounts.index', ['accounts' => $accounts]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $user = auth()->user();
        $this->accountService->store($data, $user);

        return redirect()->route('accounts.index', ['user' => $user->getKey()]);
    }

    public function update(Request $request, Account $account): RedirectResponse
    {
        $data = $request->all();
        $user = $account->user;
        $this->accountService->update($data, $account);
        return redirect()->route('accounts.index', ['user' => $user->getKey()]);
    }

    public function destroy(Account $account): RedirectResponse
    {
        $user = $account->user;
        $this->accountService->destroy($account);
        return redirect()->route('accounts.index',['user' => $user->getKey()]);
    }
}
