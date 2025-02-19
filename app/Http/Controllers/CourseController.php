<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(Request $request){
        //List all
        $editingId = $request->get('edit_id');
        $courses = Course::all();
        return view('course.index', compact('courses', 'editingId'));
    }

    public function create(){
        // route to the page/view which will hold the create form
        $course = new Course(); // create a new instance of the Course model
        return view('course.create', compact('course'));
    }

    public function store(Request $request){
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'instructor' => 'required|string|max:255',
            'description' => 'required|string|max:4000',
        ]);

        // Create the course
        $course = Course::create([
            'title' => $request->input('title'),
            'instructor' => $request->input('instructor'),
            'description' => $request->input('description'),
        ]);

        echo "Course created successfully!";

        // Redirect to the show page with the newly created course
        return redirect()->route('course.show', $course->id)
                        ->with('success', 'Course created successfully!');
    }

    public function show($id){
        //fetching the data for the course
        $course = Course::find($id);
        return view('course.show', compact('course'));
    }

    public function edit($id){
        //edit data
        $course = Course::find($id);
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, $id){
        //logic to update the database and do something post that
        $course = Course::find($id);

        $course->title = $request->input('title');
        $course->instructor = $request->input('instructor');
        $course->description = $request->input('description');

        $course->save();

        echo "Course updated successfully!";

        return redirect()->route('course.show', $course->id);
    }

    public function destroy($id){
        //delete data
        Course::destroy($id);


        echo "Course deleted successfully!";
        return redirect()->route('course.index');
    }
}