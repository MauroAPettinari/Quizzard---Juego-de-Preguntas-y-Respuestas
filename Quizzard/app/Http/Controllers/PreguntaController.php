<?php

namespace App\Http\Controllers;

use App\Pregunta;
use App\Categoria;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::all();


        return view('preguntas.index', compact('preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('preguntas.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pregunta'=>'required',
            'categoria'=>'required',
            'respuestaA'=>'required',
            'respuestaB'=>'required',
            'respuestaCorrecta'=>'required',
            'opcion'=>'required',
            'valor'=>'required'
            ]);

            $pregunta = new Pregunta([
                'pregunta' => $request->get('pregunta'),
                'categoria'=> $request->get('categoria'),
                'respuestaA'=> $request->get('respuestaA'),
                'respuestaB'=>$request->get('respuestaB'),
                'respuestaCorrecta'=> $request->get('respuestaCorrecta'),
                'opcion' => $request->get('opcion'),
                'valor' => $request->get('valor')
            ]);
            $pregunta->save();
            return redirect('/preguntas')->with('success', 'Pregunta guardada!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pregunta = Pregunta::find($id);
        $categorias = Categoria::all();

        return view('preguntas.edit', compact('pregunta','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pregunta'=>'required',
            'categoria'=>'required',
            'respuestaA'=>'required',
            'respuestaB'=>'required',
            'respuestaCorrecta'=>'required',
            'opcion'=>'required',
            'valor'=>'required'
        ]);

        $pregunta = Pregunta::find($id);
        $pregunta->pregunta =  $request->get('pregunta');
        $pregunta->categoria = $request->get('categoria');
        $pregunta->respuestaA = $request->get('respuestaA');
        $pregunta->respuestaB = $request->get('respuestaB');
        $pregunta->respuestaCorrecta = $request->get('respuestaCorrecta');
        $pregunta->opcion = $request->get('opcion');
        $pregunta->valor = $request->get('valor');
        $pregunta->save();

        return redirect('/preguntas')->with('success', 'Pregunta actualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pregunta = Pregunta::find($id);
        $pregunta->delete();

        return redirect('/preguntas')->with('success', 'Pregunta borrada!');
    }

    public function traerPregunta(){

    }

    public function traerCategoria(){

    }
}
