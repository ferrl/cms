@extends('layouts::backend.layout')

@section('content')
    <div class="login-screen text-center animated fadeInDown">
        <h1 class="logo-name">
            <img src="{{ asset('themes/backend/img/logo.png') }}" alt="{{ trans('backend.title') }}">
        </h1>
        <h3>Preencha seus dados</h3>
        @include('layouts::backend.alerts')
        <form action="{{ route('backend.auth.login') }}" method="POST">
            {!! csrf_field() !!}
            <fieldset class="form-group">
                <label for="email">{{ trans('backend.auth.email.label') }}</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="">
            </fieldset>
        </form>
    </div>
@endsection
