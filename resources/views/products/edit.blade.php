@extends('coreui::master')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/home') }}" }}>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/products') }}" }}>products</a></li>
        <li class="breadcrumb-item">Edit</li>
    </ol>
@stop
@section('body')
    {{-- Edit pagina --}}
    <div class="card animated fadeIn">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Edit het projectvoorbeeld</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-primary" href={{ url('/products') }}>Go back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="needs-validation" novalidate="novalidate" method="POST"
                  action={{ url('/products') }}>
                @CSRF
                {{-- Input field --}}
                <div class="form-group">
                    <label for="{{$product->id}}">{{$product->name}}<span class="text-danger">*</span></label>
                    <input type="name" class="form-control" id="name" name='name'
                           placeholder="Typ hier de nieuwe naam" required>
                    <div class="valid-feedback">
                        Ziet er goed uit!
                    </div>
                    <div class="invalid-feedback">
                        Controleer of de waarde juist is
                    </div>
                </div>
                {{-- Submit knop --}}
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success">Bevestig wijzigingen</button>
                </div>
            </form>
        </div>
    </div>
@endsection