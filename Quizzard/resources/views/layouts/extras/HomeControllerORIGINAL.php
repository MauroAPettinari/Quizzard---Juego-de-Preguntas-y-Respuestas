<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Pregunta;
use PhpParser\Node\Stmt\Foreach_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // public function mostrarPregunta(Request $request){
    //     $preguntas = Pregunta::inRandomOrder()->take(6)->get();
    //     if ($request){
    //     $vac = compact("preguntas");
    //     }else{
    //     $vac = compact("preguntas","request");
    //     }
    //     return view("home", $vac);
    // }


    public function mostrarPregunta(){
        $preguntas = Pregunta::inRandomOrder()->take(6)->get();
        $vac = compact("preguntas");
         return view("home", $vac);
    }


  public function recibirFormulario(Request $request){
    $preguntas = Pregunta::inRandomOrder()->take(6)->get();
    $input = $request->all();

      foreach ($input as $key => $valor) {
          if ($key != '_token'){
              if (substr( $key , 0, 8 ) === "pregunta"){
                  $arrayPreguntas[$key] = $valor;
              }
              else{
                  $arrayRespuestas[$key] = $valor;
              }
          }
      }

     $vac = compact("preguntas","request","input","arrayRespuestas","arrayPreguntas");
     return view("resultados",$vac);
 }

}
// array id de preguntas usadas que no este, timer para que vuelva a llamar

    // Traigo ID posibles de seleccionar, 20

    // genero random entre 1 y 20

    // traigo pregunta con id = random

    // tengo pregunta llamo vista con los datos pregunta

    // y repito
