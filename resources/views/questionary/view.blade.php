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
                            <p  style="margin-bottom: 20px"><span class="label label-primary">{{ $question->title }}</span></p>
                            <br>
                            @foreach($answers as $answer)
                                @foreach($answer as $item)
                                    @if($item->question_id == $question->id)
                                <p  style="margin-bottom: 5px;margin-top: 5px"><span class="label label-primary">{{ $item->answer }}</span></p>
                                <br>
                                    @endif
                                @endforeach
                             @endforeach
                            <br>
                            <hr>
                            <br>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection