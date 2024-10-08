<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

use App\Service\CategoryService;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService) {
        $this->categoryService = $categoryService;
    }

    public function index() {
        $allCategory = $this->categoryService->getAll();
        return view('admin.category.index', compact('allCategory'));
    }

    public function showAddCategory() {
        return view('admin.category.add_category');
    }

    public function addCategory(Request $request) {
        $request->validate([
            'categoryName' => 'required',
        ]);
        $this->categoryService->add($request->categoryName);
        return redirect(route('admin.category.index'))->with('success', 'Successfully create category');
    }

    public function showEditCategory(Request $request) {
        $category = $this->categoryService->getById($request->id);
        $id = $request->id;
        return view('admin.category.edit_category', compact('id', 'category'));
    }

    public function editCategory(Request $request) {
        $request->validate([
            'id' => 'required',
            'categoryName' => 'required',
        ]);
        $this->categoryService->edit($request->id, $request->categoryName);
        return redirect(route('admin.category.index'))->with('success', 'Successfully edit category');
    }

    public function deleteCategory(Request $request) {
        $id = $request->id;
        if(!$this->categoryService->checkHasChildren($id)) {
            $this->categoryService->delete($id);
            return redirect(route('admin.category.index'))->with('success', 'Successfully delete category') ;
        }
        return redirect(route('admin.category.index'))->with('error', 'Cannot delete category because category has rooms');
    }
}
