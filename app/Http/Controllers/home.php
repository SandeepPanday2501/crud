<?php

namespace App\Http\Controllers;

use App\Models\EmployeeController;
use Illuminate\Http\Request;

class home extends Controller
{


    function login()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }
}