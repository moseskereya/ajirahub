<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $categories = Category::with('jobs')->take(4)->get();
        $jobs = Job::query()
        ->with(['company', 'category', 'city'])
        ->orderBy("created_at", "desc")
        ->paginate(12);

        if ($search) {
            $jobs->where('title', 'like', "%$search%")
                 ->orWhere('description', 'like', "%$search%")
                 ->orWhereHas('company', function ($query) use ($search) {
                     $query->where('name', 'like', "%$search%");
                 });
        }


        $totaljobs = Job::count();
        $jobsAddedToday = Job::whereDate('created_at', today())->count();


        $categories = Category::take(4)->get();
        $itCategory = Category::where('name', 'Information Technology')->first();
        $itJobs = $itCategory ? $itCategory->jobs()->take(6)->get() : collect(); 
        $FinaneCategory = Category::where('name', 'Finance')->first();
        $finaceJobs = $FinaneCategory ? $FinaneCategory->jobs()->take(6)->get() : collect();
        $educationCategory = Category::where('name', 'Education')->first();
        $educationJobs = $educationCategory ? $educationCategory->jobs()->take(6)->get() : collect();
        $healthCategory = Category::where('name', 'Healthcare')->first();
        $healthJobs = $healthCategory ? $healthCategory->jobs()->take(6)->get() : collect();

        return view("pages.home", compact('jobs','itJobs', 'finaceJobs', 'educationJobs', 'healthJobs', 'categories', 'totaljobs', 'jobsAddedToday'));

    }
    public function about()
    {
        return view("pages.about");
    }
    public function contact()
    {
        return view("pages.contact");
    }
    
    public function faqs()
    {
        return view("pages.faq");
    }

    public function pricing()
    {
        return view("pages.pricing");
    }

}
