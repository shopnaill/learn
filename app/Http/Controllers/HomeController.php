<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Graduate as Student;
use App\Models\LearnCat as Course;
use App\Models\IndexSlider;

class HomeController extends Controller
{
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('home', compact('students', 'courses'));
    }

    public function slider()
    {
        $sliders = IndexSlider::all();
        return view('welcome', compact('sliders'));
    }
}
