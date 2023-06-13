<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiCategoryController extends Controller
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

        $categories = Category::all();
        return (new ApiRule)->responsemessage(
            "Categories data",
            $categories,
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
    public function store(Request $request)
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
            'name' => 'required|string',
        ]);

        if($validator->fails()) {
            return (new ApiRule)->responsemessage(
                "There was an error in the data you inputted",
                $validator->errors(),
                422
            );
        } else {
            if($category = Category::create($validator->validated())) {
                return (new ApiRule)->responsemessage(
                    "New Category created successfully",
                    $category,
                    200
                );
            } else {
                return (new ApiRule)->responsemessage(
                    "Failed to create Category",
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

        $category = Category::find($id);

        if(!$category) {
            return (new ApiRule)->responsemessage(
                "Category not found",
                null,
                404
            );
        } else {
            return (new ApiRule)->responsemessage(
                "Category data",
                $category,
                200
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Category $category)
    // {

    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
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
            'name' => 'required|string',
        ]);

        $category = Category::find($id);
        if(!$category) {
            return (new ApiRule)->responsemessage(
                "Category data not found",
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
            if($category->update($validator->validated())) {
                return (new ApiRule)->responsemessage(
                    "Category data updated",
                    $category,
                    200
                );
            } else {
                return (new ApiRule)->responsemessage(
                    "Failed to update category data",
                    null,
                    500
                );
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
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

        $category = Category::find($id);

        if (!$category){
            return (new ApiRule)->responsemessage(
                "Category data not found",
                null,
                404
            );
        }

        if ($category -> delete()){
            return (new ApiRule)->responsemessage(
                "Category data deleted",
                $category,
                200
            );
        } else {
            return (new ApiRule)->responsemessage(
                "Failed to delete category data",
                null,
                500
            );
        }
    }
}
