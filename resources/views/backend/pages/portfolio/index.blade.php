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
                                <th>Resim</th>
                                <th>Başlık</th>
                                <th>Kategori</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($portfolios as $key => $portfolio)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><img src="{{ asset($portfolio->image) }}" alt="{{ $portfolio->image }}"
                                             width="80"></td>
                                    <td>{{ $portfolio->title }}</td>
                                    <td><span class="badge badge-info">
                                        {{ $portfolio->category->title }}
                                    </span></td>
                                    <td class="text-right">
                                        <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}"
                                           class="btn btn-light">
                                            <i class="mdi mdi-file-document-edit text-success"></i> Düzenle
                                        </a>
                                        <a id="delete" href="{{ route('admin.portfolio.destroy', $portfolio->id) }}"
                                           class="btn btn-light">
                                            <i class="mdi mdi-close text-danger"></i> Sil
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
