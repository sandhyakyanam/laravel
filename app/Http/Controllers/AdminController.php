<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addCategory(Request $request){
        $category = $request->category_name;
        $data = new Category(); 
        $data->name = $category;
        $data->save();
        return redirect()->back()->with('message', 'Category added successfully');
    }
}
