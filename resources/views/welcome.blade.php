@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}" }}>Home</a></li>
        <li class="breadcrumb-item">Dashboard</li>
    </ol>
@stop

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Dashboard')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">a breadcrumb item</li>
    </ol>
@stop

@section('body')
    <h1>Dashboard</h1>
    <p>Welcome to this awesome web app!</p>
@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush
