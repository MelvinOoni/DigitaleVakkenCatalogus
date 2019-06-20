<!doctype html>
<html lang="en">
    <title>Rapport</title>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('vendor/coreui/css/coreui.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/coreui/fontawesome/css/fontawesome.css') }}">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>

    <style>
        h1{
            font-family: "Arial", sans-serif;
        }
        h3{
            font-family: "Arial", sans-serif;
        }
        div.breakNow{
            page-break-inside: avoid;
            page-break-after: always;
        }
        body{
            background-color:white;
            font-family: "Arial", sans-serif;
        }
        p {
            font-family: "Arial", sans-serif;
        }
    </style>
    <body class="col-12">
        <div class="main bg-white">
            <div>
                <img src="./images/hz.png" height="50px" style="margin-top:3px;margin-left:auto;">
                <h1 class="text-center mt-3" style="color:#4682B4;">Compleet overzicht</h1>
            </div>
            <div class="bg-white">
                <h2 class="mt-3">Blokken</h2>
                @foreach ($terms as $term)
                    <div class="list-group-item mt-4">
                        <div class="card-body">
                            <h3 class="card-title">{{$term->title}}</h3>
                            <hr>
                            <h4>Beschrijving:</h4>
                            <p> {{$term->description}}</p>
                            <h4>Semester:</h4>
                            <p>{{$term->semester}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="breakNow"></div>
            <div class="bg-white">
                <h2 class="mt-3">Vakken</h2>
                @foreach ($courses as $course)
                    <div class="list-group-item mt-4">
                        <div class="card-body">
                            <h3 class="card-title">{{$course->title}}</h3>
                            <hr>
                            <h4>Periode:</h4>
                            <p>Week {{$course->start_week}} t/m {{$course->end_week}}</p>
                            <h4>Blok</h4>
                            <p>{{$course->term_id}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="breakNow"></div>

            <div class="bg-white">
                <h2 class="mt-3">Toetsen</h2>
                @foreach ($tests as $test)
                    <div class="list-group-item mt-4">
                        <div class="card-body">
                            <h3 class="card-title">{{$test->course->title}}</h3>
                            <hr>
                            <h4>Type toets:</h4>
                            <p> {{$test->type}}</p>
                            <h4>Aantal pogingen:</h4>
                            <p>{{$test->attempt}}</p>
                            <h4>Week:</h4>
                            <p>{{$test->week}}</p>


                            <strong>Vak:</strong> {{ $test->course->title }}<br>
                            <strong>Type toets:</strong> {{ $test->type }}<br>
                            <strong>Aantal mogelijke pogingen:</strong> {{ $test->attempt }}<br>
                            <strong>Week:</strong> {{ $test->week }}<br>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
