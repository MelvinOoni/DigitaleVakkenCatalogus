@extends('coreui::master')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('adminpanel/home') }}" }}>Home</a></li>
        <li class="breadcrumb-item">Products</li>
    </ol>
@stop
@section('body')
    <div class="card">
        {{-- Title of card --}}
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Overzicht van projectvoorbeelden</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-success" href={{ url('/products/create') }}><i class="fa fa-plus"></i> New projectvoorbeeld</a>
                </div>
            </div>
        </div>
        {{-- Content of card --}}
        <div class="card-body">
            <table class='table table-striped table-hover'>
                <thead>
                {{-- Head of table --}}
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Projectvoorbeeld</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                {{-- Content of Table --}}
                @foreach($products as $product)
                    <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td><a class="btn btn-warning btn-sm text-white"
                           href='/products/{{$product->id}}/edit'>Bewerk</a></td>
                    <td>
                        <form method="POST" action="/products/{{$product->id}}">
                            @method('DELETE')
                            @CSRF
                            <button class="btn btn-danger btn-sm"
                                    onclick="if (!confirm('Weet je zeker dat je dit wilt verwijderen?')) { return false }">
                                Verwijder
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