@extends('layouts.site')

@section('title')
    auth
@endsection

@section('content')

    <form class="form-horizontal" role="form" action="{{route('registr')}}" method="post">
        {{ csrf_field() }}


        <div class="form-group">
            <label for="first_name" class="col-md-4 control-label">Ім'я</label>

            <div class="col-md-6">
                <input id="first_name" type="text" class="form-control" name="first_name"
                       value="" autofocus>

            </div>
        </div>


        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Електронна адреса</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                       required>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Пароль</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Підтвердити пароль</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                       required>
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Реєстрація
                </button>
            </div>
        </div>
    </form>
@endsection