@extends('backend.layouts.master')

@section('css-in')

@endsection

@section('js-in')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('backend/js/code.js') }}"></script>

    <!-- Plugin js for this page-->
    <script src="{{ asset('backend/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('backend/js/data-table.js') }}"></script>
    <!-- End custom js for this page-->
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Portfolyolar</h4>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>S.N #</th>
                                <th>İcon</th>
                                <th>Resim</th>
                                <th>Başlık</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $key => $service)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><img class="img-lg rounded" src="{{ asset($service->icon) }}" alt="{{ $service->icon }}"
                                             width="50"></td>
                                    <td><img class="img-lg rounded" src="{{ asset($service->image) }}" alt="{{ $service->image }}"
                                             width="80"></td>
                                    <td>{{ $service->title }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('admin.service.edit', $service->id) }}"
                                           class="btn btn-outline-success">
                                            <i class="mdi mdi-file-document-edit"></i> Düzenle
                                        </a>
                                        <a id="delete" href="{{ route('admin.service.destroy', $service->id) }}"
                                           class="btn btn-outline-danger">
                                            <i class="mdi mdi-close"></i> Sil
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
