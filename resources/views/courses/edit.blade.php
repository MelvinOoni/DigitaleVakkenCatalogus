@extends('coreui::master')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/courses') }}">Vakken</a></li>
        <li class="breadcrumb-item">{{$course->title}}</li>
    </ol>
@stop
@section('body')
    {{-- Edit pagina --}}
    <div class="card animated fadeIn">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Bewerk het vak {{$course->title}}</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href={{ url('/courses') }}>Ga terug</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/courses', $course->id) }}">
                @METHOD('patch')
                @CSRF
                {{-- Input field --}}
                <div class="form-group">
                    <label for="title">Vak<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="title" name='title' placeholder="Titel"
                           value="{{$course->title}}">
                </div>

                <div class="form-group">
                    <label for="term_id">Blok<span class="text-danger"> *</span></label>
                    <select
                        class="form-control" id="term_id"
                        name='term_id' required>
                        {{--<option value="{{ $course->term_id }}" selected hidden>{{ $terms->term_id }}</option>--}}
                        @foreach ($terms as $row)
                            <option value="{{ $row->id }}">Blok {{ $row->number }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="start_week">Startweek<span class="text-danger"> *</span></label>
                    <input type="number" class="form-control" id="start_week" name='start_week' placeholder="Startweek"
                           value="{{$course->start_week}}">
                </div>

                <div class="form-group">
                    <label for="end_week">Eindweek<span class="text-danger"> *</span></label>
                    <input type="number" class="form-control" id="end_week" name='end_week' placeholder="Eindweek"
                           required value="{{$course->end_week}}">
                </div>

                {{-- Submit knop --}}
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success">Bevestig wijzigingen</button>
                </div>
            </form>
        </div>
    </div>
@endsection
