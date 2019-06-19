@extends('coreui::master')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/terms') }}">Blokken</a></li>
        <li class="breadcrumb-item">{{$term->title}}</li>
    </ol>
@stop
@section('body')
    {{-- Edit pagina --}}
    <div class="card animated fadeIn">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Bewerk het vak {{$term->title}}</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href={{ url('/terms') }}>Ga terug</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/terms', $term->id) }}">
                @METHOD('patch')
                @CSRF
                {{-- Input field --}}
                <div class="form-group">
                    <label for="title">Vak<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="title" name='title' placeholder="Titel" value="{{$term->title}}">
                </div>
                <div class="form-group">
                    <label for="number">Bloknummer<span class="text-danger"> *</span></label>
                    <input type="number" class="form-control" id="number" name='number' placeholder="Bloknummer" value="{{$term->number}}">
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="description" name='description' placeholder="Beschrijving" required value="{{$term->description}}">
                </div>
                <div class="form-group">
                    <label for="semester">Semester<span class="text-danger"> *</span></label>
                    <input type="number" class="form-control" id="semester" name='semester' placeholder="Semester"  value="{{$term->semester}}">
                    {{-- <div class="valid-feedback">
                        Ziet er goed uit!
                    </div>
                    <div class="invalid-feedback">
                        Controleer of de waarde juist is
                    </div> --}}
                </div>
                {{-- Submit knop --}}
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success">Bevestig wijzigingen</button>
                </div>
            </form>
        </div>
    </div>
@endsection