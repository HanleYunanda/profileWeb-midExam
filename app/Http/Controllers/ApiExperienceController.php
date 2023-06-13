<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\AddExperienceRequest;
use Illuminate\Support\Facades\Auth;

class ApiExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            Auth::guard('api')->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $err) {
            return (new ApiRule)->responsemessage(
                "Action not authorized",
                null,
                401
            );
        }
        $experiences = Experience::all();
        return (new ApiRule)->responsemessage(
            "Experiences data",
            $experiences,
            200
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {

    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddExperienceRequest $request)
    {
        try {
            Auth::guard('api')->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $err) {
            return (new ApiRule)->responsemessage(
                "Action not authorized",
                null,
                401
            );
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'period' => 'required',
            'desc' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        if($validator->fails()) {
            return (new ApiRule)->responsemessage(
                "There was an error in the data you inputted",
                $validator->errors(),
                422
            );
        } else {
            if($experience = Experience::create($validator->validated())) {
                return (new ApiRule)->responsemessage(
                    "New experience created successfully",
                    $experience,
                    200
                );
            } else {
                return (new ApiRule)->responsemessage(
                    "Failed to create experience",
                    null,
                    500
                );
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            Auth::guard('api')->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $err) {
            return (new ApiRule)->responsemessage(
                "Action not authorized",
                null,
                401
            );
        }

        $experience = Experience::find($id);

        if(!$experience) {
            return (new ApiRule)->responsemessage(
                "Experience not found",
                null,
                404
            );
        } else {
            return (new ApiRule)->responsemessage(
                "Experience data",
                $experience,
                200
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {

    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            Auth::guard('api')->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $err) {
            return (new ApiRule)->responsemessage(
                "Action not authorized",
                null,
                401
            );
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'period' => 'required',
            'desc' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        $experience = Experience::find($id);
        if(!$experience) {
            return (new ApiRule)->responsemessage(
                "Experience data not found",
                null,
                404
            );
        }

        if($validator->fails()) {
            return (new ApiRule)->responsemessage(
                "There was an error in the data you inputted",
                $validator->errors(),
                422
            );
        } else {
            if($experience->update($validator->validated())) {
                return (new ApiRule)->responsemessage(
                    "Experience data updated",
                    $experience,
                    200
                );
            } else {
                return (new ApiRule)->responsemessage(
                    "Failed to update experience data",
                    null,
                    500
                );
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Auth::guard('api')->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $err) {
            return (new ApiRule)->responsemessage(
                "Action not authorized",
                null,
                401
            );
        }

        $experience = Experience::find($id);

        if (!$experience){
            return (new ApiRule)->responsemessage(
                "Experience data not found",
                null,
                404
            );
        }

        if ($experience -> delete()){
            return (new ApiRule)->responsemessage(
                "Experience data deleted",
                $experience,
                200
            );
        } else {
            return (new ApiRule)->responsemessage(
                "Failed to delete experience data",
                null,
                500
            );
        }
    }
}
