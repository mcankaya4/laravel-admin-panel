@extends('backend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary"><strong>Şifre Güncelleme Formu</strong></h4>
                    <form method="post" action="{{ route('admin.user.update.password') }}" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label>Eski Şifre</label>
                            <input type="password" name="password"
                                   class="form-control @if($errors->has('password')) border-danger @endif"/>
                            @if($errors->has('password'))
                                <label class="error mt-2 text-danger">{{ $errors->first('password') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Yeni Şifre</label>
                            <input type="password" name="new_password"
                                   class="form-control @if($errors->has('new_password')) border-danger @endif"/>
                            @if($errors->has('new_password'))
                                <label class="error mt-2 text-danger">{{ $errors->first('new_password') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Yeni Şifre Tekrar</label>
                            <input type="password" name="confirm_password"
                                   class="form-control @if($errors->has('confirm_password')) border-danger @endif"/>
                            @if($errors->has('confirm_password'))
                                <label class="error mt-2 text-danger">{{ $errors->first('confirm_password') }}</label>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Kaydet</button>
                        <a href="{{ url()->previous() }}" class="btn btn-light">Geri Git</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
