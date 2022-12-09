<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        $category = Category::create([
            'name' => $request->name
        ]);

        if ($category) {
            session()->flash('success', 'Category successfully created');
            return redirect()->route('category');
        } else {
            session()->flash('error', 'Failed to create category');
            return redirect()->route('category');
        }
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        $category->update([
            'name' => $request->name
        ]);

        if ($category) {
            session()->flash('success', 'Category successfully updated');
            return redirect()->route('category');
        } else {
            session()->flash('error', 'Failed to update category');
            return redirect()->route('category');
        }
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        if ($category) {
            session()->flash('success', 'Category successfully deleted');
            return redirect()->back();
        } else {
            session()->flash('error', 'Failed to delete Category');
        }
    }
}
