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
            <h2>Yeni Portfolyo Ekle</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.portfolio.index') }}">Portfolyo</a></li>
                <li class="breadcrumb-item active">Yeni Portfolyo Ekle</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header card-info">
                    Portfolyo Ekleme Formu
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.portfolio.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Portfolyo Resmi</label>
                            <div class="fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview" data-trigger="fileinput"
                                     style="width: 160px; height:160px;">
                                    <img src="{{ asset('uploads/img/portfolio/no_image.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <span class="btn btn-outline-primary btn-file">
                                    <span class="fileinput-new">Portfolyo Resmi Seç</span>
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
                            <label>Başlık</label>
                            <input type="text" name="title" class="form-control">
                            @if($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('desc')) has-error @endif">
                            <label>Açıklama</label>
                            <textarea name="desc" class="my-editor form-control" id="my-editor"></textarea>
                            @if($errors->has('desc'))
                                <span class="text-danger">{{ $errors->first('desc') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('category_id')) has-error @endif">
                            <label>Kategori Seç</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
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
