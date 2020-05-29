@extends('layouts.app', [
'namePage' => 'Editar Preguntas',
'class' => 'login-page sidebar-mini ',
'activePage' => 'preguntas',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="card">
        <h2 class="card-header">Preguntas</h2>
        <div>
            <a style="margin: 19px;" href="{{ route('preguntas.create')}}" class="btn btn-primary">Nueva pregunta</a>
        </div>
        <div class="col-sm-12">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
        </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Pregunta</td>
                            <td>Respuesta</td>
                            <td>Opcion</td>
                            <td>Valor</td>
                            <td colspan=2>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($preguntas as $pregunta)
                        <tr>
                            <td>{{$pregunta->id}}</td>
                            <td>{{$pregunta->pregunta}}</td>
                            <td>{{$pregunta->respuesta}}</td>
                            <td>{{$pregunta->opcion}}</td>
                            <td>{{$pregunta->valor}}</td>
                            <td>
                                <a href="{{ route('preguntas.edit',$pregunta->id)}}" class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('preguntas.destroy', $pregunta->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
            </div>
    </div>
</div>
@endsection
