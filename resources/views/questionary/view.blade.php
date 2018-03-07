@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 70px">
        <div class="signup-form-container">
            <div class="panel-heading" style="text-align: center">
                <h2>{{ $questionary->title }}</h2>
            </div>
            <div class="panel-body">
                <div class="form-body">
                    <div class="form-control" style="margin-top: 50px">
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
                    <div class="form-control">
                        <!--Preguntas-->


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection