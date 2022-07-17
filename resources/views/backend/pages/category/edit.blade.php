@extends('backend.layouts.master')

@section('css-in')
@endsection

@section('js-in')
@endsection

@section('page_header')
    <div class="row page-header">
        <div class="col-lg-6 align-self-center ">
            <h2>Kategoriler</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
                <li class="breadcrumb-item active">Kategori Güncelle</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-info">
                    Kategori Güncelleme Formu
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.category.update', $category->id) }}">
                        @csrf
                        <div class="form-group @if($errors->has('title')) has-error @endif">
                            <label>Kategori Adı</label>
                            <input type="text" name="title" class="form-control" value="{{ $category->title }}">
                            @if($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('parent_id')) has-error @endif">
                            <label>Kategori Adı</label>
                            <select name="parent_id" class="form-control">
                                <option value="0">Bu kategori zaten üst kategori.</option>
                                @foreach($parent_categories as $parent_category)
                                    <option @if($category->parent_id == $parent_category->id) selected @endif value="{{ $parent_category->id }}">{{ $parent_category->title }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('parent_id'))
                                <span class="text-danger">{{ $errors->first('parent_id') }}</span>
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
