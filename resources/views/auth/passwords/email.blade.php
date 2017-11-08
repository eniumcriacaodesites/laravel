@extends('auth.templates.template')

@section('content-form')

@if (session('status'))
<div style="display: block; padding: 15px;">
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
</div>
@endif

<form class="login form" method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Digite seu email" required>

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-login">
            Enviar link para recuperação de senha
        </button>
    </div>
</form>
@endsection
