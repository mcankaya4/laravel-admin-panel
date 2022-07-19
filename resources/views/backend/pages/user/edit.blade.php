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
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style">
                    <li>
                        <h4 class="page-title">Profil Düzenle</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Profil Düzenleme Formu</strong></h2>
                </div>
                <div class="body">
                    <form method="post" action="{{ route('admin.user.update') }}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-line">
                                <label class="form-lbl">Seçilen Profil Resmi</label>
                                <div class="profile-image float-md-right">
                                    <img width="150" height="150" style="border: 1px solid dimgray"
                                         id="showImage"
                                         src="{{ asset(\Illuminate\Support\Facades\Auth::user()->image) }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Profil Resmi Seç</span>
                                        <input type="file" name="image" id="image"
                                               accept="image/jpeg, image/png, image/jpg">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text"
                                               placeholder="Yükleme istediğiniz resmi seçiniz.">
                                    </div>
                                </div>
                                @if($errors->has('image'))
                                    <label class="error">{{ $errors->first('image') }}</label>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line @if($errors->has('name')) error @endif">
                                <label class="form-lbl">Ad</label>
                                <input type="text" name="name" class="form-control"
                                       value="{{ \Illuminate\Support\Facades\Auth::user()->name }}"/>
                            </div>
                            @if($errors->has('name'))
                                <label class="error">{{ $errors->first('name') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="form-line @if($errors->has('email')) error @endif">
                                <label class="form-lbl">Email Adresi</label>
                                <input type="text" name="email" class="form-control"
                                       value="{{ \Illuminate\Support\Facades\Auth::user()->email }}"/>
                            </div>
                            @if($errors->has('email'))
                                <label class="error">{{ $errors->first('email') }}</label>
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
    <!-- #END# Input -->
@endsection
