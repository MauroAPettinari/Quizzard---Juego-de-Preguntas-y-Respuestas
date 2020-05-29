@extends('layouts.app', [
    'namePage' => 'FAQ - Preguntas frecuentes',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'faq',
    'backgroundImage' => asset('assets') . "/img/alternativo.jpg",
])


@section('content')
    <div class="panel-header panel-header-sm">
      </div>
<div class="content">  <!-- Div contenedor de toda la pagina -->
        <style>
            .main-panel.ps{
            background-image: url(assets/css/fotosJuego/alternativo.jpg);
            }

        </style>
    <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                ¿Qué es Quizzard?
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              Quizzard es un juego de preguntas y respuestas sobre programación.
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                ¿Cómo se seleccionan las preguntas?
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                ¡De forma aleatoria! Nunca sabrás que pregunta te puede tocar.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                ¿Cuántas preguntas son?
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
            El juego tiene un total de 6 preguntas.
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingCuatro">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">
                  ¿Puedo hacer mi propio quiz?
                </button>
              </h5>
            </div>
            <div id="collapseCuatro" class="collapse" aria-labelledby="headingCuatro" data-parent="#accordion">
              <div class="card-body">
              Esta funcionalidad se agregará próximamente.
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingCinco">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">
                  ¿Cuanto dura el Quiz?
                </button>
              </h5>
            </div>
            <div id="collapseCinco" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
              ¡Lo que tardes en responderlo! No hagas trampa. ;)
            </div>
          </div>
      </div>



</div> <!-- Div contenedor de toda la pagina -->
@endsection
