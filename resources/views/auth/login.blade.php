@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 70px">

        <div class="signup-form-container">

            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-header">
                    <h3 class="form-title"><i class="fa fa-user"></i>Inicio de sesión</h3>
                    <div class="pull-right">
                        <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
                    </div>
                </div>

                <div class="form-body">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                            <br>
                            <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('email') }}
                                </div>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>
                        </div>
                        @if ($errors->has('password'))
                            <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('password') }}
                                </div>
                        @endif
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-info">
                            <span class="glyphicon glyphicon-log-in"></span>Enviar
                        </button>
                    </div>

            </form>

        </div>

    </div>
@endsection
