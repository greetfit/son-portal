@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h4 class="mb-3"><i class="ri-hotel-fill me-2"></i>Edit Hotel</h4>

    <form method="POST" action="{{ route('hotels.update', $hotel) }}" class="card p-3">
        @csrf
        @method('PUT')
        @include('hotels.partials.form', ['hotel' => $hotel])
        <div class="d-flex gap-2">
            <button class="btn btn-primary" type="submit">Update</button>
            <a href="{{ route('hotels.index') }}" class="btn btn-light">Cancel</a>
        </div>
    </form>
</div>
@endsection
