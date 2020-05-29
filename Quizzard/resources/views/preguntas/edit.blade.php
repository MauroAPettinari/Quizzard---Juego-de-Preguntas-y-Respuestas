@extends('layouts.app', [
'namePage' => 'FAQ - Preguntas frecuentes',
'class' => 'login-page sidebar-mini ',
'activePage' => 'faq',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])


@section('content')
<style>
    div.form-group label{
        color:black!important;
    }
    #guardar{
        background:linear-gradient(to right, #0c2646 0%, #204065 60%, #2a5788 100%);
    }
    h1{
        text-align:center;
        margin-top: 1rem;
    }

</style>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="card col-sm-8 offset-sm-2">

            <h1 class="display-4">{{__("Editar Preguntas")}}</h1>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
                @endif
                <form method="post" action="{{ route('preguntas.update', $pregunta->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="pregunta">Pregunta:</label>
                        <input type="text" class="form-control" name="pregunta" value="{{ $pregunta->pregunta }}" />
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
                        <label for="respuesta">Respuesta A:</label>
                        <input type="text" class="form-control" name="respuestaA" value="{{ $pregunta->respuestaA }}" />
                    </div>
                    <div class="form-group">
                        <label for="respuesta">Respuesta B:</label>
                        <input type="text" class="form-control" name="respuestaB" value="{{ $pregunta->respuestaB }}" />
                    </div>
                    <div class="form-group">
                        <label for="respuesta">Respuesta C:</label>
                        <input type="text" class="form-control" name="respuestaCorrecta"
                            value="{{ $pregunta->respuestaCorrecta }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="opcion">Opcion:</label>
                        <input type="text" class="form-control" name="opcion" value="{{ $pregunta->opcion }}" />
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor de la respuesta:</label>
                        <input type="text" class="form-control" name="valor" value="{{ $pregunta->valor }}" />
                    </div>
                    <button type="submit" id="guardar" class="btn btn-primary">Guardar cambios</button>
                </form>

        </div>
    </div>
</div>
@endsection
