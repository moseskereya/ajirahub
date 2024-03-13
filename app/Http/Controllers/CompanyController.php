<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
            'estblished_date' => 'nullable|date',
            'team_size' => 'nullable|string',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', 
            'industry' => 'nullable|string',
            'about' => 'nullable|string',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $uploadedFile = $request->file('logo');
            $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
            $filePath = $uploadedFile->storeAs('logos', $fileName, 'public');
            $validatedData['logo'] = $filePath;
        }
        $company = new Company($validatedData);
        $company->save();
        return redirect('/dashboard')->with('message', 'Company information saved successfully!');
    }
}
