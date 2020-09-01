<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function api(){
    $studentsApi = student::all();

    return response()->json(compact('studentsApi'));
  }
}
