@extends('backend.layouts.master')

@section('page_header')
    <div class="row page-header">
        <div class="col-lg-6 align-self-center ">
            <h2>Şifre Değiştir</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Profil</a></li>
                <li class="breadcrumb-item active">Şifre Değiştir</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-info">
                    Şifre Değiştirme Formu
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.user.update.password') }}">
                        @csrf
                        <div class="form-group @if($errors->has('password')) has-error @endif">
                            <label>Eski Şifre</label>
                            <input type="password" name="password" class="form-control">
                            @if($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('new_password')) has-error @endif">
                            <label>Yeni Şifre</label>
                            <input type="password" name="new_password" class="form-control">
                            @if($errors->has('new_password'))
                                <span class="text-danger">{{ $errors->first('new_password') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('confirm_password')) has-error @endif">
                            <label>Yeni Şifre</label>
                            <input type="password" name="confirm_password" class="form-control">
                            @if($errors->has('confirm_password'))
                                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-primary btn-icon"><i class="fa fa-floppy-o "></i>Kaydet
                            </button>
                            <a href="{{ url()->previous() }}" class="btn btn-teal btn-icon"><i class="fa fa-reply"></i>Geri
                                Git</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
