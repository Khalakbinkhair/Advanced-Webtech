<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function login(){
        return view('home');
    }
    public function Contact(){
        return view('contact');
    }
} 
