<!-- Session Status -->
{{--<x-auth-session-status class="mb-4" :status="session('status')" />--}}


@extends('backend.layouts.auth')

@section('content')
    <h3 class="text-center"><small>Şifremi Sıfırla</small></h3>
    <br>
    @if(session('status'))
        <div class="alert alert-info">
            Şifre sıfırlama e-postası gönderildi.
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}" role="form">
        @csrf
        <div class="form-group group-icon @if($errors->has('email')) has-error @endif">
            <input id="emailid" type="email" name="email" placeholder="Email Adresi" class="form-control">
            <span class="icon-envelope text-muted icon-input"></span>
            @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="clearfix">
            <button type="submit" class="btn btn-block btn-rounded box-shadow btn-primary">Şifremi Sıfırla
            </button>
        </div>
        <hr>
        <p class="text-center"><a href="{{ route('login') }}" class="text-muted">Giriş Sayfasına Git</a></p>
    </form>
@endsection

