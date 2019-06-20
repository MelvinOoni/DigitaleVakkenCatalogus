@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/home') }}" }}>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/tests') }}" }}>Toetsen</a></li>
        <li class="breadcrumb-item">Bekijken</li>
    </ol>
@stop

@section('body')

    <div class="card text-center">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Details van de {{ $test->type }}toets {{ $test->course->title }}</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href={{ url('/tests') }}>Ga terug</a>
                </div>
            </div>
        </div>

        <div class="card-body text-left">
            <strong>Vak:</strong> {{ $test->course->title }}<br>
            <strong>Type toets:</strong> {{ $test->type }}<br>
            <strong>Aantal mogelijke pogingen:</strong> {{ $test->attempt }}<br>
            <strong>Week:</strong> {{ $test->week }}<br>
        </div>
    </div>

@endsection('body')
