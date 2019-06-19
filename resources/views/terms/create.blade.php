@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/home') }}" }}>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/terms') }}" }}>Blokken</a></li>
        <li class="breadcrumb-item">Toevoegen</li>
    </ol>
@stop

@section('body')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Voeg een nieuw blok toe</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href={{ url('/terms') }}>Ga terug</a>
                </div>
            </div>
        </div>
        {{-- Create formulier --}}
        <div class="card-body">
            <form class="needs-validation" method="POST" action={{ url('/terms') }} >
                @CSRF
                <div class="form-group">
                    <label for="title">Blok naam<span class="text-danger">*</span></label>
                    <input autofocus type="text" class="form-control" id="title" name='title' placeholder="Naam blok" required>
                    <div class="valid-feedback">
                        Ziet er goed uit!
                    </div>
                    <div class="invalid-feedback">
                        Controleer of de waarde juist is!
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">Blok afbeelding <strong class="text-danger">*</strong></label>
                    <input autofocus type="url" class="form-control" id="image" name="image" placeholder="Afbeelding blok">
                    <div class="valid-feedback">
                        Ziet er goed uit!
                    </div>
                    <div class="invalid-feedback">
                        Controleer of de waarde juist is!
                    </div>
                </div>
                <div class="form-group">
                    <label for="number">Blok nummer <strong class="text-danger">*</strong></label>
                    <input autofocus type="number" class="form-control" id="number" name="number" placeholder="Nummer blok">
                    <div class="valid-feedback">
                        Ziet er goed uit!
                    </div>
                    <div class="invalid-feedback">
                        Controleer of de waarde juist is!
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Blok beschrijving <strong class="text-danger">*</strong></label>
                    <textarea name="description" id="description" class="form-control" placeholder="Beschrijving blok"></textarea>
                    <div class="valid-feedback">
                        Ziet er goed uit!
                    </div>
                    <div class="invalid-feedback">
                        Controleer of de waarde juist is!
                    </div>
                </div>
                <div class="form-group">
                    <label for="semester">Semester <strong class="text-danger">*</strong></label>
                    <input autofocus type="number" class="form-control" id="semester" name="semester" placeholder="Semester nummer">
                    <div class="valid-feedback">
                        Ziet er goed uit!
                    </div>
                    <div class="invalid-feedback">
                        Controleer of de waarde juist is!
                    </div>
                </div>
                {{-- Submit knop --}}
                <button type="submit" class="btn btn-block btn-success">Voeg dit blok toe</button>
            </form>
        </div>
    </div>
@endsection