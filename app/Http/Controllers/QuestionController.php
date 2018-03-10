<?php

namespace App\Http\Controllers;
use App\Answer;
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

    public function load(){
            $user = Auth::user()->name;

            $questions = $user->questions()->latest()->paginate(6);

            return view('user.index', [
                'user'          => $user,
                'questions' => $questions
            ]);

    }

    /**
     * @param Chusqer $chusqer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $question = Questionary::where('id',$id)->frist();

        if( ! Auth::user()->can('delete', $question) ){
            return redirect()->route('home');
        }
        $question->delete();
    }
}
