@extends('coreui::master')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/terms') }}">Blokken</a></li>
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
                    <label for="number">Blok<span class="text-danger"> *</span></label>
                    <select
                        class="form-control" type="number" id="number"
                        name='number' required>
                        <option value="" disabled selected hidden>Open dit menu om een blok te selecteren</option>
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
                        <option value="" disabled selected hidden>Open dit menu om een semester te selecteren</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Anders</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Titel<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="title" name='title'
                           placeholder="Vul hier de titel van het blok in" required>
                </div>
                <div class="form-group">
                    <label for="description">Beschrijving<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="description" name='description'
                           placeholder="Vul hier de beschrijving van het blok in" required>
                </div>
                <div class="form-group">
                    <label for="image">Afbeelding</label>
                    <input type="text" class="form-control" id="image" name='image'
                           placeholder="Vul hier een relevante afbeelding toe">
                </div>


                {{-- Submit knop --}}
                <button type="submit" class="btn btn-block btn-success">Voeg dit blok toe</button>
            </form>
        </div>
    </div>
@endsection()
