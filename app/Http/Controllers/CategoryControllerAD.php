<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryControllerAD extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('admin_dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin_dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required'
        ]);

        $relativeImagePath = null;
        $newImageName = uniqid() . '.' . $request->file('image')->extension();
        $relativeImagePath = 'images/' . $newImageName;
        $request->file('image')->move(public_path('images'), $newImageName);


        Category::create([
            'name' => $request->input('name'),
            'image' => $relativeImagePath
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');

    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin_dashboard.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->except(['_token', '_method']);

        if ($request->hasFile('image')) {
            $newImage = $this->storeImage($request);

            $data['image'] = $newImage;
        }

        Category::where('id', $id)->update($data);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return back()->with('success', 'Category deleted successfully.');
    }

    public function storeImage($request)
    {
        $newImageName = uniqid() . '.' . $request->file('image')->extension();
        $relativeImagePath = 'images/' . $newImageName;
        $request->file('image')->move(public_path('images'), $newImageName);


        return $relativeImagePath;

    }
}
