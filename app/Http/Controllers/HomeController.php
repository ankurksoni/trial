<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use \App\Student;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Student $student)
    {
        $student_list = $student->paginate(50);
        return view('home', compact('student_list'));
    }
}
