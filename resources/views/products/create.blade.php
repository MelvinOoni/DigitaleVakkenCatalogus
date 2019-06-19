@extends('coreui::master')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/home') }}" }}>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/products') }}" }}>Products</a></li>
        <li class="breadcrumb-item">Toevoegen</li>
    </ol>
@stop
@section('body')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Voeg een nieuwe projectvoorbeeldnaam toe</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href={{ url('/products') }}>Ga terug</a>
                </div>
            </div>
        </div>
        {{-- Create formulier --}}
        <div class="card-body">
            <form class="needs-validation" method="POST" action={{ url('/products') }} >
                @CSRF
                <div class="form-group">
                    <label for="name">Naam<span class="text-danger">*</span></label>
                    <input autofocus type="text" class="form-control" id="name" name='name'
                           placeholder="Voer de productnaam in" required>
                    <div class="valid-feedback">
                        Ziet er goed uit!
                    </div>
                    <div class="invalid-feedback">
                        Controleer of de waarde juist is
                    </div>
                </div>
                {{-- Submit knop --}}
                <button type="submit" class="btn btn-block btn-success">Voeg dit projectvoorbeeld toe</button>
            </form>
        </div>
    </div>
@endsection()