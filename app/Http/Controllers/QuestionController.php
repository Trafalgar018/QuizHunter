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

    //Muestra la vista para crear preguntas
    public function create()
    {
        return view('question.create');
    }

    //Crea una pregunta y sus 3 respuestas
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

    //Muestra las preguntas del usuario autenticado
    public function load()
    {
            $user = Auth::user()->name;

            $questions = $user->questions()->latest()->paginate(6);

            return view('user.index', [
                'user'          => $user,
                'questions' => $questions
            ]);

    }
    //Muestra las preguntas de un usuario
    public function show($slug){

        $user = User::where('slug', $slug)->first();

        $questions = $user->questions()->latest()->paginate(6);

        return view('question.view', [
            'user'          => $user,
            'questions' => $questions
        ]);
    }

    //Destruye una pregunta
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

    //edita una pregunta
    public function remake(EditQuestionRequest $request,Question $question)
    {
        $question->fill([
            'title' => $request->input('question'),
        ]);

        return redirect()->route('user', Auth::user()->slug);
    }
}

