@extends('backend.layouts.auth')


@section('content')
    <form class="login100-form" method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <span class="login100-form-title p-b-45">Yeni Şifre Belirle</span>
        @if($errors->any())
            <div class="alert alert-danger rounded">
                @foreach ($errors->all() as $error)
                    * {{ $error }} <br>
                @endforeach
            </div>
        @endif
        <div class="wrap-input100">
            <input class="input100" type="text" name="email" placeholder="Email" value="{{ $request->get('email') }}">
        </div>
        <div class="wrap-input100">
            <input class="input100" type="password" name="password" placeholder="Yeni Şifre">
        </div>
        <div class="wrap-input100">
            <input class="input100" type="password" name="password_confirmation" placeholder="Yeni Şifre Tekrar">
        </div>
        <div class="container-login100-form-btn p-t-30">
            <button type="submit" class="login100-form-btn">
                Kaydet
            </button>
        </div>
        <div class="w-full p-t-25 text-center">
            <div>
                <a href="{{ route('login') }}" class="txt1">
                    Giriş Yap?
                </a>
            </div>
        </div>
    </form>
@endsection


