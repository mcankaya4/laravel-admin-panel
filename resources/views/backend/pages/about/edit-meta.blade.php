@extends('backend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary"><strong>Hakkımda Sayfası Meta Formu</strong></h4>
                    <form method="post" action="{{ route('admin.about.update.meta') }}" class="forms-sample">
                        @csrf
                        {{-- page_title --}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="page_title"
                                   class="form-control @if($errors->has('page_title')) border-danger @endif"
                                   value="{{ $about->page_title }}"/>
                            @if($errors->has('page_title'))
                                <label class="error mt-2 text-danger">{{ $errors->first('page_title') }}</label>
                            @endif
                        </div>
                        {{-- page_desc --}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="page_desc"
                                   class="form-control @if($errors->has('page_desc')) border-danger @endif"
                                   value="{{ $about->page_desc }}"/>
                            @if($errors->has('page_desc'))
                                <label class="error mt-2 text-danger">{{ $errors->first('page_desc') }}</label>
                            @endif
                        </div>
                        {{-- page_key --}}
                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" name="page_key"
                                   class="form-control @if($errors->has('page_key')) border-danger @endif"
                                   value="{{ $about->page_key }}"/>
                            @if($errors->has('page_key'))
                                <label class="error mt-2 text-danger">{{ $errors->first('page_key') }}</label>
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
