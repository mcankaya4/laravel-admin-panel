@extends('backend.layouts.auth')

@section('content')
    <img src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}"
         class="rounded-circle center-block margin-b-20 " width="100" alt="">
    <p class="text-center">Lütfen giriş şifrenizi tekrar yazın.</p>
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="form-group group-icon">
            <input id="exampleInputPassword1" name="password" type="password" placeholder="Şifre" class="form-control">
            <span class="icon-lock text-muted icon-input"></span>
        </div>
        <div class="clearfix">
            <div class="float-left">
                <a href="{{ route('password.request') }}">
                    <small>Şifremi unuttum?</small>
                </a>
            </div>
            <div class="float-right">
                <button type="submit" class="btn btn-primary btn-rounded box-shadow">Giriş Yap</button>
            </div>
        </div>
    </form>
@endsection


