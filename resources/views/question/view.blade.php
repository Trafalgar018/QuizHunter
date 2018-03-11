@extends('layouts.app')

@section('content')

    <div class="row" style="margin: 25px">
        <br>
        <h1>My questions</h1>
    </div>

    <hr>
    <div class="container">
        @forelse($questions as $question)
            <div class="form-control col-md-12">
                <div class="row">
                    <div class="col-md-9" style="margin-top: 17px">
                        <p><strong>Título:</strong><a>
                                {{ $question['title'] }}</a></p>
                    </div>
                    <div class="row-control col-md-1">
                        <a href="{{ Route('question_edit', $question) }}">
                            <button type="submit" class="btn btn-default" style="margin: 25px">
                                <span class="fa fa-pencil"></span>
                            </button>
                        </a>
                    </div>
                    <div class="row-control col-md-1">
                        <form action="{{ Route('question_delete', $question) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-default" style="margin: 25px">
                                <span class="fa fa-times-circle"></span>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
            <br>
        @empty
            <P>No hay quizs disponibles.</P>
        @endforelse
    </div>
@endsection