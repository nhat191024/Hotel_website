<?php

namespace App\Service;

use App\Models\category;

class CategoryService
{
    public function getAll() {
        return category::all();
    }

    public function getById($id) {
        return category::where('id', $id)->first();
    }

    public function add($categoryName)
    {
        category::create([
            'name' => $categoryName,
        ]);
    }

    public function edit($id, $categoryName)
    {
        $category = category::where('id', $id)->first();
        $category->name = $categoryName;
        $category->save();
    }

    public function checkHasChildren($idCategory) {
        return category::find($idCategory)->rooms()->get()->count() > 0;
    }

    public function delete($id) {
        category::destroy($id);
    }
}
