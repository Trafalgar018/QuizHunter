@extends('layouts.app')

@section('content')
@forelse($questionaries as $questionary)
    <div class="container">
        <div class="col-md-12">
            <p><strong>Título:</strong> {{ $questionary['title'] }}</p>
            <p><strong>Descripción:</strong> {{ $questionary['description'] }}</p>
        </div>
    </div>
    <hr>
@empty
    <p>No hay cuestionarios para mostrar.</p>
@endforelse


@endsection