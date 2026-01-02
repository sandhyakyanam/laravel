<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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
        Category::where('id', $id)->update(['name' => $category]);

        return redirect()->back()->with('message', 'Category updated successfully');
    }

    public function viewproduct()
    {
        $categories = Category::all();

        return view('admin.addproduct', compact('categories'));
    }

    public function storeproduct(Request $request)
    {

        $request->validate([
            'product_name' => 'required|max:255',
            'product_description' => 'required',
            'product_quantity' => 'required',
            'product_price' => 'required',
            'category_id' => 'required',
        ]);

        $product_name = $request->product_name;
        $product_description = $request->product_description;
        $product_quantity = $request->product_quantity;
        $category_id = $request->category_id;
        $product_price = $request->product_price;

        $prodtt = new Product;
        $prodtt->name = $product_name;
        $prodtt->description = $product_description;
        $prodtt->quantity = $product_quantity;
        $prodtt->category_id = $category_id;
        $prodtt->price = $product_price;
        if ($request->hasFile('product_photos')) {
            $file = $request->file('product_photos');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('admin/img/product_images', $filename);
            $prodtt->photo = $filename;
        }
        $prodtt->save();

        return redirect()->back()->with('message', 'Product added successfully');

    }

    public function viewproductlisting()
    {
        $product = Product::all();

        return view('admin.viewproductlisting', compact('product'));
    }
}
