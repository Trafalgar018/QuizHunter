<?php

namespace App\Http\Controllers;
use App\Answer;
Use App\User;
use App\Question;
use App\Http\Requests\CreateQuestionRequest;
use App\Http\Requests\EditQuestionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function create()
    {
        return view('question.create');
    }

    public function store(CreateQuestionRequest $request)
    {
        $user = $request->user();

        $question = Question::create([
            'title' => $request->input('question'),
            'user_id' => $user->id,

        ]);

        for ($i = 1; $i <= 3; $i++) {

            $correct = false;

            if($_POST["radios"])
            {
                $correct = true;
            }


            Answer::create([
                'answer' => $request->input('answer' . $i),
                'correct'=> false,
                'question_id' => $question->id,
            ]);

        }
        return redirect('/home');
    }

    public function load()
    {
            $user = Auth::user()->name;

            $questions = $user->questions()->latest()->paginate(6);

            return view('user.index', [
                'user'          => $user,
                'questions' => $questions
            ]);

    }

    public function show($slug){

        $user = User::where('slug', $slug)->first();

        $questions = $user->questions()->latest()->paginate(6);

        return view('question.view', [
            'user'          => $user,
            'questions' => $questions
        ]);
    }

    public function destroy(Question $question)
    {
        $question->questionaries()->detach();
        $question->delete();
        return redirect()->route('user', Auth::user()->slug);
        //return redirect()->back();
    }

    public function edit($question){
        return view('question.edit',[
            'question' => $question
        ]);
    }

    public function remake(EditQuestionRequest $request,Question $question)
    {
        $question->fill([
            'title' => $request->input('question'),
        ]);

        return redirect()->route('user', Auth::user()->slug);
    }
}

