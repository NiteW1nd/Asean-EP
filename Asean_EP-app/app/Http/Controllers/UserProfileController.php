<?php

namespace App\Http\Controllers;

use App\Models\user_profile;
use App\Http\Requests\Storeuser_profileRequest;
use App\Http\Requests\Updateuser_profileRequest;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeuser_profileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeuser_profileRequest $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:5|max:25|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:16',
        ]);
        
        user_profile::create($validatedData);
    
        return redirect('/results');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function show(user_profile $user_profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function edit(user_profile $user_profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateuser_profileRequest  $request
     * @param  \App\Models\user_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function update(Updateuser_profileRequest $request, user_profile $user_profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_profile  $user_profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_profile $user_profile)
    {
        //
    }
}
