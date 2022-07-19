@extends('backend.layouts.auth')

@section('content')
    <div class="brand-logo">
        <img src="{{ asset('backend/images/logo.svg') }}" alt="logo">
    </div>
    <h4>Yönetici Girişi</h4>
    <form method="POST" action="{{ route('login') }}" class="pt-3">
        @csrf
        @if(session('status'))
            <div class="alert alert-info rounded">
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
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="E-Posta Adresi">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Şifre">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-dark btn-lg font-weight-medium auth-form-btn">
                Giriş Yap
            </button>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input name="remember" checked type="checkbox" class="form-check-input">
                    Beni Hatırla!
                </label>
            </div>
            <a href="{{ route('password.request') }}" class="auth-link text-black">Şifremi unuttum ?</a>
        </div>
    </form>
@endsection
