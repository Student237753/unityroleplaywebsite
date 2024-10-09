<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnityRoleplayController extends Controller
{
    public function index()
    {
        return view('index'); // Return the index view
    }
    public function contact()
    {
        return view('contact'); // Return the contact view
    }
    public function regels()
    {
        return view('regels'); // Return the APV view
    }

}
