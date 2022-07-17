@extends('backend.layouts.master')

@section('js-in')
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/admin/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/admin/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/admin/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/admin/laravel-filemanager/upload?type=Files&_token=',
            height: 600,
        };
    </script>
    <script>
        CKEDITOR.replace('my-editor', options);
    </script>
@endsection

@section('page_header')
    <div class="row page-header">
        <div class="col-lg-6 align-self-center ">
            <h2>Yeni Hizmet Ekle</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.service.index') }}">Hizmetler</a></li>
                <li class="breadcrumb-item active">Yeni Hizmet Ekle</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-info">
                    Hizmet Ekleme Formu
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.service.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Hizmet Resmi</label>
                            <div class="fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview" data-trigger="fileinput"
                                     style="width: 160px; height:160px;">
                                    <img src="{{ asset('uploads/img/portfolio/no_image.jpg') }}" class="img-fluid"
                                         alt="">
                                </div>
                                <span class="btn btn-outline-primary btn-file">
                                    <span class="fileinput-new">Hizmet Resmi Seç</span>
                                    <span class="fileinput-exists">Başka Resim Seç</span>
                                    <input type="file" id="image" name="image"
                                           accept="image/jpeg, image/png, image/jpg">
                                </span>
                            </div>
                            @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Hizmet İconu</label>
                            <div class="fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview" data-trigger="fileinput"
                                     style="width: 160px; height:160px;">
                                    <img src="{{ asset('uploads/img/portfolio/no_image.jpg') }}" class="img-fluid"
                                         alt="">
                                </div>
                                <span class="btn btn-outline-primary btn-file">
                                    <span class="fileinput-new">İconu Seç</span>
                                    <span class="fileinput-exists">Başka Seç</span>
                                    <input type="file" id="icon" name="icon"
                                           accept="image/png">
                                </span>
                            </div>
                            @if($errors->has('icon'))
                                <span class="text-danger">{{ $errors->first('icon') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('title')) has-error @endif">
                            <label>Başlık</label>
                            <input type="text" name="title" class="form-control">
                            @if($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('short_desc')) has-error @endif">
                            <label>Kısa Açıklama</label>
                            <input type="text" name="short_desc" class="form-control">
                            @if($errors->has('short_desc'))
                                <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('desc')) has-error @endif">
                            <label>Açıklama</label>
                            <textarea name="desc" class="my-editor form-control" id="my-editor"></textarea>
                            @if($errors->has('desc'))
                                <span class="text-danger">{{ $errors->first('desc') }}</span>
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
