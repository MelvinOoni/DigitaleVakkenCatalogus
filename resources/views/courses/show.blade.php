@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}" }}>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/courses') }}" }}>Vakken</a></li>
        <li class="breadcrumb-item">{{$course->title}}</li>
    </ol>
@stop

@section('body')

    <div class="card text-center">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Details van het vak {{$course->title}}</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href={{ url('/courses') }}>Ga terug</a>
                </div>
            </div>
        </div>

        <div class="card-body text-left">
            <strong>Vak:</strong> {{$course->title}}<br>
            <strong>Blok:</strong> {{$course->term_id}}<br>
            <strong>Startweek:</strong> {{$course->start_week}}<br>
            <strong>Eindweek:</strong> {{$course->end_week}}<br>
        </div>
    </div>

@endsection('body')
