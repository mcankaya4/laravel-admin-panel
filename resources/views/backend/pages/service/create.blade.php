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
        $(document).ready(function () {
            $("#image2").change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage2').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
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

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary"><strong>Yeni Hizmet Ekleme Formu</strong></h4>
                    <form method="post" action="{{ route('admin.service.store') }}"
                          enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        {{-- image --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Se??ilen Hizmet Resmi</label>
                                    <div class="">
                                        <img width="150" height="150" class="img-lg-rounded"
                                             style="border: 1px solid #4f4a60"
                                             id="showImage"
                                             src="{{ asset('uploads/img/portfolio/no_image.jpg') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image" id="image" accept="image/jpeg, image/png, image/jpg"
                                           class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-dark" type="button">Resim Se??</button>
                                </span>
                                        <input type="text" class="form-control file-upload-info" disabled
                                               placeholder="Se??ilen Resim">
                                    </div>
                                    @if($errors->has('image'))
                                        <label class="error mt-2 text-danger">{{ $errors->first('image') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Se??ilen Hizmet ??conu</label>
                                    <div class="">
                                        <img width="150" height="150" class="img-lg-rounded"
                                             style="border: 1px solid #4f4a60"
                                             id="showImage2"
                                             src="{{ asset('uploads/img/portfolio/no_image.jpg') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="icon" id="image2" accept="image/png"
                                           class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-dark" type="button">??con Se??</button>
                                </span>
                                        <input type="text" class="form-control file-upload-info" disabled
                                               placeholder="Se??ilen Resim">
                                    </div>
                                    @if($errors->has('icon'))
                                        <label class="error mt-2 text-danger">{{ $errors->first('icon') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- title --}}
                        <div class="form-group">
                            <label>Hizmet Ba??l??????</label>
                            <input type="text" name="title"
                                   class="form-control @if($errors->has('title')) border-danger @endif"/>
                            @if($errors->has('title'))
                                <label class="error mt-2 text-danger">{{ $errors->first('title') }}</label>
                            @endif
                        </div>
                        {{-- short_desc --}}
                        <div class="form-group">
                            <label>K??sa A????klama</label>
                            <input type="text" name="short_desc"
                                   class="form-control @if($errors->has('short_desc')) border-danger @endif"/>
                            @if($errors->has('short_desc'))
                                <label class="error mt-2 text-danger">{{ $errors->first('short_desc') }}</label>
                            @endif
                        </div>
                        {{-- desc --}}
                        <div class="form-group">
                            <label>Detayl?? A????klama</label>
                            <textarea name="desc" class="my-editor form-control" id="my-editor"
                                      rows="10"></textarea>
                            @if($errors->has('desc'))
                                <label class="error mt-2 text-danger">{{ $errors->first('desc') }}</label>
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


