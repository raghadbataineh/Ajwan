<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course= Course::all();
        return view('course', compact('course'));
    }
    
    public function course()
    {
        $course= Course::all();
        return view('course', compact('course'));
    }
    public function filterByCategory(Request $request, $category_id)
   {
       $query = Course::where('category_id', $category_id);
   
       // Handle other filters if required
   
       $course = $query->paginate(9);
       
       return view('course', compact('course', 'category_id'));
   }
//    }
//    public function search(Request $request)
//    {
//        $query = Product::query();
   
      
   
//        // Handle search query
//        if ($request->has('name1')) {
//            $query->where('name', 'LIKE', '%' . $request->name1 . '%');
//        }
   
//        // Get paginated results
//        $product = $query->paginate(9);
   
//        return view('course', compact('course'));
//    }

    public function CourseDetails($id)
    {
        $courses = Course::find($id);
        // $categories = Category::all();
        $categories = Category::withCount('courses')->take(6)->get();


        if (!$courses) {
            abort(404);
        }
        $relatedCourses = Course::inRandomOrder()->limit(3)->get(); // Adjust the query as needed

        // Retrieve all products associated with this shop
        // $courses = $category->courses;
        // dd($courses);
        return view('detail', compact('courses','relatedCourses','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
