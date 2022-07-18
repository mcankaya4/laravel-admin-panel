@extends('backend.layouts.auth')

@section('content')
    <form class="login100-form" method="POST" action="{{ route('password.email') }}">
        @csrf
        <span class="login100-form-title p-b-45">Şifremi Unuttum</span>
        @if(session('status'))
            <div class="alert alert-success rounded">
                Şifre sıfırlama linki e-mail adresinize gönderildi.
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger rounded">
                @foreach ($errors->all() as $error)
                    * {{ $error }} <br>
                @endforeach
            </div>
        @endif
        <span class="error-subheader2 p-t-20 p-b-15">Kayıtlı email adresinizi yazınız.</span>
        <div class="wrap-input100">
            <input class="input100" type="text" name="email" placeholder="Email">
        </div>
        <div class="container-login100-form-btn p-t-30">
            <button type="submit" class="login100-form-btn">
                Şifremi Sıfırla
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





