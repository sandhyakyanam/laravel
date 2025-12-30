<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addCategory(Request $request)
    {
        $category = $request->category_name;
        $data = new Category;
        $data->name = $category;
        $data->save();

        return redirect()->back()->with('message', 'Category added successfully');
    }

    public function viewCategory()
    {
        $category = Category::all();

        return view('admin.viewcategory', compact('category'));
    }

    public function deleteCategory($id)
    {
        $data = Category::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Category deleted successfully');
    }

    public function editCategory($id)
    {
        $data = Category::find($id);

        return view('admin.editCategory', compact('data'));
    }

    public function updateCategoryData(Request $request, $id)
    {
        $category = $request->category_name;
        dump($category);

    }
}
