<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;
       public function __construct(CategoryService $categoryService)
       {
        $this->categoryService = $categoryService;
       }

      public function index()
    {
        $categories= $this->categoryService->getAllCategories();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        $categories= $this->categoryService->createCategory($data);
         return response()->json($categories);           
    }

    public function show(Request $request)
    {
        $category = $this->categoryService->getCategoryById($request->$id);
        return response()->json($category);
    }

    public function update(Request $request, Category $category)
    {
        $id= $request->input('id');
        $data = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
      
        $category = $this->categoryService->updateCategory($id, $data);
        return response()->json($category);     
    }

    public function destroy($id)
    {
       $categories= $this->categoryService->deleteCategory($id);
       return responce()->json($categories);
    }
       
}
