@extends('layouts.app', [
    'namePage' => 'FAQ - Preguntas Frecuentes',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])


@section('content')
    <div class="panel-header panel-header-sm">
      </div>
<div class="content">  <!-- Div contenedor de toda la pagina -->

    <div class="card">
        <h5 class="card-header">Preguntas Frecuentes</h5>

        <div class="card-body">

          <h5 class="card-title"> </h5>

          <p class="card-text">

            <div class="primerpregunta">
              <h2>¿Se puede jugar online?</h2>
              <h3>Si, todos los juegos que tengan características de juego online pueden utilizarse tranquilamente sin ningún riesgo.</h3>

            </div>

            <div class="segundapregunta">
              <h2>¿Qué pasa si se me apaga la consola, si se me corta la luz o si se me corta internet mientras estoy descargando?</h2>
              <h3>Al reabrir el juego, lo encontrara en la misma situacion que al cerrarse.</h3>

            </div>

            <div class="tercerpregunta">
              <h2>¿Cuantas personas pueden jugar online?</h2>
              <h3>Se puede jugar como maximo de 4 personas en 2 equipos de 2 personas cada uno.</h3>

            </div>

            <div class="cuartapregunta">
              <h2>¿Cuantos desafios puedo tener abierto a la vez?</h2>
              <h3>Puede tener hasta 5 desafios a la vez.</h3>

            </div></p>
        </div>
      </div>



</div> <!-- Div contenedor de toda la pagina -->
@endsection
