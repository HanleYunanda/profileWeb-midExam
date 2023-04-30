<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class DashboardExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dasboardExperience', [
            'experiences' => Experience::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.dashboardExperienceCreate', [
            'typeExp' => ['Binus University', 'HIMTI']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'period' => 'required',
            'type' => 'required',
            'desc' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Experience::create($validatedData);

        return redirect('/dashboard/experience')->with('succsess', 'New experience has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view('dashboard.dashboardExperienceEdit', [
            'exp' => $experience,
            'typeExp' => ['Binus University', 'HIMTI']
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $rules = [
            'title' => 'required',
            'period' => 'required',
            'type' => 'required',
            'desc' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Experience::where('id', $experience->id)->update($validatedData);

        return redirect('/dashboard/experience')->with('succsess', 'Your experience has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        Experience::destroy($experience->id);
        return redirect('/dashboard/experience')->with('success', 'Your experience has been deleted!');
    }
}
