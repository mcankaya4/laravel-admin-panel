@extends('backend.layouts.auth')

@section('content')
    <div class="brand-logo">
        <img src="{{ asset('backend/images/logo.svg') }}" alt="logo">
    </div>
    <h4>Yeni Şifre Belirle</h4>
    <form class="pt-3" method="POST" action="{{ route('password.update') }}">
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
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="E-Posta Adresi" value="{{ $request->get('email') }}">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" type="password" name="password" placeholder="Yeni Şifre">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" type="password" name="password_confirmation" placeholder="Yeni Şifre Tekrar">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-dark btn-lg font-weight-medium auth-form-btn">
                Kaydet
            </button>
        </div>
    </form>
@endsection



