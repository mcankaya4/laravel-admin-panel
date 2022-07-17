@extends('backend.layouts.auth')

@section('content')
    <h3 class="text-center"><small>Şifremi Sıfırla</small></h3>
    <br>
    <form method="POST" action="{{ route('password.update') }}">
    @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="form-group group-icon @if($errors->has('email')) has-error @endif">
            <input id="emailid" type="email" name="email" value="{{ $request->get('email') }}" class="form-control">
            <span class="icon-envelope text-muted icon-input"></span>
            @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group group-icon @if($errors->has('password')) has-error @endif">
            <input autofocus id="emailid" type="password" name="password" placeholder="Yeni şifre" class="form-control">
            <span class="icon-lock text-muted icon-input"></span>
            @if($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group group-icon @if($errors->has('password_confirmation')) has-error @endif">
            <input id="emailid" type="password" name="password_confirmation" placeholder="Yeni şifre tekrar" class="form-control">
            <span class="icon-lock text-muted icon-input"></span>
            @if($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
        <div class="clearfix">
            <button type="submit" class="btn btn-block btn-rounded box-shadow btn-primary">Şifremi Sıfırla
            </button>
        </div>
    </form>
@endsection


