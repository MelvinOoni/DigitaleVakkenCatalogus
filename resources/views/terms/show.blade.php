@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}" }}>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/terms') }}" }}>Blokken</a></li>
        <li class="breadcrumb-item">{{$term->number}}</li>
    </ol>
@stop

@section('body')

    <div class="card text-center">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Details van blok {{ $term->number }}</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href={{ url('/terms') }}>Ga terug</a>
                </div>
            </div>
        </div>

        <div class="card-body text-left">
            <strong>Titel:</strong> {{ $term->title }}<br>
            <strong>Bloknummer:</strong> {{ $term->number }}<br>
            <strong>Semester:</strong> {{ $term->semester }}<br>
            <strong>Berschrijving:</strong> {{ $term->description }}<br><br>
            <img src="{{ $term->image }}" class="">

        </div>
    </div>

@endsection('body')
