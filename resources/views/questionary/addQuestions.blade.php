@extends('layouts.app')

@section('content')
    <br>
    <div class="container" style="text-align: center">
        <h2>Añadir preguntas</h2>
    </div>
    <hr>
    <br>
    <div class="form-row col-md-12">
        <div class="form-control  col-md-5"
             style="margin: 20px;align-content: center;margin-left: 40px;margin-right: 40px;overflow: hidden;">

            <ul id="sortable1" class="droptrue" style="margin-right: 40px; height: 100%">
            @forelse($questions as $question)

                    <div class="form-control" style="margin-top: 15px">
                        <div class="form" style="margin-top: 15px">
                            <p><strong>Título:</strong> {{$question['title'] }}</p>
                        </div>
                    </div>

            @empty

                <h4>No hay preguntas</h4>

            @endforelse
            </ul>

        </div>

        <div class="col-md-1" style="height: 570px;">
        </div>


        <div class="form-control col-md-5" style="margin: 20px; text-align:center;overflow: hidden;">
            <h3 style="margin: 20px">{{$questionary['title']}}</h3>
            <hr>
            <P>Añada sus preguntas</P>
            <ul id="sortable2" class="dropfalse" style="margin-right: 40px;height: 100%" >

            </ul>

        </div>
    </div>
@endsection