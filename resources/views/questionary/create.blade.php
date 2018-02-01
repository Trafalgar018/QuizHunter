@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
	<div class="panel-heading" style="margin: 20px">
		<h2>Crear cuestionario</h2>
	</div> 
	<div class="panel-body">


    <form action="{{ url('/') }}/questionary/create" method="post">
        {{ csrf_field() }}
        <label for="name" class="col-md-4 control-label">Título</label>
        <div class="form-group @if( $errors->has('title'))has-error @endif">
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" >
        </div>
        @if($errors->has('title'))
            @foreach($errors->get('title') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <label for="name" class="col-md-4 control-label">Descripción</label>
        <div class="form-group @if( $errors->has('description'))has-error @endif">
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
        </div>
        @if($errors->has('description'))
            @foreach($errors->get('description') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif


        <label for="name" class="col-md-4 control-label">Etiquetas</label>
        <div class="form-group @if( $errors->has('tags'))has-error @endif">
            <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags') }}">
        </div>
        @if($errors->has('tags'))
            @foreach($errors->get('tags') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="form-group">
      		<label for="dificult">Dificultad</label>
      		<select class="form-control" id="dificult" name="dificult">
        	<option>1</option>
        	<option>2</option>
        	<option>3</option>
        	<option>4</option>
        	<option>5</option>

      </select>
  		</div>



        <button type="submit" class="btn btn-primary">Register</button>
    </form>


        
    </div>
</div>
</div>
@endsection