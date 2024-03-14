<?php
namespace App\Services;
use App\Models\Category;
class CategoryService
{
 
    public function  getAllCategories()
    {
        return Category::all();
    }

    public function getCategoryById($id)
    {
        return Category::find($id);
    }

    public function createCategory(array $data)
    {
        return Category::create($data);
    }

    public function updateCategory( $id, array $data)
    {
        $category= Category::find($id);
        
        return $category->update($data);
    }

    public function deleteCategory($id)
    {
        $category= Category::find($id);
        return$category->delete();
    }
}