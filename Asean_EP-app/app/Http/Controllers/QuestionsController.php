<?php

namespace App\Http\Controllers;

use App\Models\questions;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class questionsController extends Controller{

    public function getquestions() {

        return view('test', [
            "title" => "Test",
            "questions" => questions::all()
        ]);
    }

    public function showquestion($id){

        return view(['test',
            "title"=>"Test",
            "questions"=> questions::find($id) 
        ]);
    }
}
