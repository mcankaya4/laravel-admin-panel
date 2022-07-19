@extends('backend.layouts.auth')

@section('content')
    <div class="text-center">
        <img src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}" class="lock-profile-img" alt="img">
        <form class="pt-2" action="{{ route('password.confirm') }}" method="POST">
            @csrf
            <p class="text-muted">{{ \Illuminate\Support\Facades\Auth::user()->email }}</p>
            @if($errors->any())
                <div class="alert alert-danger rounded">
                    @foreach ($errors->all() as $error)
                        * {{ $error }} <br>
                    @endforeach
                </div>
            @endif
            <div class="form-group">
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Şifre">
            </div>
            <div class="mt-1">
                <button type="submit" class="btn btn-block btn-dark btn-lg font-weight-medium auth-form-btn">Giriş Yap</button>
            </div>
            <div class="mt-3 text-center">
                <a href="{{ route('login') }}" class="auth-link text-muted">Farkı bir kullanıcı ile giriş yap!</a>
            </div>
        </form>
    </div>
@endsection


