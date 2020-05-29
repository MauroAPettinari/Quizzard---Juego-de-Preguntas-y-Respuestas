<?php

use Illuminate\Database\Seeder;

class SeederCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categorias')->insert(
            [
                [
                    "nombre" => "entretenimiento",
                    "foto" => "entretenimiento.jpg"
                ],
                [
                    "nombre" => "arte",
                    "foto" => "arte.jpg"
                ],
                [
                    "nombre" => "historia",
                    "foto" => "historia.jpg"
                ],
                [
                    "nombre" => "deporte",
                    "foto" => "deporte.jpg"
                ]
            ]
        );
    }
}
