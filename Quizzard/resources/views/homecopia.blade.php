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
    <script src="/assets/js/quizzard.js"></script>
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
                    <img src="/storage/fotosCategorias/inicial.jpg">
                    @php
                    foreach ($preguntas as $pregunta) {

                    echo $pregunta->pregunta;
                    }
                    @endphp
                </div>
                <div id='progressbar1'></div>
                <div class="row justify-content-center">
                    <button class="button">Jugar</button>
                </div>
            </div>

    {{-- <div class="card" id="juego">
        <div id="quiz">
            @foreach($preguntas)
            <input type="radio" value=
            @endforeach
        </div>
        <button id="submit">Submit Quiz</button>
        <div id="results"></div>
    </div> --}}

</div>

<script type="text/javascript">

    var preguntas = {!! json_encode($preguntas) !!};

    // console.log(preguntas);

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
