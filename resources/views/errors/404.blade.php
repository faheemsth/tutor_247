@extends('layouts/app')
@section('title', '404 - Page Not Found')
@section('content')
<!-- push external head elements to head -->
@push('head')
<link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/webicons/css/all.css') }}">
@endpush

    <div class="container py-5">
        <div class="row  justify-content-center text-center py-5">
            <div class="col-md-6 py-5">
                <h1>Error</h1>
                <p>An error occurred:</p>
                <pre>{{ $exception }}</pre>
                <a href="{{ url('/') }}">Go to Home Page</a>
            </div>
        </div>
    </div>

@endsection
