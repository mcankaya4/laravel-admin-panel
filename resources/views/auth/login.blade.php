@extends('backend.layouts.auth')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="login100-form">
        @csrf
        <span class="login100-form-title p-b-45">Admin Girişi</span>
        @if(session('status'))
            <div class="alert alert-success rounded">
                <strong>İşlem başarılı!</strong> Yeni şifrenizle giriş yapabilirsiniz.
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger rounded">
                @foreach ($errors->all() as $error)
                    * {{ $error }} <br>
                @endforeach
            </div>
        @endif
        <div class="wrap-input100">
            <input class="input100" type="text" name="email" placeholder="Email">
        </div>
        <div class="wrap-input100">
            <input class="input100" type="password" name="password" placeholder="Şifre">
        </div>
        <div class="flex-sb-m w-full p-t-15 p-b-20">
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Beni Hatırla
                    <span class="form-check-sign">
                        <span class="check"></span>
                    </span>
                </label>
            </div>
            <div>
                <a href="{{ route('password.request') }}" class="txt1">
                    Şifremi unuttum?
                </a>
            </div>
        </div>
        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
                Giriş
            </button>
        </div>
        <div class="text-center p-t-45 p-b-20">
            <span class="txt2">
                info@admin.com
            </span>
        </div>
    </form>
@endsection
