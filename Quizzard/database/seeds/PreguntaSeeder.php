<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->insert(
            [
                [
                    "pregunta" => '¿Cuando se creó "La Gioconda"?',
                    "categoria" => "arte",
                    "respuestaA" => "1503",
                    "respuestaB" => "1608",
                    "respuestaCorrecta" => "1705",
                    "opcion" => "A",
                    "valor" => "5",
                ],
                [
                    "pregunta" => '¿Quién pintó el "Guernica"?',
                    "categoria" => "arte",
                    "respuestaA" => "Vincent Van Gogh",
                    "respuestaB" => "Thomas Hobbes",
                    "respuestaCorrecta" => "Pablo Picasso",
                    "opcion" => "C",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿Con qué nombre firmaba Vincent Van Gogh sus pinturas?",
                    "categoria" => "arte",
                    "respuestaA" => "Gogh",
                    "respuestaB" => "Van",
                    "respuestaCorrecta" => "Vincent",
                    "opcion" => "C",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿A quién se le atribuye la creación de la bandera Argentina?",
                    "categoria" => "historia",
                    "respuestaA" => "Bernardino Rivadavia",
                    "respuestaB" => "Manuel Belgrano",
                    "respuestaCorrecta" => "José de San Martín",
                    "opcion" => "B",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿Donde nació José de San Martín?",
                    "categoria" => "historia",
                    "respuestaA" => "Yapeyú",
                    "respuestaB" => "Rosario",
                    "respuestaCorrecta" => "Buenos Aires",
                    "opcion" => "A",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿Cuando se inauguró la Catedral de Notre Dame?",
                    "categoria" => "historia",
                    "respuestaA" => "1401",
                    "respuestaB" => "1265",
                    "respuestaCorrecta" => "1345",
                    "opcion" => "C",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿Cuántos mundiales ganó Brasil?",
                    "categoria" => "deporte",
                    "respuestaA" => "5",
                    "respuestaB" => "2",
                    "respuestaCorrecta" => "3",
                    "opcion" => "A",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿Cuántas Champions League ha ganado el Real Madrid?",
                    "categoria" => "deporte",
                    "respuestaA" => "9",
                    "respuestaB" => "13",
                    "respuestaCorrecta" => "7",
                    "opcion" => "B",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿Cuántos balones de Oro tiene Lionel Messi?",
                    "categoria" => "deporte",
                    "respuestaA" => "Uno",
                    "respuestaB" => "Cuatro",
                    "respuestaCorrecta" => "Seis",
                    "opcion" => "C",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿En qué año se creó JavaScript?",
                    "categoria" => "programacion",
                    "respuestaA" => "1984",
                    "respuestaB" => "1991",
                    "respuestaCorrecta" => "1995",
                    "opcion" => "C",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿Cuándo se lanzó Laravel?",
                    "categoria" => "programacion",
                    "respuestaA" => "2005",
                    "respuestaB" => "2011",
                    "respuestaCorrecta" => "2009",
                    "opcion" => "B",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿Quién creó PHP?",
                    "categoria" => "programacion",
                    "respuestaA" => "Rasmus Lerdorf",
                    "respuestaB" => "Bill Gates",
                    "respuestaCorrecta" => "Gabe Newell",
                    "opcion" => "A",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿Que es React?",
                    "categoria" => "programacion",
                    "respuestaA" => "Una biblioteca  de Javascript",
                    "respuestaB" => "Un framework de PHP",
                    "respuestaCorrecta" => "Un lenguaje de programación",
                    "opcion" => "C",
                    "valor" => "5",
                ],
                [
                    "pregunta" => "¿Cuando se lanzó MySQL?",
                    "categoria" => "programacion",
                    "respuestaA" => "2001",
                    "respuestaB" => "1995",
                    "respuestaCorrecta" => "1990",
                    "opcion" => "B",
                    "valor" => "5",
                ],
            ]
        );
    }
}
