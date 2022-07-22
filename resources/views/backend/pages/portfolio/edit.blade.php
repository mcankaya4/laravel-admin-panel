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
                    <h4 class="card-title text-primary"><strong>Portfolyo Düzenleme Formu</strong></h4>
                    <form method="post" action="{{ route('admin.portfolio.update', $portfolio->id) }}"
                          enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        {{-- image --}}
                        <div class="form-group">
                            <label>Seçilen Portfolyo Resmi</label>
                            <div class="">
                                <img width="150" height="150" class="img-lg-rounded"
                                     style="border: 1px solid #4f4a60"
                                     id="showImage"
                                     src="{{ asset($portfolio->image) }}">
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
                        {{-- title --}}
                        <div class="form-group">
                            <label>Portfolyo Başlık</label>
                            <input type="text" name="title" value="{{ $portfolio->title }}"
                                   class="form-control @if($errors->has('title')) border-danger @endif"/>
                            @if($errors->has('title'))
                                <label class="error mt-2 text-danger">{{ $errors->first('title') }}</label>
                            @endif
                        </div>
                        {{-- desc --}}
                        <div class="form-group">
                            <label>Detaylı Açıklama</label>
                            <textarea name="desc" class="my-editor form-control" id="my-editor"
                                      rows="10">{!! $portfolio->desc !!}</textarea>
                            @if($errors->has('desc'))
                                <label class="error mt-2 text-danger">{{ $errors->first('desc') }}</label>
                            @endif
                        </div>
                        {{-- category --}}
                        <div class="form-group @if($errors->has('category_id')) border-danger @endif">
                            <label>Kategori Seç</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option @if($portfolio->category_id == $category->id) selected @endif
                                    value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category_id'))
                                <span class="error mt-2 text-danger">{{ $errors->first('category_id') }}</span>
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

