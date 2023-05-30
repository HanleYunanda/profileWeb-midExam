<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Message;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() {
        return view('landingPage', [
            'profile' => Profile::latest()->first(),
            'educations' => Education::all(),
            'hardskills' => Skill::where('type', 'Hardskill')->get(),
            'softskills' => Skill::where('type', 'Softskill')->get(),
            'expBinus' => Experience::where('category_id', 1)->get(),
            'expHimti' => Experience::where('category_id', 2)->get()
        ]);
    }

    public function saveMessage(Request $request) {

        $rules = [
            'email' => 'required',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Message::create($validatedData);

        return redirect('/')->with('succsess', 'New message has been saved!');
    }
}
