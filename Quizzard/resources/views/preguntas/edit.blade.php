@extends('layouts.app', [
'namePage' => 'FAQ - Preguntas frecuentes',
'class' => 'login-page sidebar-mini ',
'activePage' => 'faq',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])


@section('content')

<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{__("Editar Preguntas")}}</h5>
                </div>

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
                        <input type="text" class="form-control" name="pregunta" value={{ $pregunta->pregunta }} />
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
                        <input type="text" class="form-control" name="respuestaCorrecta"
                            value={{ $pregunta->respuestaCorrecta }} />
                    </div>
                    <div class="form-group">
                        <label for="respuesta">Respuesta A:</label>
                        <input type="text" class="form-control" name="respuestaA" value={{ $pregunta->respuestaA }} />
                    </div>
                    <div class="form-group">
                        <label for="respuesta">Respuesta B:</label>
                        <input type="text" class="form-control" name="respuestaB" value={{ $pregunta->respuestaB }} />
                    </div>
                    <div class="form-group">
                        <label for="opcion">Opcion:</label>
                        <input type="text" class="form-control" name="opcion" value={{ $pregunta->opcion }} />
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor de la respuesta:</label>
                        <input type="text" class="form-control" name="valor" value={{ $pregunta->valor }} />
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
