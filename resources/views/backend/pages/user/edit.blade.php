@extends('backend.layouts.master')

@section('js-in')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#image").change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary"><strong>Profil Bilgileri Güncelleme Formu</strong></h4>
                    <form method="post" action="{{ route('admin.user.update') }}"
                          enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label>Seçilen Profil Resmi</label>
                            <div class="">
                                <img width="150" height="150" class="img-lg-rounded"
                                     style="border: 1px solid #4f4a60"
                                     id="showImage"
                                     src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" id="image" accept="image/jpeg, image/png, image/jpg"
                                   class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-dark" type="button">Resim Seç</button>
                                </span>
                                <input type="text" class="form-control file-upload-info" disabled
                                       placeholder="Seçilen Resim">
                            </div>
                            @if($errors->has('image'))
                                <label class="error mt-2 text-danger">{{ $errors->first('image') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Profil Adı</label>
                            <input type="text" name="name"
                                   class="form-control @if($errors->has('name')) border-danger @endif"
                                   value="{{ \Illuminate\Support\Facades\Auth::user()->name }}"/>
                            @if($errors->has('name'))
                                <label class="error mt-2 text-danger">{{ $errors->first('name') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>E-Posta</label>
                            <input type="text" name="email"
                                   class="form-control @if($errors->has('email')) border-danger @endif"
                                   value="{{ \Illuminate\Support\Facades\Auth::user()->email }}"/>
                            @if($errors->has('email'))
                                <label class="error mt-2 text-danger">{{ $errors->first('email') }}</label>
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
