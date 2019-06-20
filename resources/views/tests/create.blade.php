@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/home') }}" }}>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/tests') }}" }}>Toetsen</a></li>
        <li class="breadcrumb-item">Toevoegen</li>
    </ol>
@stop

@section('body')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Toevoegen</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href={{ url('/tests') }}>Ga terug</a>
                </div>
            </div>
        </div>

        {{-- Create formulier --}}
        <div class="card-body">
            <form class="needs-validation" novalidate method="POST" action={{ url('/tests') }} >

                @CSRF

                <div class="form-group">
                    <label for="course_id">Naam van het vak<span class="text-danger">*</span></label>
                    <select
                        class="form-control"  id="course_id"
                        name='course_id' required>
                        <option value="" disabled selected hidden>Open dit menu om een vak te kiezen</option>
                        @foreach ($courses as $row)
                            <option value="{{ $row->id }}">{{ $row->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="type">Type toets<span class="text-danger">*</span></label>
                    <select
                        class="form-control" id="type"
                        name='type' required>
                        <option value="" disabled selected hidden>Open dit menu om een type toets te kiezen</option>
                        <option value="Casus">Casus</option>
                        <option value="Mondeling">Mondeling</option>
                        <option value="Theorie">Theorie</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="attempt">Aantal beschikbare pogingen<span class="text-danger">*</span></label>
                    <select
                        class="form-control" type="number" id="attempt"
                        name='attempt' required>
                        <option value="" disabled selected hidden>Open dit menu om de poging te selecteren</option>
                        <option value="1">1 poging</option>
                        <option value="2">2 pogingen</option>
                        <option value="3">3 pogingen</option>
                        <option value="4">4 pogingen</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="week">Weeknummer<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="week" name='week'
                           placeholder="Vul hier het weeknummer in" required>
                </div>

                {{-- Submit knop --}}
                <button type="submit" class="btn btn-block btn-success">Voeg deze toets toe</button>
            </form>
        </div>
    </div>

@endsection()
