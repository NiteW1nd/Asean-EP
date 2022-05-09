<?php

namespace App\Http\Controllers;

use App\Models\Survey_answer;
use App\Http\Requests\StoreSurvey_answerRequest;
use App\Http\Requests\UpdateSurvey_answerRequest;

class SurveyAnswerController extends Controller
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
     * @param  \App\Http\Requests\StoreSurvey_answerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSurvey_answerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Survey_answer  $survey_answer
     * @return \Illuminate\Http\Response
     */
    public function show(Survey_answer $survey_answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Survey_answer  $survey_answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey_answer $survey_answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSurvey_answerRequest  $request
     * @param  \App\Models\Survey_answer  $survey_answer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSurvey_answerRequest $request, Survey_answer $survey_answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Survey_answer  $survey_answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey_answer $survey_answer)
    {
        //
    }
}
