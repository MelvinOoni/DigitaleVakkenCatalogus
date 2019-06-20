@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}" }}>Home</a></li>
        <li class="breadcrumb-item">Blokken</li>
    </ol>
@stop

@section('body')
    <div class="card">

        {{-- Title of card --}}
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Overzicht blokken</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-success" href={{ url('/terms/create') }}><i class="fa fa-plus"></i> Nieuw blok
                        toeveogen</a>
                </div>
            </div>
        </div>
        {{-- Content of card --}}
        <div class="card-body">
            <table class='table table-striped table-hover'>
                <thead>
                {{-- Head of table --}}
                <tr>
                    <th scope="col">Blok</th>
                    <th scope="col">Titel</th>
                    <th scope="col"></th>
                    <th scope="col">Acties</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                {{-- Content of Table --}}
                @foreach ($terms as $term)
                    <tr>
                        <td>{{$term->number}}</td>
                        <td>{{$term->title}}</td>
                        <td><a href='terms/{{$term->id}}' class="btn btn-info btn-sm text-white">Details</a></td>
                        <td><a class="btn btn-warning btn-sm text-white"
                               href="{{ url('/terms/' . $term->id . '/edit'   ) }}" >Bewerken</a></td>
                        <td>
                            <form method="POST" action="{{ url('terms/' . $term->id) }}">
                                @method('DELETE')
                                @CSRF
                                <button class="btn btn-danger btn-sm"
                                        onclick="if (!confirm('Weet je zeker dat je dit wilt verwijderen?')) { return false }">
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
@endsection
