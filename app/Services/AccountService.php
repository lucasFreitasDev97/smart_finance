<?php

namespace App\Services;

use App\Models\Account;
use App\Models\User;

class AccountService
{
    public function store(array $data, User $user): void
    {
        $account = new Account();
        $account->user_id = $user->getKey();
        $account->name = $data['name'];
        $account->balance = $data['balance'];
        $account->save();
    }

    public function update(array $data, Account $account): void
    {
        $account->update($data);
    }

    public function destroy(Account $account): void
    {
        $account->delete();
    }

}
