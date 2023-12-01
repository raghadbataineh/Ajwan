<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Category;

use Illuminate\Http\Request;

class CourseControllerAD extends Controller
{
    public function index()
    {
        $courses = Course::get();
        return view('admin_dashboard.courses.index', compact('courses'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('admin_dashboard.courses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'instructor' => 'required',
            'image' => 'required',
            'lectures' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'status' => 'required'
            // 'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        //image handling

        $relativeImagePath = null;
        $newImageName = uniqid() . '.' . $request->file('image')->extension();
        $relativeImagePath = 'images/' . $newImageName;
        $request->file('image')->move(public_path('images'), $newImageName);



        Course::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category'),
            'instructor' => $request->input('instructor'),
            'image' => $relativeImagePath,
            'Lectures' => $request->input('lectures'),
            'Duration' => $request->input('duration'),
            'description' => $request->input('description'),
            'status' => $request->input('status')
        ]);

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');

    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $categories = Category::get();

        return view('admin_dashboard.courses.edit', compact('course', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'category' => 'required',
        //     'instructor' => 'required',
        //     'image' => 'required',
        //     'lectures' => 'required',
        //     'duration' => 'required',
        //     'description' => 'required',
        //     'status' => 'required'
        //     // 'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        // ]);

        $data = $request->except(['_token', '_method']);

        if ($request->hasFile('image')) {
            $newImage = $this->storeImage($request);

            $data['image'] = $newImage;
        }

        Course::where('id', $id)->update($data);
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return back()->with('success', 'Course deleted successfully.');
    }

    public function storeImage($request)
    {
        $newImageName = uniqid() . '.' . $request->file('image')->extension();
        $relativeImagePath = 'images/' . $newImageName;
        $request->file('image')->move(public_path('images'), $newImageName);


        return $relativeImagePath;

    }
}
