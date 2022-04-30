<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Graduate as Student;
use App\Models\LearnCat as Course;
use App\Models\SocialLink;
use App\Models\IndexSlider;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // admin index
 
    public function index()
    {
        return view('admin.index');
    }

    // sliders routes

    public function slider()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    public function slider_create()
    {
        return view('admin.slider.form');
    }

    public function slider_update_create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->store('sliders');
            $image_name = 'sliders/' . $image->hashName();
        }else
        {
            $image_name = null;
        }


        if ($request->id) {
            $slider = Slider::find($request->id);
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->image = $image_name ? $image_name : $slider->image;
            $slider->save();
        } else {
            $slider = new Slider();
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->image =  $image_name;
            $slider->save();
        }

        return redirect()->route('admin.slider');
    }

    public function slider_edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.form', compact('slider'));
    }


    // students routes

    public function students()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    public function students_create()
    {
        return view('admin.students.form');
    }

    public function students_update_create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $image->store('students');
        $image_name = 'students/' . $image->hashName();
        }else
        {
            $image_name = null;
        }

        if ($request->id) {
            $student = Student::find($request->id);
            $student->name = $request->name;
            $student->job_title = $request->job_title;
            $student->image =  $image_name ? $image_name : $student->image;
            $student->save();
        } else {
            $student = new Student();
            $student->name = $request->name;
            $student->job_title = $request->job_title;
            $student->image = $image_name;
            $student->save();
        }

        return redirect()->route('admin.students');

    }

    public function students_edit($id)
    {
        $student = Student::find($id);
        return view('admin.students.form', compact('student'));
    }



    // courses routes

    public function courses()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    public function courses_create()
    {
        return view('admin.courses.form');
    }

    public function courses_update_create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pdf' => 'mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $image->store('courses');
        $image_name = 'courses/' . $image->hashName();
        }else
        {
            $image_name = null;
        }

        if ($request->hasFile('pdf')) {
        $pdf = $request->file('pdf');
        $pdf->store('courses');
        $pdf_name = 'courses/' . $pdf->hashName();
        }else
        {
            $pdf_name = null;
        }

        if ($request->id) {
            $course = Course::find($request->id);
            $course->title = $request->title;
            $course->description = $request->description;
            $course->image =  $image_name ? $image_name : $course->image;
            $course->pdf =  $pdf_name ? $pdf_name : $course->pdf;
            $course->goals = $request->goals;
            $course->save();
        } else {
            $course = new Course();
            $course->title = $request->title;
            $course->description = $request->description;
            $course->image = $image_name;
            $course->pdf = $pdf_name;
            $course->goals = $request->goals;
            $course->save();
        }

        return redirect()->route('admin.courses');

    }

    public function courses_edit($id)
    {
        $course = Course::find($id);
        return view('admin.courses.form', compact('course'));
    }


    // social links routes

    public function social()
    {
        $socials = SocialLink::all();
        return view('admin.social.index', compact('socials'));
    }

    public function social_create()
    {
        return view('admin.social.form');
    }

    public function social_update_create(Request $request)
    {
        if ($request->id) {
            $social = SocialLink::find($request->id);
            $social->title = $request->title;
            $social->icon = $request->icon;
            $social->link = $request->link;
            $social->save();
        } else {
            $social = new SocialLink();
            $social->title = $request->title;
            $social->icon = $request->icon;
            $social->link = $request->link;
            $social->save();
        }

        return redirect()->route('admin.social');

    }

    public function social_edit($id)
    {
        $social = SocialLink::find($id);
        return view('admin.social.form', compact('social'));
    }


    // index slider routes

    public function index_slider()
    {
        $sliders = IndexSlider::all();
        return view('admin.index.index', compact('sliders'));
    }


    public function index_slider_create()
    {
        return view('admin.index.form');
    }

    public function index_slider_update_create(Request $request)
    {
        $request->validate([
            'title' => 'required',
         ]);

        if ($request->hasFile('video')) {
        $video = $request->file('video');
        $video->store('index_slider');
        $video_name = 'index_slider/' . $video->hashName();
        }else
        {
            $video_name = null;
        }

        if ($request->id) {
            $slider = IndexSlider::find($request->id);
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->video =  $video_name ? $video_name : $slider->video;
            $slider->save();
        } else {
            $slider = new IndexSlider();
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->video = $video_name;
            $slider->save();
        }

        return redirect()->route('admin.index_slider');

    }

    public function index_slider_edit($id)
    {
        $slider = IndexSlider::find($id);
        return view('admin.index.form', compact('slider'));
    }






}
