<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateDocumentRequest;
use Illuminate\Support\Facades\Auth;
use App\Document;
use App\user;

class DocumentController extends Controller
{
    public function create()
    {
        return view('document.create');
    }

    public function store(CreateDocumentRequest $request)
    {
        $user = $request->user();

        Document::create([
            'text' => $request->input('text'),
            'user_id' => $user->id,

        ]);

        return redirect('/home');
    }

    public function show($slug){

        $user = User::where('slug', $slug)->first();

        $documents = Document::where('user_id', $user->id)->latest()->paginate(10);

        return view('document.view', [
            'user'          => $user,
            'documents' => $documents
        ]);
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('user', Auth::user()->slug);
    }
}
