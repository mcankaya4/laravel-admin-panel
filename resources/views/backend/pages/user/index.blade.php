@extends('backend.layouts.master')


@section('page_header')
    <div class="row page-header">
        <div class="col-lg-6 align-self-center ">
            <h2>Profil</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayafa</a></li>
                <li class="breadcrumb-item active">Profil</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="widget padding-0 white-bg">
                <div class="bg-chart" style="height: 120px"></div>
                <div class="thumb-over">
                    <img src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}" alt="" width="100"
                         class="rounded-circle">
                </div>
                <div class="padding-20 text-center">
                    <p class="lead font-500 margin-b-0">{{ \Illuminate\Support\Facades\Auth::user()->name }}</p>
                    <p class="text-muted">{{ \Illuminate\Support\Facades\Auth::user()->email }}</p>
                    <div>
                        <a href="{{ route('admin.user.edit') }}" class="btn btn-outline-primary"> Bilgileri Değiştir
                        </a>
                        <a href="{{ route('admin.user.edit.password') }}" class="btn btn-outline-danger"> Şifre Değiştir
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
