<?php

namespace App\Http\Controllers;

use App\Models\Profile_questions;
use App\Http\Requests\StoreProfile_questionsRequest;
use App\Http\Requests\UpdateProfile_questionsRequest;
use Prophecy\Call\Call;

class ProfileQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('test', [
            "title" => "Test",
            "prof_quests" => Profile_questions::all()
        ]);
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
     * @param  \App\Http\Requests\StoreProfile_questionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfile_questionsRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile_questions  $profile_questions
     * @return \Illuminate\Http\Response
     */
    public function show(Profile_questions $profile_questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile_questions  $profile_questions
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile_questions $profile_questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfile_questionsRequest  $request
     * @param  \App\Models\Profile_questions  $profile_questions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfile_questionsRequest $request, Profile_questions $profile_questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile_questions  $profile_questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile_questions $profile_questions)
    {
        //
    }
}
