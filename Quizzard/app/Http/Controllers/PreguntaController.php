<?php

namespace App\Http\Controllers;

use App\Pregunta;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
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
        return view('preguntas.create');
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
            'respuesta'=>'required',
            'opcion'=>'required',
            'valor'=>'required'
            ]);

            $pregunta = new Pregunta([
                'pregunta' => $request->get('pregunta'),
                'respuesta' => $request->get('respuesta'),
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
        return view('preguntas.edit', compact('pregunta'));
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
            'respuesta'=>'required',
            'opcion'=>'required',
            'valor'=>'required'
        ]);

        $pregunta = Pregunta::find($id);
        $pregunta->pregunta =  $request->get('pregunta');
        $pregunta->respuesta = $request->get('respuesta');
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
}
