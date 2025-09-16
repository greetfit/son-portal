@extends('layouts.vertical', ['title' => 'Hotels', 'subTitle' => 'Tables'])

@section('css')
@vite(['node_modules/gridjs/dist/theme/mermaid.min.css'])
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="d-flex justify-content-end mb-3">
                    <a href="{{ route('hotels.create') }}" class="btn btn-success">+ Add Hotel</a>
                </div>

                <div id="table-gridjs" data-url="{{ route('hotels.datatable') }}"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-bottom')
@vite(['resources/js/components/hotels-grid.js'])
@endsection
