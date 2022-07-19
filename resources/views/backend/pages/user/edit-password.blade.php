@extends('backend.layouts.master')

@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style">
                    <li>
                        <h4 class="page-title">Şifre Düzenle</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Şifre Düzenleme Formu</strong></h2>
                </div>
                <div class="body">
                    <form method="post" action="{{ route('admin.user.update.password') }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-line @if($errors->has('password')) error @endif">
                                <label class="form-lbl">Eski Şifre</label>
                                <input type="password" name="password" class="form-control"/>
                            </div>
                            @if($errors->has('password'))
                                <label class="error">{{ $errors->first('password') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="form-line @if($errors->has('new_password')) error @endif">
                                <label class="form-lbl">Yeni Şifre</label>
                                <input type="password" name="new_password" class="form-control"/>
                            </div>
                            @if($errors->has('new_password'))
                                <label class="error">{{ $errors->first('new_password') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="form-line @if($errors->has('confirm_password')) error @endif">
                                <label class="form-lbl">Yeni Şifre Tekrar</label>
                                <input type="password" name="confirm_password" class="form-control"/>
                            </div>
                            @if($errors->has('confirm_password'))
                                <label class="error">{{ $errors->first('confirm_password') }}</label>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Güncelle</button>
                        <a href="{{ url()->previous() }}" class="btn btn-outline-danger a-btn">
                            Geri Git
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
