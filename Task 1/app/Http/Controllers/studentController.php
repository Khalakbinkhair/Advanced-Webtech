<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function stuLog(){
        return view('student.studentlogin');
    }
}
