<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct() //fungsi biar dia login dulu pas mau buka suatu halaman
    {
        $this->middleware('auth');
    }
    public function course()
    {
    	return view('pages.courses');
    }
    
    public function courseDetails()
    {
    	return view('pages.course-details');
	}
}
