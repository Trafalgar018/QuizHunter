@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 70px">
        <div class="signup-form-container">
            <div class="panel-body">
                <div class="form-body">

                    <div class="form-control">
                        <div class="panel-heading" style="text-align: center">
                            <h2>{{ $questionary->title }}</h2>
                        </div>
                        <div class="form" style="margin-top: 50px">
                            <div>
                                <strong>Descripcion: </strong><a>{{$questionary->description}}</a>
                            </div>
                            <div>
                                <strong>Dificultad: </strong><a>{{$questionary->dificult}}</a>
                            </div>
                            <div>
                                <strong>Fecha de publicacion: </strong><a>{{$questionary->created_at}}</a>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <!--Preguntas-->
                        @foreach($questions as $question)
                            <div class="container">
                                <B>{{ $question->title }}</B>
                            </div>
                            <br>
                            <div class="container">
                                @foreach($answers as $answer)
                                    @foreach($answer as $item)
                                        @if($item->question_id == $question->id)
                                            <p style="margin-bottom: 5px;margin-top: 5px"><span
                                                        class="label label-primary">⚪ {{ $item->answer }}</span></p>
                                            <br>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            <br>
                            <hr>
                            <br>
                        @endforeach
                    </div>
                </div>
                <div class="form-group" style="margin: 15px;margin-top: 40px">
                    <form action="/comment/create/{{ $questionary->id }}" method="post">
                        {{ csrf_field() }}
                        <textarea class="form-control" id="comment" name="comment" rows="6"></textarea>
                        @if($errors->has('comment'))
                            @foreach($errors->get('comment') as $message)
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif

                        <div class="row">
                            <button type="submit" class="btn btn-info" style="margin: 15px;width: 60px">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>
                    <br>
                    @foreach($comments as $comment)
                        <div class="form-control">
                            <p>{{$comment->comment}}</p>
                        </div>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection