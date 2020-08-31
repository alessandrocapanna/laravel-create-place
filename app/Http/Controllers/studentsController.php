<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class studentsController extends Controller
{
  public function index(){

    $students = student::all();

    return view('students', compact('students'));
  }
}
