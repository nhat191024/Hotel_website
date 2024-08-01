<?php

namespace App\Http\Controllers\Api;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Service\CategoryService;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService) {
        $this->categoryService = $categoryService;
    }

    public function index() {
        $allCategory = $this->categoryService->getAll();
        return $allCategory;
    }

    public function addCategory(Request $request) {
        $request->validate([
            'categoryName' => 'required',
        ]);
        $res = $this->categoryService->add($request->categoryName);

        if($res) {
            return response()->json(['message' => 'Successfully create category'], 200);
        }
    }

    public function editCategory(Request $request) {
        $request->validate([
            'id' => 'required',
            'categoryName' => 'required',
        ]);
        $res = $this->categoryService->edit($request->id, $request->categoryName);

        if($res) {
            return response()->json(['message' => 'Successfully edit category'], 200);
        }
    }

    public function deleteCategory($id) {
        if(!$this->categoryService->checkHasChildren($id)) {
            $res = $this->categoryService->delete($id);
            if($res) {
                return response()->json(['message' => 'Successfully delete category'], 200);
            }
        }
        return response()->json(['message' => 'Cannot delete category because category has rooms'], 400);
    }
}
