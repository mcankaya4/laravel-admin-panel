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
    <script>
        $(document).on('click', '.ecommerce-attribute-add-new', function (e) {
            e.preventDefault();

            var html = '' +
                '<div class="form-group row ecommerce-attribute-row pb-3">' +
                '<div class="col-md-8">' +
                '<label>Yetenek Adı</label>' +
                '<input required type="text" class="form-control" name="skill_title[]" placeholder="Örn: Photoshop"/>' +
                '</div>' +
                '<div class="col-md-4">' +
                '<label>Seviye</label>' +
                '<a href="#" class="ecommerce-attribute-remove text-danger float-right">Yeteneği Sil</a>' +
                '<select class="form-control" name="skill_value[]">' +
                '<option value="10">10</option>' +
                '<option value="20">20</option>' +
                '<option value="30">30</option>' +
                '<option value="40">40</option>' +
                '<option value="50">50</option>' +
                '<option value="60">60</option>' +
                '<option value="70">70</option>' +
                '<option value="80">80</option>' +
                '<option value="90">90</option>' +
                '<option value="100">100</option>' +
                '</select>' +
                '<div>' +
                '<div>' +
                '';
            $('.ecommerce-attributes-wrapper').append(html);
        });

        $(document).on('click', '.ecommerce-attribute-remove', function (e) {
            e.preventDefault();
            $(this).closest('.ecommerce-attribute-row').remove();
        });
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-info">
                    Hakkımda Sayfa Bilgileri Değiştirme Formu
                </div>
                <form method="post" action="{{ route('admin.about.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Hakkımda Sayfa Resmi</label>
                            <div class="fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview" data-trigger="fileinput"
                                     style="width: 160px; height:160px;">
                                    <img class="img-fluid"
                                         src="{{ asset($about->image) }}">
                                </div>
                                <span class="btn btn-outline-primary btn-file">
                                    <span class="fileinput-new">Sayfa Resmi Seç</span>
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
                            <input type="text" name="title" class="form-control"
                                   value="{{ $about->title }}">
                            @if($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('short_title')) has-error @endif">
                            <label>Alt Başlık</label>
                            <input type="text" name="short_title" class="form-control"
                                   value="{{ $about->short_title }}">
                            @if($errors->has('short_title'))
                                <span class="text-danger">{{ $errors->first('short_title') }}</span>
                            @endif
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="form-group @if($errors->has('short_desc')) has-error @endif">
                            <label>Kısa Açıklama</label>
                            <textarea class="form-control" name="short_desc"
                                      style="height: 90px">{{ $about->short_desc }}</textarea>
                            <small class="text-muted">Hakkımda sayfası için kısa açıklama metni.</small>
                            @if($errors->has('short_desc'))
                                <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Detaylı Açıklama</label>
                            <textarea name="desc" class="my-editor form-control" id="my-editor"
                                      rows="10">{!! $about->desc !!}</textarea>
                            @if($errors->has('desc'))
                                <span class="text-danger">{{ $errors->first('desc') }}</span>
                            @endif
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="ecommerce-attributes-wrapper">
                            @foreach($skills as $skill)
                                <div class="form-group row ecommerce-attribute-row pb-3">
                                    <div class="col-md-8">
                                        <label>Yetenek Adı</label>
                                        <input required type="text" class="form-control" name="skill_title[]"
                                               value="{{ $skill->title }}"/>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Seviye</label>
                                        <a href="#" class="ecommerce-attribute-remove text-danger float-right">Yeteneği
                                            Sil</a>
                                        <select class="form-control" name="skill_value[]">
                                            <option @if($skill->value == 10) selected @endif value="10">10</option>
                                            <option @if($skill->value == 20) selected @endif value="20">20</option>
                                            <option @if($skill->value == 30) selected @endif value="30">30</option>
                                            <option @if($skill->value == 40) selected @endif value="40">40</option>
                                            <option @if($skill->value == 50) selected @endif value="50">50</option>
                                            <option @if($skill->value == 60) selected @endif value="60">60</option>
                                            <option @if($skill->value == 70) selected @endif value="70">70</option>
                                            <option @if($skill->value == 80) selected @endif value="80">80</option>
                                            <option @if($skill->value == 90) selected @endif value="90">90</option>
                                            <option @if($skill->value == 100) selected @endif value="100">100
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row mt-4">
                            <div class="col-xl-9 text-end">
                                <a href="#"
                                   class="ecommerce-attribute-add-new btn btn-outline-primary btn-px-4 btn-py-2">Yeni
                                    Yetenek Ekle</a>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="form-group @if($errors->has('page_title')) has-error @endif">
                            <label>Meta Title</label>
                            <input type="text" name="page_title" class="form-control"
                                   value="{{ $about->page_title }}">
                            <small class="text-muted">Tarayıcı sekmesinde görüntülenecek yazıdır. Arama
                                motorları için
                                önemlidir.</small>
                            <br>
                            @if($errors->has('page_title'))
                                <span class="text-danger">{{ $errors->first('page_title') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('page_desc')) has-error @endif">
                            <label>Meta Description</label>
                            <input type="text" name="page_desc" class="form-control"
                                   value="{{ $about->page_desc }}">
                            <small class="text-muted">Google aramalarında çıkan açıklama metnidir.</small>
                            <br>
                            @if($errors->has('page_desc'))
                                <span class="text-danger">{{ $errors->first('page_desc') }}</span>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('page_key')) has-error @endif">
                            <label>Meta Keywords</label>
                            <input type="text" name="page_key" class="form-control"
                                   value="{{ $about->page_key }}">
                            <small class="text-muted">Google aramaları için anahtar kelime tanımlamasıdır.
                                Aralarında
                                virgül koyarak anahtar kelimeleri yazınız. Örn: <code>about, computer,
                                    code</code></small>
                            <br>
                            @if($errors->has('page_key'))
                                <span class="text-danger">{{ $errors->first('page_key') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-primary btn-icon"><i class="fa fa-floppy-o "></i>Kaydet
                            </button>
                            <a href="{{ url()->previous() }}" class="btn btn-teal btn-icon"><i
                                    class="fa fa-reply"></i>Geri
                                Git</a>
                        </div>
                        <br>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- start: page -->
    <form enctype="multipart/form-data" class="ecommerce-form action-buttons-fixed"
          action="{{ route('admin.about.update') }}" method="post">
        @csrf
        <div class="row mb-5">
            <div class="col">
                <section class="card card-modern card-big-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-5">
                                <i class="card-big-info-icon bx bx-image"></i>
                                <h2 class="card-big-info-title">Resim</h2>
                                <p class="card-big-info-desc">Hakkımızda sayfası içerisindeki resim'i bu bölümde
                                    güncelleyebilirsiniz.</p>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="form-group row align-items-center pb-3">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Hakkımda
                                        Resmi</label>
                                    <div class="col-lg-7 col-xl-8">
                                        <div class="thumb-info">
                                            <img id="showImage" style="border: 1px solid #CCCCCC" width="200"
                                                 height="200"
                                                 src="{{ asset($about->image) }}"
                                                 class="user-image" alt="John Doe">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center pb-3">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">
                                        Yeni Resim Seç
                                    </label>
                                    <div class="col-lg-7 col-xl-8">
                                        <input type="file" id="image"
                                               class="form-control form-control-modern @if($errors->has('image')) has-danger @endif"
                                               name="image" accept="image/*"/>
                                        @if($errors->has('image'))
                                            <label id="states2-error" class="error" for="states2">
                                                {{ $errors->first('image') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <section class="card card-modern card-big-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-5">
                                <i class="card-big-info-icon bx bx-edit"></i>
                                <h2 class="card-big-info-title">Genel</h2>
                                <p class="card-big-info-desc">Hakkımızda sayfası içerisindeki genel bilgileri bu bölümde
                                    düzenleyebilirsiniz.</p>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="form-group row align-items-center pb-3">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Başlık</label>
                                    <div class="col-lg-7 col-xl-8">
                                        <input type="text"
                                               class="form-control form-control-modern @if($errors->has('title')) has-danger @endif"
                                               name="title"
                                               value="{{ $about->title }}" required/>
                                        @if($errors->has('title'))
                                            <label id="states2-error" class="error" for="states2">
                                                {{ $errors->first('title') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row align-items-center pb-3">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">
                                        Alt Başlık
                                    </label>
                                    <div class="col-lg-7 col-xl-8">
                                        <input type="short_title"
                                               class="form-control form-control-modern @if($errors->has('short_title')) has-danger @endif"
                                               name="short_title"
                                               value="{{ $about->short_title }}" required/>
                                        @if($errors->has('short_title'))
                                            <label id="states2-error" class="error" for="states2">
                                                {{ $errors->first('short_title') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row align-items-center pb-3">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">
                                        Kısa Açıklama
                                    </label>
                                    <div class="col-lg-7 col-xl-8">
                                        <textarea name="short_desc" class="form-control form-control-modern" rows="3"
                                                  id="textareaAutosize" data-plugin-textarea-autosize=""
                                                  style="overflow: hidden; overflow-wrap: break-word; resize: none;">{{ $about->short_desc }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <section class="card card-modern card-big-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-5">
                                <i class="card-big-info-icon bx bx-search-alt"></i>
                                <h2 class="card-big-info-title">SEO</h2>
                                <p class="card-big-info-desc">Hakkımızda sayfası içerisindeki SEO içeriklerini bu
                                    bölümde düzenleyebilirsiniz.</p>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="form-group row align-items-center pb-3">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Sayfa Title</label>
                                    <div class="col-lg-7 col-xl-8">
                                        <input type="text"
                                               class="form-control form-control-modern @if($errors->has('page_title')) has-danger @endif"
                                               name="page_title"
                                               value="{{ $about->page_title }}" required/>
                                        @if($errors->has('page_title'))
                                            <label id="states2-error" class="error" for="states2">
                                                {{ $errors->first('page_title') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row align-items-center pb-3">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">
                                        Sayfa Keywords
                                    </label>
                                    <div class="col-lg-7 col-xl-8">
                                        <input type="short_title"
                                               class="form-control form-control-modern @if($errors->has('page_key')) has-danger @endif"
                                               name="page_key"
                                               value="{{ $about->page_key }}" required/>
                                        @if($errors->has('short_title'))
                                            <label id="states2-error" class="error" for="states2">
                                                {{ $errors->first('page_key') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row align-items-center pb-3">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">
                                        Sayfa Description
                                    </label>
                                    <div class="col-lg-7 col-xl-8">
                                        <textarea name="page_desc" class="form-control form-control-modern" rows="2"
                                                  id="textareaAutosize" data-plugin-textarea-autosize=""
                                                  style="overflow: hidden; overflow-wrap: break-word; resize: none;">{!! $about->page_desc  !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <section class="card card-modern card-big-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-5">
                                <i class="card-big-info-icon bx bx-book-content"></i>
                                <h2 class="card-big-info-title">Açıklama</h2>
                                <p class="card-big-info-desc">Hakkımızda sayfası içerisindeki detaylı açıklamayı bu
                                    bölümde düzenleyebilirsiniz.</p>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="form-group row align-items-center pb-3">
                                    <div class="col-lg-12 col-xl-12">
                                        <textarea name="desc" class="my-editor form-control" id="my-editor"
                                                  rows="10">{!! $about->desc !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <section class="card card-modern card-big-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-5">
                                <i class="card-big-info-icon bx bx-select-multiple"></i>
                                <h2 class="card-big-info-title">Yetenekler</h2>
                                <p class="card-big-info-desc">Hakkımızda sayfasında yayınlanacak olan yeteneklerinizi
                                    buradan düzenleyebilirsiniz.</p>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="ecommerce-attributes-wrapper">
                                    @foreach($skills as $skill)
                                        <div class="form-group row justify-content-center ecommerce-attribute-row pb-3">
                                            <div class="col-xl-6">
                                                <label class="control-label">Yetenek Adı</label>
                                                <input required type="text" class="form-control form-control-modern"
                                                       name="skill_title[]" value="{{ $skill->title }}"/>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#"
                                                   class="ecommerce-attribute-remove text-color-danger float-end">Yeteneği
                                                    Sil</a>
                                                <label class="control-label">Seviye</label>
                                                <select class="form-control form-control-modern" name="skill_value[]">
                                                    <option @if($skill->value == 10) selected @endif value="10">10
                                                    </option>
                                                    <option @if($skill->value == 20) selected @endif value="20">20
                                                    </option>
                                                    <option @if($skill->value == 30) selected @endif value="30">30
                                                    </option>
                                                    <option @if($skill->value == 40) selected @endif value="40">40
                                                    </option>
                                                    <option @if($skill->value == 50) selected @endif value="50">50
                                                    </option>
                                                    <option @if($skill->value == 60) selected @endif value="60">60
                                                    </option>
                                                    <option @if($skill->value == 70) selected @endif value="70">70
                                                    </option>
                                                    <option @if($skill->value == 80) selected @endif value="80">80
                                                    </option>
                                                    <option @if($skill->value == 90) selected @endif value="90">90
                                                    </option>
                                                    <option @if($skill->value == 100) selected @endif value="100">100
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row justify-content-center mt-4">
                                    <div class="col-xl-9 text-end">
                                        <a href="#"
                                           class="ecommerce-attribute-add-new btn btn-success btn-px-4 btn-py-2">Yeni
                                            Yetenek Ekle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12 col-md-auto d-flex justify-content-end">
                <a href="{{ url()->previous() }}"
                   class="submit-button btn btn-light me-3 btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Geri
                    Git</a>
                <button type="submit"
                        class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1"
                        data-loading-text="Loading...">
                    <i class="bx bx-save text-4 me-2"></i> Kaydet
                </button>
            </div>
        </div>
    </form>
    <!-- end: page -->
@endsection
