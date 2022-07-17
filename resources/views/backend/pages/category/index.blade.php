@extends('backend.layouts.master')

@section('css-in')
    <link rel="stylesheet" href="{{ asset('backend/assets/lib/nestable/nestable.css') }}">
@endsection

@section('js-in')
@endsection

@section('page_header')
    <div class="row page-header">
        <div class="col-lg-6 align-self-center ">
            <h2>Kategoriler</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
                <li class="breadcrumb-item active">Kategoriler</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-info">
                    Yeni Kategori Ekleme Formu
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin.category.store') }}">
                        @csrf
                        <div class="form-group @if($errors->has('title')) has-error @endif">
                            <label>Kategori Adı</label>
                            <input type="text" name="title" class="form-control">
                            @if($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('parent_id')) has-error @endif">
                            <label>Kategori Adı</label>
                            <select name="parent_id" class="form-control">
                                <option value="0">Bu kategori zaten üst kategori olacak.</option>
                                @foreach($parent_categories as $parent_category)
                                    <option value="{{ $parent_category->id }}">{{ $parent_category->title }}</option>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-info">
                    Kategori Listesi
                </div>
                <div class="card-body">
                    <div id="nestable2" class="dd">
                        <ol class="dd-list">
                            @foreach($parent_categories as $parent_category)
                                @if(count($parent_category->childs))
                                    <li data-id="{{ $parent_category->id }}" class="dd-item dd3-item">
                                        <div class="dd-handle dd3-handle">&nbsp;</div>
                                        <div class="dd3-content">
                                            {{ $parent_category->title }}
                                            <a href="{{ route('admin.category.destroy', $parent_category->id) }}"
                                               class="text-muted btn btn-xs float-right">
                                                (Sil)
                                            </a>
                                            <a href="{{ route('admin.category.edit', $parent_category->id) }}" class="text-muted btn btn-xs float-right mr-1">
                                                (Düzenle)
                                            </a>
                                        </div>
                                        <ol class="dd-list">
                                            @foreach($parent_category->childs as $child)
                                                <li data-id="{{ $child->id }}" class="dd-item dd3-item">
                                                    <div class="dd-handle dd3-handle">&nbsp;</div>
                                                    <div class="dd3-content">
                                                        {{ $child->title }}
                                                        <a href="{{ route('admin.category.destroy', $child->id) }}"
                                                           class="text-muted btn btn-xs float-right">
                                                            (Sil)
                                                        </a>
                                                        <a href="{{ route('admin.category.edit', $child->id) }}" class="text-muted btn btn-xs float-right mr-1">
                                                            (Düzenle)
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ol>
                                    </li>
                                @else
                                    <li data-id="{{ $parent_category->id }}" class="dd-item dd3-item">
                                        <div class="dd-handle dd3-handle">&nbsp;</div>
                                        <div class="dd3-content">
                                            {{ $parent_category->title }}
                                            <a href="{{ route('admin.category.destroy', $parent_category->id) }}"
                                               class="text-muted btn btn-xs float-right">
                                                (Sil)
                                            </a>
                                            <a href="{{ route('admin.category.edit', $parent_category->id) }}" class="text-muted btn btn-xs float-right mr-1">
                                                (Düzenle)
                                            </a>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
