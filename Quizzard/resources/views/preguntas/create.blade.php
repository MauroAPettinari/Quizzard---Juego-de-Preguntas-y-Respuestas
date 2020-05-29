@extends('layouts.app', [
'namePage' => 'ABM - Preguntas',
'class' => 'login-page sidebar-mini ',
'activePage' => 'preguntas',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">

    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a contact</h1>
            <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                <form method="post" action="{{ route('preguntas.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="pregunta">Pregunta:</label>
                        <input type="text" class="form-control" name="pregunta" />
                    </div>
                    <div class="form-group">
                        <label for="categoria">Seleccione una categoría:</label>
                        <select class="form-control" name="categoria">
                            <option disabled selected>Seleccione Categoría</option>
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria["nombre"]}}">{{ucfirst($categoria["nombre"])}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="respuesta">Respuesta Correcta:</label>
                        <input type="text" class="form-control" name="respuestaCorrecta" />
                    </div>
                    <div class="form-group">
                        <label for="respuesta">Respuesta A:</label>
                        <input type="text" class="form-control" name="respuestaA" />
                    </div>
                    <div class="form-group">
                        <label for="respuesta">Respuesta B:</label>
                        <input type="text" class="form-control" name="respuestaB" />
                    </div>
                    <div class="form-group">
                        <label for="opcion">Opcion:</label>
                        <input type="text" class="form-control" name="opcion" />
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor:</label>
                        <input type="text" class="form-control" name="valor" />
                    </div>

                    <button type="submit" class="btn btn-primary-outline">Crear pregunta</button>
                </form>
            </div>
        </div>
    </div>
</div> <!-- Div contenedor de toda la pagina -->
@endsection
