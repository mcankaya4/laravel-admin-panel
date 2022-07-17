@extends('backend.layouts.master')

@section('page_header')
    <div class="row page-header">
        <div class="col-lg-6 align-self-center ">
            <h2>Bilgileri Değiştir</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Profil</a></li>
                <li class="breadcrumb-item active">Bilgileri Değiştir</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-info">
                    Profil Bilgileri Değiştirme Formu
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.user.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Profil Resmi</label>
                            <div class="fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview" data-trigger="fileinput"
                                     style="width: 160px; height:160px;">
                                    <img class="img-fluid"
                                         src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}">
                                </div>
                                <span class="btn btn-outline-primary btn-file">
                                    <span class="fileinput-new">Profil Resmi Seç</span>
                                    <span class="fileinput-exists">Başka Resim Seç</span>
                                    <input type="file" id="image" name="image"
                                           accept="image/jpeg, image/png, image/jpg">
                                </span>
                            </div>
                            @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('name')) has-error @endif">
                            <label>Ad</label>
                            <input type="text" name="name" class="form-control"
                                   value="{{ \Illuminate\Support\Facades\Auth::user()->name }}">
                            @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('email')) has-error @endif">
                            <label>Email Adresi</label>
                            <input type="email" name="email" class="form-control"
                                   value="{{ \Illuminate\Support\Facades\Auth::user()->email }}">
                            @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <br>
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
