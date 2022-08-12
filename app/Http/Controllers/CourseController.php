<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index');
    }

    public function all()
    {
        return view('courses.all');
    }

    public function show(Course $course)
    {
        $this->authorize('published', $course);
        return view('courses.show', compact('course'));
    }

    public function enrolled(Course $course)
    {
        $course->students()->attach(auth()->user()->id);
        return redirect()->route('courses.status', $course);
    }
}
