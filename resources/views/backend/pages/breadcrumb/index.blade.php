@extends('backend.layouts.master')

@section('css-in')
    <link href="{{ asset('backend/assets/lib/datatables/jquery.dataTables.min.css') }}" rel="stylesheet"
          type="text/css">
    <link href="{{ asset('backend/assets/lib/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css">
@endsection

@section('js-in')
    <script src="{{ asset('backend/assets/lib/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/lib/datatables/dataTables.responsive.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#datatable1').dataTable();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('backend/assets/js/code.js') }}"></script>
@endsection

@section('page_header')
    <div class="row page-header">
        <div class="col-lg-6 align-self-center ">
            <h2>Breadcrumb İconlar</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Anasayfa</a></li>
                <li class="breadcrumb-item active">Breadcrumb İcon Listesi</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-default">
                    <div class="float-right mt-10">
                        <a href="{{ route('admin.breadcrumb.create') }}" class="btn btn-primary btn-rounded box-shadow btn-icon"><i
                                class="fa fa-plus"></i> Yeni İcon Ekle</a>
                    </div>
                    Breadcrumb İconlar
                    <p class="text-muted">Breadcrumb olarak kullanılan tüm iconlar burada listelenmektedir.</p>
                </div>

                <div class="card-body">
                    <table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">
                                <strong>S.n</strong>
                            </th>
                            <th class="text-center">
                                <strong>İcon</strong>
                            </th>
                            <th class="text-center">
                                <strong>İşlem</strong>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($breadcrumbs as $key => $breadcrumb)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img src="{{ asset($breadcrumb->title) }}" alt="{{ $breadcrumb->title }}" width="80"></td>
                                <td class="text-center">
                                    <a id="delete" href="{{ route('admin.breadcrumb.destroy', $breadcrumb->id) }}"
                                       class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
