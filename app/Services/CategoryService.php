<?php

namespace App\Services;

use App\Models\Account;
use App\Models\Category;
use App\Models\User;

class CategoryService
{
    public function store(array $data, User $user): void
    {
        $category = new Category();
        $category->name = $data['name'];
        $category->type = $data['type'];
        $category->user_id = $user->id;
        $category->save();
    }

    public function update(array $data, Category $account): void
    {
        $account->update($data);
    }

    public function destroy(Category $account): void
    {
        $account->delete();
    }

}
