@extends('layouts.app', [
'namePage' => 'Dashboard',
'class' => 'login-page sidebar-mini ',
'activePage' => 'home',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/quizzard.css">
    {{-- <script src="/assets/js/quizzard.js"></script> --}}
</head>

{{-- <img src="/storage/fotosCategorias/historia.jpg" alt="">
<img src="/storage/fotosCategorias/deporte.jpg" alt="">
<img src="/storage/fotosCategorias/entretenimiento.jpg" alt="">
<img src="/storage/fotosCategorias/arte.jpg" alt=""> --}}

<div class="panel-header panel-header-sm">
</div>
<div class="content container">
    <div class="card" id="juego">
        <div class="card-header">
            Quizzard
        </div>
        <div class="card-body ">
            <p class="card-text">
                <div id="div1" class="fa"></div>
            </p>
            <div id="quizzard" class="">
                <div>
                    {{-- <img src="/storage/fotosCategorias/inicial.jpg"> --}}

                    @php
                    //dd($request->datosPreguntas);
                    $i = 1;
                    $cantidadCorrectas = 0;

                    $preguntas = array_values($arrayPreguntas);
                    $respuestas = array_values($arrayRespuestas);

                    for ($i=0; $i <6 ; $i++) {
                        if ($respuestas[$i] == $preguntas[$i]){
                            echo "Pregunta " . $i . " correcta! <br>";
                            $cantidadCorrectas++;
                        } else {
                            echo "Respuesta " . $i . " incorrecta! <br>";
                        }
                    }

                    echo "Respuestas correctas: " . $cantidadCorrectas;
                    @endphp

                </div>

            </div>

            <script type="text/javascript">
            </script>
            @endsection
