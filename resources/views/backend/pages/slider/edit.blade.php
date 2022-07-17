@extends('backend.layouts.master')

@section('page_header')
    <div class="row page-header">
        <div class="col-lg-6 align-self-center ">
            <h2>Slider Değiştir</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
                <li class="breadcrumb-item active">Slider Değiştir</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-info">
                    Slider Bilgileri Değiştirme Formu
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.slider.update', $slider->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Profil Resmi</label>
                            <div class="fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview" data-trigger="fileinput"
                                     style="width: 160px; height:160px;">
                                    <img class="img-fluid"
                                         src="{{ asset($slider->image) }}">
                                </div>
                                <span class="btn btn-outline-primary btn-file">
                                    <span class="fileinput-new">Slider Resmi Seç</span>
                                    <span class="fileinput-exists">Başka Resim Seç</span>
                                    <input type="file" id="image" name="image"
                                           accept="image/jpeg, image/png, image/jpg">
                                </span>
                            </div>
                            @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('title')) has-error @endif">
                            <label>Slider Başlık</label>
                            <input type="text" name="title" class="form-control"
                                   value="{{ $slider->title }}">
                            @if($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('desc')) has-error @endif">
                            <label>Slider Kısa Açıklama</label>
                            <input type="text" name="desc" class="form-control"
                                   value="{{ $slider->desc }}">
                            @if($errors->has('desc'))
                                <span class="text-danger">{{ $errors->first('desc') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('video_url')) has-error @endif">
                            <label>Slider Video URL</label>
                            <input type="text" name="video_url" class="form-control"
                                   value="{{ $slider->video_url }}">
                            @if($errors->has('video_url'))
                                <span class="text-danger">{{ $errors->first('video_url') }}</span>
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
