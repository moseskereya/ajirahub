<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationsRequest;
use App\Models\application;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view("");
    }


    public function store(ApplicationsRequest $request)
    {
        try {
            $validatedData = $request->validated();
            if ($request->hasFile('cv')) {
                $uploadedFile = $request->file('cv');
                $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
                $filePath = $uploadedFile->storeAs('cvs', $fileName, 'public');
                $validatedData['cv'] = $filePath;
            }
            
            $application = new application();
            $application->fill($validatedData);
            $application->job_id = $request->input('job_id');
            $application->name = $request->input('name');
            $application->email = $request->input('email');
            $application->phone = $request->input('phone');
            $application->save();
        
            return redirect('/')->with('message', 'Job  Application was sent successfully!');
        } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->back()->with('error', 'An error occurred: ' . $th->getMessage());
        }
    }
}

