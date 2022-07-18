@extends('backend.layouts.auth')

@section('content')
    <form class="login100-form" method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="login100-form-logo">
            <div class="image">
                <img src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}" alt="User">
            </div>
        </div>
        <span class="login100-form-title p-b-34 p-t-27">
						{{ \Illuminate\Support\Facades\Auth::user()->name }}
					</span>
        <div class="text-center">
            <p class="txt1 p-b-20">
                Kilitli
            </p>
        </div>
        @if($errors->any())
            <div class="alert alert-danger rounded">
                @foreach ($errors->all() as $error)
                    * {{ $error }} <br>
                @endforeach
            </div>
        @endif
        <div class="wrap-input100">
            <input class="input100" type="password" name="password" placeholder="Şifre">
        </div>
        <div class="container-login100-form-btn p-t-30">
            <button type="submit" class="login100-form-btn">
                Giriş
            </button>
        </div>

        <div class="w-full p-t-15 p-b-15 text-center">
            <div>
                <a class="txt1" href="{{ route('password.request') }}">
                    Şifremi unuttum?
                </a>
            </div>
        </div>
    </form>
@endsection


