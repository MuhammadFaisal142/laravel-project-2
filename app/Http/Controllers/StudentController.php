<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents(){
            $students=DB::table('students')
            ->select('students.*' , 'citystudents.city_namecls')
            ->join('citystudents','students.city','=','citystudents.id')
            ->get();
            // return $students;
            return view('Welcome',compact('students'));


    }
}

