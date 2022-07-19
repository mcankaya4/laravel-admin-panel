@extends('backend.layouts.auth')

@section('content')
    <div class="brand-logo">
        <img src="{{ asset('backend/images/logo.svg') }}" alt="logo">
    </div>
    <h4>Şifrenizi unuttunuz mu?</h4>
        <form class="login100-form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <p class="text-muted">Kayıtlı eposta adresinize sıfırlama kodu göndererek değiştirebilirsiniz.</p>
            @if(session('status'))
                <div class="alert alert-info rounded">
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
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="E-Posta Adresi">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-dark btn-lg font-weight-medium auth-form-btn">
                Gönder
            </button>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                </label>
            </div>
            <a href="{{ route('login') }}" class="auth-link text-black">Yönetici Giriş Ekranına Dön</a>
        </div>
    </form>
@endsection





