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

     /**
         * Display a listing of the resource.
         */
        public function index(Request $request)
        {
            $search = $request->input('search');
            $category = $request->input('category');
        
            $jobsQuery = Job::query()
                ->with(['company', 'category', 'city'])
                ->orderBy("created_at", "desc");
        
            if ($search) {
                $jobsQuery->where(function($query) use ($search) {
                    $query->where('title', 'like', "%$search%")
                        ->orWhere('description', 'like', "%$search%")
                        ->orWhereHas('company', function ($query) use ($search) {
                            $query->where('name', 'like', "%$search%");
                     });
                });
            }
        
            if ($category) {
                $jobsQuery->where('category_id', $category);
            }
        
            $jobs = $jobsQuery->paginate(10);
        
            $totaljobs = Job::count();
            $categories = Category::with('jobs')->take(4)->get();
        
            return view("pages.jobs", compact("jobs", "totaljobs", "categories"));
        }
        
        
     
    
        /**
         * Show the form for creating a new resource.
         */
    
        /**
         * Display the specified resource.
         */
       
         public function show($id)
         {
            $job = Job::with(['company', 'category', 'city'])->find($id);
            $skills = explode(',', $job->skills);
            $responsibilities = explode(',', $job->responsibilities);


            $relatedJobs = Job::where('category_id', $job->category_id)
            ->where('id', '!=', $id) 
            ->inRandomOrder() 
            ->take(4) 
            ->get();


            return view('pages.job', compact('job', 'skills','responsibilities', 'relatedJobs'));
         }
    
        /**
         * Show the form for editing the specified resource.
         */

}
