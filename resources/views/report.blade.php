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
    </style>
    <body class="col-12">
        <div class="main bg-white">
            <div>
                <img src="./images/hz.png" height="50px" style="margin-top:3px;margin-left:auto;">
                <h1 class="text-center mt-3">Vakken overzicht</h1>
            </div>
            <div class="bg-white">
                @foreach ($courses as $course)
                    <div class="card w-100">
                        <div class="card-body">
                            <h3 class="card-title">{{$course->title}}</h3>
                            <h4>Periode</h4>
                            <p>Week {{$course->start_week}} t/m {{$course->end_week}}</p>
                            <h4>Blok</h4>
                            <p>{{$course->term_id}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
