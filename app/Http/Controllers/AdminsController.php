<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminsController extends Controller
{
    public function index()
    {
        return view("Admin.views.dashboard");
    }

    public function postjobform()
    {
        $jobcategories = Category::all();
        $companies = Company::all();
        $locations = City::all();
       return view("Admin.views.dashboard-post", compact("jobcategories","companies","locations"));
    }

    public function managejobs()
    {
        $user = auth()->user();
        $jobs = Job::where("user_id", $user->id)
        ->orderBy("created_at","desc")
        ->paginate(10);
        return view("Admin.views.manage-jobs", compact("jobs"));
    }

    public function applicants()
    {
        return view("Admin.views.applicants");
    }

    public function company()
    {
        return view("Admin.views.company-profile");
    }

    public function resumes()
    {
        return view("Admin.views.shortlistedjobs");
    }

    public function store(JobRequest $request)
    {
        try {
            $validatedData = $request->validated();
            if ($request->hasFile('image')) {
                $uploadedFile = $request->file('image');
                $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
                $filePath = $uploadedFile->storeAs('images', $fileName, 'public');
                $validatedData['image'] = $filePath;
            }
            
            $job = new Job();
            $job->fill($validatedData);
            $job->title = $request->input('title');
            $job->description = $request->input('description');
            $job->salary = $request->input('salary');
            $job->position = $request->input('position');
            $job->expiration_date = $request->input('expiration_date');
            $job->skills = $request->input('skills');
            $job->experience_level = $request->input('experience_level');
            $job->education_level = $request->input('education_level');
            $job->responsibilities = $request->input('responsibilities');
            $job->job_type = $request->input('job_type');
            $job->user_id = auth()->user()->id; 
            $job->city_id = $request->input('city_id');
            $job->company_id = $request->input('company_id');
            $job->category_id = $request->input('category_id');
            $job->save();
        
            return redirect('/')->with('message', 'Job created successfully!');
        } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->back()->with('error', 'An error occurred: ' . $th->getMessage());
        }
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);
        $jobcategories = Category::all();
        $locations = City::all();
        $companies = Company::all();
        return view('Admin.views.dashboard-job-edit', compact('job', 'jobcategories', 'locations', 'companies'));
    }

    public function destroy(Job $job)
    {
        $property = Job::findOrFail($job->id);
        $property->delete();
        return redirect()->back()->with("message","Job was deleted");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    
}
