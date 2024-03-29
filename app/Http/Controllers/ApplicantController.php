<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        return view("applications.index");
    }


        public function apply()
        {
            return view("applications.index");
        }
}
