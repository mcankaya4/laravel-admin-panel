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
                    <h4 class="card-title text-primary"><strong>Slider Düzenleme Formu</strong></h4>
                    <form method="post" action="{{ route('admin.slider.update', $slider->id) }}"
                          enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label>Seçilen Slider Resmi</label>
                            <div class="">
                                <img width="150" height="150" class="img-lg-rounded" style="border: 1px solid #4f4a60"
                                     id="showImage" src="{{ asset($slider->image) }}">
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
                            <label>Slider Başlık</label>
                            <input type="text" name="title"
                                   class="form-control @if($errors->has('title')) border-danger @endif"
                                   value="{{ $slider->title }}"/>
                            @if($errors->has('title'))
                                <label class="error mt-2 text-danger">{{ $errors->first('title') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Slider Açıklama</label>
                            <textarea name="desc" class="form-control @if($errors->has('desc')) border-danger @endif"
                                      rows="3">{{ $slider->desc }}</textarea>
                            @if($errors->has('desc'))
                                <label class="error mt-2 text-danger">{{ $errors->first('desc') }}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Slider Video Url</label>
                            <input type="text" name="video_url"
                                   class="form-control @if($errors->has('video_url')) border-danger @endif"
                                   value="{{ $slider->video_url }}"/>
                            @if($errors->has('video_url'))
                                <label class="error mt-2 text-danger">{{ $errors->first('video_url') }}</label>
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
