@extends('coreui::master')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/courses') }}">Vakken</a></li>
        <li class="breadcrumb-item">Toevoegen</li>
    </ol>
@stop
@section('body')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Voeg een nieuw vak toe</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href={{ url('/courses') }}>Ga terug</a>
                </div>
            </div>
        </div>
        {{-- Create formulier --}}
        <div class="card-body">
            <form class="needs-validation" method="POST" action={{ url('/courses') }} >
                @CSRF
                <div class="form-group">
                    <label for="title">Vak<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="title" name='title'
                           placeholder="Titel" required>
                </div>
                <div class="form-group">
                    <label for="start_week">Startweek<span class="text-danger"> *</span></label>
                    <input type="number" class="form-control" id="start_week" name='start_week'
                           placeholder="Startweek" required>
                </div>
                <div class="form-group">
                    <label for="end_week">Eindweek<span class="text-danger"> *</span></label>
                    <input type="number" class="form-control" id="end_week" name='end_week'
                           placeholder="Eindweek" required>
                </div>

                <div class="form-group">
                    <label for="term_id">Blok<span class="text-danger">*</span></label>
                    <select
                        class="form-control" id="term_id"
                        name='term_id' required>
                        <option value="" disabled selected hidden>Open dit menu om een type vak te kiezen</option>
                        @foreach ($terms as $row)
                            <option value="{{ $row->id }}">{{ $row->number }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Submit knop --}}
                <button type="submit" class="btn btn-block btn-success">Voeg dit vak toe</button>
            </form>
        </div>
    </div>
@endsection()
