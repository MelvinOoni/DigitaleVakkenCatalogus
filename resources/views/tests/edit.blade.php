@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/home') }}" }}>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('tests') }}" }}>Toetsen</a></li>
        <li class="breadcrumb-item">Wijzigen</li>
    </ol>
@stop

@section('body')

    {{-- Edit pagina --}}
    <div class="card animated fadeIn">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Bewerk de {{ $test->type }}toets {{ $test->course->title }}</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href={{ url('/tests') }}>Ga terug</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ url('/tests', $test->id) }}">
                @METHOD('patch')
                @CSRF

                <div class="form-group">
                    <label for="course_id">Naam van het vak<span class="text-danger">*</span></label>
                    <select
                        class="form-control"  id="course_id"
                        name='course_id' required>
                        <option value="{{ $test->course->id }}" selected hidden>{{ $test->course->title }}</option>
                        @foreach ($course as $row)
                            <option value="{{ $row->id }}">{{ $row->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="type">Type toets<span class="text-danger">*</span></label>
                    <select
                        class="form-control" id="type"
                        name='type' required>
                        <option value="{{ $test->type }}" selected hidden>{{ $test->type }}</option>
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
                        <option value="{{ $test->attempt }}" selected hidden>{{ $test->attempt }} poging(en)</option>
                        <option value="1">1 poging</option>
                        <option value="2">2 pogingen</option>
                        <option value="3">3 pogingen</option>
                        <option value="4">4 pogingen</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="week">Weeknummer<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="week" name='week'
                           value="{{ $test->week }}" required>
                </div>


                {{-- Submit knop --}}
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success">Bevestig wijzigingen</button>
                </div>
            </form>
        </div>
    </div>

@endsection
