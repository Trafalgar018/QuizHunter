@extends('layouts.app')

@section('content')
    <br>
    <div class="container" style="text-align: center">
        <h2>Añadir preguntas</h2>
    </div>
    <hr>
    <br>
    <div class="form-row col-md-12">
        <div class="form-control  col-md-5" style="margin: 20px;align-content: center;margin-left: 40px;margin-right: 40px">
        @forelse($questions as $question)
            <div class="form-control">
                <div class="form" style="margin-top: 15px">
                    <p><strong>Título:</strong> {{$question['title'] }}</p>
                </div>
            </div>
            <br>
        @empty

        <h4>No hay preguntas</h4>

        @endforelse
        </div>

        <div class="col-md-1">
        </div>

        
        <div class="form-control col-md-5" style="margin: 20px;height: 500px; text-align:center">
            <h3 style="margin: 20px">{{$questionary['title']}}</h3>
            <hr>
        </div>
    </div>
@endsection