<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAnswersRequest;

class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test', [
            "title" => "Test",
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
     * @param  \App\Http\Requests\StoreAnswersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
 
        $request->validate([
            'gender' => 'required',
            'country' => 'required',
            'age' => 'required',
            'business-type' => 'required',
            'business-field' => 'required',
            'quest1' => 'required',
            'quest2' => 'required',
            'quest3' => 'required',
            'quest4' => 'required',
            'quest5' => 'required',
            'quest6' => 'required',
            'quest7' => 'required',
            'quest8' => 'required',
            'quest9' => 'required',
            'quest10' => 'required',
            'quest11' => 'required',
            'quest12' => 'required',
            'quest13' => 'required',
            'quest14' => 'required',
            'quest15' => 'required',
            'quest16' => 'required',
        ]);
 
        Answers::create($input);
 
        return back()->with('success','Thank you for answering the survey question!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function show(Answers $answers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function edit(Answers $answers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnswersRequest  $request
     * @param  \App\Models\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnswersRequest $request, Answers $answers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answers $answers)
    {
        //
    }
}
