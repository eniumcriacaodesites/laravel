@extends('auth.templates.template')

@section('content-form')
<form class="login form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Informe o seu e-mail" required autofocus>

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

        <input  id="password" type="password" class="form-control" name="password" placeholder="Informe a sua senha" required>

        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif

    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-login">
            <i class="fa fa-sign-in"></i> Login
        </button>
    </div>
    <div class="form-group text-right">
        <a  href="{{ route('password.request') }}">
            Recuperar Senha?
        </a>
    </div>

</form>
@endsection
