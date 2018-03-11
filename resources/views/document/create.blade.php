@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 70px">
        <div class="signup-form-container">
            <div class="panel-heading" style="margin: 20px">
                <h2>Crear Documento</h2>
            </div>
            <div class="panel-body">
                <div class="form-body">
                    <form action="{{ url('/') }}/document/create"  method="post">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <label class="col-md-4 control-label">Texto</label>

                            <div class="form-group @if( $errors->has('document'))has-error @endif">

                                <div class="form-group">
                                        <textarea class="form-control" id="text" name="text"
                                                  rows="3"></textarea>
                                </div>
                                @if($errors->has('text'))
                                    @foreach($errors->get('text') as $message)
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="form-footer" style="text-align: center">
                            <button type="submit" class="btn btn-info">Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection