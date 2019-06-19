@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/home') }}" }}>Home</a></li>
        <li class="breadcrumb-item">Toetsen</li>
    </ol>
@stop

@section('body')

    <div class="card">
        {{-- Title of card --}}
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Overzicht van de toetsen</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-success" href={{ url('tests/create') }}><i class="fa fa-plus"></i> Nieuwe toets
                        toevoegen</a>
                </div>
            </div>
        </div>

        {{-- Content of card --}}
        <div class="card-body">
            <table class='table table-striped table-hover'>
                <thead>
                {{-- Head of table --}}
                <tr>
                    <th scope="col">Vak</th>
                    <th scope="col">Type toets</th>
                    <th scope="col">Aantal mogelijke pogingen</th>
                    <th scope="col">Week</th>
                    <th scope="col"></th>
                    <th scope="col">Acties</th>
                    <th scope="col"></th>
                </tr>
                </thead>

                <tbody>
                @foreach($tests as $test)

                    <tr>
                        {{-- Name of course --}}
                        <td>{{ $test->course->title }}</td>

                        {{-- Type of test--}}
                        <td>{{ $test->type }}</td>

                        {{-- Attempt of test --}}
                        <td>{{ $test->attempt }}</td>

                        {{-- Week of test --}}
                        <td>{{ $test->week }}</td>

                        {{-- Buttons for actions --}}
                        <td><a class="btn btn-info btn-sm text-white"
                               href={{ url('tests/') }}>Details</a></td>
                        <td><a class="btn btn-warning btn-sm text-white"
                               href="{{ url('...') }}">Update</a></td>
                        <td>
                            <form method="POST" action="{{ url('tests/' . $test->id) }}">
                                @method('DELETE')
                                @CSRF
                                <button class="btn btn-danger btn-sm"
                                        onclick="if (!confirm('Weet je zeker dat je dit wilt verwijderen ...?')) { return false }">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection('body')
