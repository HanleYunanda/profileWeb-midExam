<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dashboardSkill', [
            'hardskills' => Skill::where('type', 'Hardskill')->get(),
            'softskills' => Skill::where('type', 'Softskill')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.dashboardSkillCreate', [
            'typeSkill' => ['Hardskill', 'Softskill']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'value' => 'required',
            'type' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Skill::create($validatedData);

        return redirect('/dashboard/skill')->with('succsess', 'New skill has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('dashboard.dashboardSkillEdit', [
            'skill' => $skill,
            'typeSkill' => ['Hardskill', 'Softskill']
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $rules = [
            'name' => 'required',
            'value' => 'required',
            'type' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Skill::where('id', $skill->id)->update($validatedData);

        return redirect('/dashboard/skill')->with('succsess', 'Skill has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        Skill::destroy($skill->id);
        return redirect('/dashboard/skill')->with('success', 'Your skill has been deleted!');
    }
}
