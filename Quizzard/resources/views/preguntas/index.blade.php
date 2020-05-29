@extends('layouts.app', [
'namePage' => 'Editar Preguntas',
'class' => 'login-page sidebar-mini ',
'activePage' => 'preguntas',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
<style>
    .display-4{
        text-align:center;
    }
    #nuevaPregunta{
    background:linear-gradient(to right, #0c2646 0%, #204065 60%, #2a5788 100%);
    }
    h1{
        margin-top: 1rem;
    }
</style>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="card">
        <h1 class="display-4">Preguntas</h1>
        <div>
            <a style="margin: 19px;" id="nuevaPregunta" href="{{ route('preguntas.create')}}" class="btn btn-primary">Nueva pregunta</a>
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
                            <td>Categoria</td>
                            <td>Respuesta</td>
                            <td>Valor</td>
                            <td colspan=2>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($preguntas as $pregunta)
                        <tr>
                            <td>{{$pregunta->id}}</td>
                            <td>{{$pregunta->pregunta}}</td>
                            <td>@php echo ucfirst($pregunta->categoria); @endphp</td>
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
