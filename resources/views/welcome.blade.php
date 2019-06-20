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
{{-- PDF generate --}}
<form action="{!! url('/getPDF') !!}" method="PUT">
    <a target="_blanc">
        <button class="btn btn-primary" type="submit">
            Genereer overzicht vakken
        </button>
    </a>
</form>
@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush
