<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;


class JobsController extends Controller
{
    //

     /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $jobs = Job::orderBy("created_at","desc")
            ->paginate(10);
            return view("pages.jobs", compact("jobs"));
        }
    
        /**
         * Show the form for creating a new resource.
         */
    
        /**
         * Display the specified resource.
         */
        public function show(Job $job)
        {
            $job = Job::with("city", "company", "category")->findOrFail($job);
             $nearbyListings = Job::where('city_id', $job->city_id)
                    ->where('id', '!=', $job)
                    ->paginate(4);
            
            return view("pages.job", compact("job"));
        }
    
        /**
         * Show the form for editing the specified resource.
         */

}
