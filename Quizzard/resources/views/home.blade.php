@extends('layouts.app', [
'namePage' => 'Dashboard',
'class' => 'login-page sidebar-mini ',
'activePage' => 'home',
'backgroundImage' => asset('assets') . "/img/alternativo.jpg",
])


@section('content')

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/quizzard.css">
    {{-- <script src="/assets/js/quizzard.js"></script> --}}
</head>

<div class="panel-header panel-header-sm">
</div>
<div class="content container">
            <div id="quizzard" class="card col-8 offset-2">
                    <form action="/formulario" method="POST">
                        @csrf

                        @php
                        $indice = 1;
                        @endphp
                        <input type="hidden" id="datosPreguntas" value="{{$preguntas}}" name="datosPreguntas">
                        @foreach ($preguntas as $pregunta)
                        <p><b> {{$pregunta->pregunta}} </p></b>
                        <div class="row">
                        <input type="hidden" id="correcta{{$indice}}" value="{{$pregunta->opcion}}" name="correcta{{$indice}}">
                        <div class="col-4">
                        <input type="radio" id="respuestaA{{$pregunta->id}}" name="pregunta{{$indice}}"
                            value="A" required>

                        <label for="respuestaA{{$pregunta->id}}">{{$pregunta->respuestaA}}</label>
                        </div>
                        <div class="col-4">
                        <input type="radio" id="respuestaB{{$pregunta->id}}" name="pregunta{{$indice}}"
                            value="B" required>
                        <label for="respuestaA{{$pregunta->id}}">{{$pregunta->respuestaB}}</label>
                        </div>
                        <div class="col-4">
                        <input type="radio" id="respuestaC{{$pregunta->id}}" name="pregunta{{$indice}}"
                            value="C" required>
                            <label for="respuestaA{{$pregunta->id}}">{{$pregunta->respuestaCorrecta}}</label>
                        </div>
                        </div>
                        <hr>
                        @php    $indice++; @endphp

                        @endforeach
                        <button type="submit" id="terminar" class="btn btn-primary">Terminar</button>
                    </form>
                </div>

        <script type="text/javascript">
            var preguntas = {!! json_encode($preguntas) !!};

        </script>
        @endsection

        @push('js')
        <script>
            $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
    });

    function hourglass() {
      var a;
      a = document.getElementById("div1");
      a.innerHTML = "&#xf251;";
      setTimeout(function () {
          a.innerHTML = "&#xf252;";
        }, 1000);
      setTimeout(function () {
          a.innerHTML = "&#xf253;";
        }, 2000);
    }
    hourglass();
    setInterval(hourglass, 3000);


    var preguntas = {!! json_encode($preguntas->toArray()) !!};

    console.log(users);
        </script>
        @endpush
