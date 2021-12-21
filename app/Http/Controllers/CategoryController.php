<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
        // return view('admin.category');

        return view('admin');
    }

    public function createCategory()
    {
        $categories = Category::all();
        return view('admin.create-category', compact('categories'));
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);

        Request::create($request);
        return redirect('category')->with('statusGroup', 'Data Berhasil Dibuat');
    }

    public function edit ($id)
    {
        $category = Category::findorfail($id);
        return view('admin.edit-category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findorfail($id);
		$category->update($request->all());

        Category::where('id', $id)->update([
            'name' => $request->name,
        ]);
        
		return redirect('category')->with('statusGroup', 'Data Berhasil Dirubah');
    }

}
