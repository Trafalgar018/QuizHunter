<?php

namespace App\Http\Controllers;
use App\Questionary;
use App\Question;
use App\Http\Requests\CreateQuestionRequest;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create()
    {
        return view('question.create');
    }

    public function store(CreateQuestionRequest $request)
    {

        Question::create([
            'title' => $request->input('question'),
        ]);

//        for ($i = 1; $i <= 3; $i++) {
//            Answer::create([
//                'answer' => $request->input('answer' . $i),
//                'correct'=> $request->input('radio'+$i),
//                'question_id' => $question->id,
//            ]);
//
//        }
        return redirect('/home');
    }
}
