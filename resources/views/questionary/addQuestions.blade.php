@extends('layouts.app')

@section('content')
    <br>
    <div class="container" style="text-align: center">
        <h2>Añadir preguntas</h2>
    </div>
    <hr>
    <br>
    <div class="container">

    </div>
    <div class="form-row col-md-12">
        <div class="form-control  col-md-5"
             style="margin: 20px;align-content: center;margin-left: 40px;margin-right: 40px;overflow-y: paged-y-controls">

            <ul id="sortable1" class="droptrue" style="margin-right: 40px; height: 100%">
            @forelse($questions as $question)

                    <div class="form-control" style="margin-top: 15px;background-color: #d6d5cf;margin-bottom: 15px" id="{{$question['id']}}">
                            <strong>{{$question['title'] }}</strong>
                    </div>
            @empty
                <h4>No hay preguntas</h4>
            @endforelse
            </ul>
        </div>

        <div class="col-md-1" style="height: 570px;text-align: center">
            <button class="btn btn-info" id="envQuestions">
                <span class="glyphicon glyphicon-log-in"></span>Enviar
            </button>
        </div>


        <div id="cuestionario" data-id="{{$questionary['id']}}" class="form-control col-md-5" style="margin: 20px; text-align:center;overflow-y: paged-y;">
            <h3 style="margin: 20px">{{$questionary['title']}}</h3>
            <hr>
            <P>Añada sus preguntas</P>

            <ul id="sortable2" class="dropfalse" style="margin-right: 40px;height: 100%" >

            </ul>

        </div>
    </div>
@endsection