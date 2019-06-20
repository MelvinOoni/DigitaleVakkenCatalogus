@extends('coreui::master')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('adminpanel/home') }}" }}>Home</a></li>
        <li class="breadcrumb-item">Vakken</li>
    </ol>
@stop
@section('body')
    <div class="card">
        {{-- Title of card --}}
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Overzicht vakken</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-success" href={{ url('/courses/create') }}>Nieuw vak toeveogen</a>
                </div>
            </div>
        </div>
        {{-- Content of card --}}
        <div class="card-body">
            <table class='table table-striped table-hover'>
                <thead>
                {{-- Head of table --}}
                <tr>
                    <th scope="col">Titel</th>
                    <th scope="col">Startweek</th>
                    <th scope="col">Eindweek</th>
                    <th scope="col">Blok</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                {{-- Content of Table --}}
                @foreach ($courses as $course)
                    <tr>
                        <td>{{$course->title}}</td>
                        <td>{{$course->start_week}}</td>
                        <td>{{$course->end_week}}</td>
                        <td>{{$course->term_id}}</td>
                        <td><a href='courses/{{$course->id}}' class="btn btn-info btn-sm text-white">Details</a></td>
                           <td><a class="btn btn-warning btn-sm text-white"
                            href='/courses/{{$course->id}}/edit'>Bewerken</a></td>
                        <td>
                            <form method="POST" action="/courses/{{$course->id}}">
                                @method('DELETE')
                                @CSRF
                                <button class="btn btn-danger btn-sm" onclick="if (!confirm('Weet je zeker dat je dit vak wilt verwijderen?')) { return false }">
                                    Verwijderen
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- PDF generate --}}
    <form action="{!! url('/getPDF') !!}" method="PUT">
        <a target="_blanc">
            <button class="btn btn-primary" type="submit">
                Genereer overzicht vakken
            </button>
        </a>
    </form>    
</div>
@endsection 