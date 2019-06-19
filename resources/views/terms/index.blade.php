@extends('coreui::master')

@section('title', 'Blokken')

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
                    <h4>Overview of terms</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-success" href={{ url('/terms/create') }}><i class="fa fa-plus"></i> New term</a>
                </div>
            </div>
        </div>
        {{-- Content of card --}}
        <div class="card-body">
            <table class='table table-striped table-hover'>
                <thead>
                {{-- Head of table --}}
                <tr>
                    <th scope="col">Park Name</th>
                    <th scope="col"></th>
                    <th scope="col">Actions</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                {{-- Content of Table --}}
                <tr>
                    <td>...</td>
                    <td><a class="btn btn-info btn-sm text-white"
                           href={{ url('...') }}>Details</a></td>
                    <td><a class="btn btn-warning btn-sm text-white"
                           href="{{ url('...') }}">Update</a></td>
                    <td>
                        <form method="POST" action="{{ url('...') }}">
                            @method('DELETE')
                            @CSRF
                            <button class="btn btn-danger btn-sm"
                                    onclick="if (!confirm('Are you sure you want to delete this ...?')) { return false }">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection