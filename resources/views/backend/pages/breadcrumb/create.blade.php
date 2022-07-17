@extends('backend.layouts.master')

@section('css-in')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
@endsection

@section('js-in')
    <script type="text/javascript">
        Dropzone.options.dropzone =
            {
                maxFilesize: 10,
                renameFile: function (file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 60000,
                success: function (file, response) {
                    $.toast({
                        heading: response.title,
                        text: response.message,
                        position: 'top-right',
                        loaderBg: '#fff',
                        icon: response.type,
                        hideAfter: 3000,
                        stack: 1
                    });
                },
                error: function (file, response) {
                    alert("resim yükleme işlemi başarısız !!!");
                }
            };
    </script>
@endsection

@section('page_header')
    <div class="row page-header">
        <div class="col-lg-6 align-self-center ">
            <h2>Breadcrumb İconlar</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
                <li class="breadcrumb-item active">Breadcrumb İcon Ekle</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Çoklu Resim Yükleme Formu</h4>
                    <p class="card-title-desc">Resimlerinizi sürükle bırak yaparak kolayca yükleyebilirisiniz.</p>
                    <form method="post" action="{{ route('admin.breadcrumb.store') }}" enctype="multipart/form-data"
                          class="dropzone" id="dropzone">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
