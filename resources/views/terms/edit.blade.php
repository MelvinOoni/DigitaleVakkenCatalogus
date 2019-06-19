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
                    <h4>Bewerk blok {{$term->number}}</h4>
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
                <div class="form-group">
                    <label for="number">Blok<span class="text-danger"> *</span></label>
                    <select
                        class="form-control" type="number" id="number"
                        name='number' required>
                        <option value="{{ $term->number }}" selected hidden>Blok {{ $term->number }}</option>
                        <option value="1">Blok 1</option>
                        <option value="2">Blok 2</option>
                        <option value="3">Blok 3</option>
                        <option value="4">Blok 4</option>
                        <option value="5">Anders</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="semester">Semester<span class="text-danger"> *</span></label>
                    <select
                        class="form-control" type="number" id="semester"
                        name='semester' required>
                        <option value="{{ $term->semester }}" selected hidden>Semester {{ $term->semester }}</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Anders</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">Titel<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="title" name='title' placeholder="Vul hier de titel van het blok in"
                           value="{{$term->title}}">
                </div>

                <div class="form-group">
                    <label for="description">Beschrijving<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="description" name='description'
                           placeholder="Vul hier de beschrijving van het blok in" required value="{{$term->description}}">
                </div>

                <div class="form-group">
                    <label for="image">Afbeelding</label>
                    <input type="text" class="form-control" id="image" name='image'
                           placeholder="Vul hier een relevante afbeelding toe" value="{{$term->image}}">
                </div>

                {{-- Submit knop --}}
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success">Bevestig wijzigingen</button>
                </div>
            </form>
        </div>
    </div>
@endsection
