@extends('backend.layouts.master')

@section('js-in')
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
                '<a href="#" class="ecommerce-attribute-remove text-danger float-right text-small">(Yeteneği Sil)</a>' +
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
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary"><strong>Hakkımda Sayfası Yetenekler Formu</strong></h4>
                    <form method="post" action="{{ route('admin.about.update.skills') }}" class="forms-sample">
                        @csrf
                        {{-- desc --}}
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
                                            <a href="#" class="ecommerce-attribute-remove text-danger float-right text-small">(Yeteneği
                                                Sil)</a>
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
                                <div class="col-xl-12 text-end">
                                    <a href="#"
                                       class="float-right ecommerce-attribute-add-new btn btn-success btn-px-4 btn-py-2">Yeni
                                        Yetenek Ekle</a>
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary mr-2">Kaydet</button>
                        <a href="{{ url()->previous() }}" class="btn btn-light">Geri Git</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
