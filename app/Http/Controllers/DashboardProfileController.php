<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dasboardProfile', [
            'profile' => Profile::latest()->first()
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
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        return view('dashboard.dashboardProfileEdit', [
            'profile' => $profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $rules = [
            'name' => 'required|max:100',
            'age' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'status' => 'required',
            'job' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'image|file|max:200000'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('profile-pictures');
        }

        Profile::where('id', $profile->id)->update($validatedData);

        return redirect('/dashboard/profile')->with('succsess', 'Profile has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
