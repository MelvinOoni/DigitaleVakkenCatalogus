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
                    <a class="btn btn-success" href={{ url('tests/create') }}><i class="fa fa-plus"></i> Toets toevoegen</a>
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
                    <th scope="col">Poging</th>
                    <th scope="col">Week</th>
                    <th scope="col"></th>
                    <th scope="col">Acties</th>
                    <th scope="col"></th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    {{-- Coursename --}}
                    @foreach($courses as $courseRow)
                        <td>{{ $courseRow->title }}</td>
                    @endforeach

                    {{-- Test type --}}
                    @foreach($testTypes as $typeRow)
                        <td>{{ $typeRow->name }}</td>
                    @endforeach

                    {{-- Attempt and week of test --}}
                    @foreach ($tests as $testRow)
                        <td>{{ $testRow->first()->attempt }}</td>
                        <td>{{ $testRow->first()->week }}</td>
                        {{--<td>{{ $courses->first()->title }}</td>--}}
                        <td><a class="btn btn-info btn-sm text-white"
                               href={{ url('tests/') }}>Details</a></td>
                        <td><a class="btn btn-warning btn-sm text-white"
                               href="{{ url('...') }}">Update</a></td>
                        <td>
                            <form method="POST" action="{{ url('tests/' . $testRow->id) }}">
                                @method('DELETE')
                                @CSRF
                                <button class="btn btn-danger btn-sm"
                                        onclick="if (!confirm('Weet je zeker dat je dit wilt verwijderen ...?')) { return false }">
                                    Delete
                                </button>
                            </form>
                        </td>
                    @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection('body')
