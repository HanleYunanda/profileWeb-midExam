<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class DashboardEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dashboardEducation', [
            'educations' => Education::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('dashboard.dashboardEducationEdit', [
            'edu' => $education
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $rules = [
            'name' => 'required|max:100',
            'year' => 'required',
            'desc' => 'required',
            'image' => 'image|file|max:200000'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('education');
        }

        Education::where('id', $education->id)->update($validatedData);

        return redirect('/dashboard/education')->with('succsess', 'Education info has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        //
    }
}
