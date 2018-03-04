@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <h2>Añadir preguntas</h2>
    </div>
    <hr>
    <br>
    <div class="form-row">
        <div class="container  col-md-4">
        @forelse($questions as $question)
            <div class="form-control">
                <div class="form" style="margin-top: 17px">
                    <p><strong>Título:</strong> {{ $question['title'] }}</p>

                </div>
            </div>
            <br>
        @empty

    @endforelse


        </div>
        <div class="form-control col-md-5" style="margin-right: 100px; margin-left: 100px;height: 1000px">

        </div>
    </div>
@endsection