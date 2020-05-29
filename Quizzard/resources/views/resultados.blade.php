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

</head>
<style>
    .main-panel.ps{
    background-image: url(assets/css/fotosJuego/alternativo.jpg);
    }

    #quizzard{
        padding: 15px;
        background:linear-gradient(to right, #0c2646 0%, #204065 60%, #2a5788 100%);
    }
</style>
<div class="panel-header panel-header-sm">
</div>
<div class="content container">
            <div id="quizzard" class="card col-8 offset-2">
                <div>
                    @php
                    $i = 1;
                    $cantidadCorrectas = 0;

                    $preguntas = array_values($arrayPreguntas);
                    $respuestas = array_values($arrayRespuestas);

                    for ($i=0; $i <6 ; $i++) {
                        if ($respuestas[$i] == $preguntas[$i]){
                            echo "<div class='alert alert-success'>";
                            echo "<p style='color:green;'><b>";
                            echo "¡Pregunta " . $i . " correcta! <br>";
                            echo "</p></b>";
                            echo "</div>";
                            $cantidadCorrectas++;
                        } else {
                            echo "<div class='alert alert-danger'>";
                            echo "<p><b>";
                            echo "¡Respuesta " . $i . " incorrecta! <br>";
                            echo "</p></b>";
                            echo "</div>";
                        }
                    }
                    @endphp
                    @if ($cantidadCorrectas == 6)
                    <div class="alert alert-success">
                        @php
                            echo "<h4><b>";
                            echo "¡Contestaste " . $cantidadCorrectas . " preguntas correctamente! ¡Ganaste!";
                            echo "</h4></b>";
                        @endphp
                    </div>
                    @endif
                    @if ($cantidadCorrectas >= 3 && $cantidadCorrectas < 6)
                    <div class="alert alert-warning">
                        @php
                            echo "<h4>";
                            echo "¡Contestaste " . $cantidadCorrectas . " preguntas correctamente!";
                            echo "<br>";
                            echo "Estuviste cerca de ganar, ¡mejor suerte la próxima!";
                            echo "</h4>";
                        @endphp
                    </div>
                    @endif
                    @if ($cantidadCorrectas < 3)
                    <div class="alert alert-danger">
                        @php
                            echo "<h4><b>";
                            echo "¡Contestaste " . $cantidadCorrectas . " preguntas correctamente!";
                            echo "<br>";
                            echo "Tuviste un bajo rendimiento, ¡intentalo de nuevo!";
                            echo "</h4></b>";
                        @endphp
                    </div>
                    @endif

                </div>

            </div>

            <script type="text/javascript">
            </script>
            @endsection
