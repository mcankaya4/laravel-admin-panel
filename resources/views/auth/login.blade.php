<!-- Session Status -->
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

<!-- Validation Errors -->
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}


@extends('backend.layouts.auth')

@section('content')
    <h3 class="text-center"><small>Admin Girişi</small></h3>
    <br>
    <form method="POST" action="{{ route('login') }}" role="form">
        @csrf
        <div class="form-group">
            <label for="exampleuser1">Email Adresi</label>
            <div class="group-icon">
                <input id="exampleuser1" name="email" type="text" placeholder="Email" class="form-control" required="">
                <span class="icon-envelope text-muted icon-input"></span>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Şifre</label>
            <div class="group-icon">
                <input id="exampleInputPassword1" name="password" type="password" placeholder="Şifre"
                       class="form-control">
                <span class="icon-lock text-muted icon-input"></span>
            </div>
        </div>
        <div class="clearfix">
            <div class="float-left">
                <div class="checkbox checkbox-primary margin-r-5">
                    <input id="checkbox2" name="remember" type="checkbox" checked>
                    <label for="checkbox2"> Beni Hatırla </label>
                </div>
            </div>
            <div class="float-right">
                <button type="submit" class="btn btn-block btn-primary btn-rounded box-shadow">Giriş Yap</button>
            </div>
        </div>
        <hr>
        <p class="text-center"><a href="{{ route('password.request') }}" class="text-muted">Şifremi unuttum!</a></p>
    </form>
@endsection
