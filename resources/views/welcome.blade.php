@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}" }}>Home</a></li>
        <li class="breadcrumb-item">Dashboard</li>
    </ol>
@stop

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Dashboard')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">a breadcrumb item</li>
    </ol>
@stop

@section('body')
    <h1>Realisatie:</h1>
    <div class="card mb-3">
        <img src="images/realisatie.png" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Overzicht per blok over jaar 1</h5>
            <p class="card-text">Een deel van onze realisatie is het maken van een overzicht zoals hierboven.
                Hierbij is te zien waarmee de 1e jaars mee te maken gaan hebben.
                Hier is onder andere in te zien: welk vak, welke periode voor welke toets ze hiermee te maken krijgen.
                In dit overzicht is ook te zien hoe je hiervoor getoetst wordt.
                Wij willlen hier nog aan toevoegen dat we kunnen zien hoeveel pogingen je hiervoor krijgt en projectvoorbeelden. </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush
