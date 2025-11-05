<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Category;
use App\Models\User;
use App\Services\AccountService;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(User $user): View
    {
        $categories = $user->categories;

        return view('categories.index', ['categories' => $categories, ['user' => $user->getKey()]]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $user = auth()->user();
        $this->categoryService->store($data, $user);

        return redirect()->route('categories.index', ['user' => $user->getKey()]);
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $data = $request->all();
        $user = $category->user;
        $this->categoryService->update($data, $category);
        return redirect()->route('categories.index', ['user' => $user->getKey()]);
    }

    public function destroy(Category $category): RedirectResponse
    {
        $user = $category->user;
        $this->categoryService->destroy($category);
        return redirect()->route('categories.index',['user' => $user->getKey()]);
    }
}
