<?php

use Illuminate\Database\Seeder;
use App\Maestro;

class MaestroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maestro::create([
            'ci' => 9175229,
            'nombre' => 'Felix Antonio Mamani Quispe',
            'materia' => 'Computacion y Tecnologia',
            'unidad_educativa_id' => 1,
            'experiencia' => 10
        ]);
        Maestro::create([
            'ci' => 9175443,
            'nombre' => 'Francisco Arriaran',
            'materia' => 'Ciencias Naturales',
            'unidad_educativa_id' => 2,
            'experiencia' => 10
        ]);
        Maestro::create([
            'ci' => 2433341,
            'nombre' => 'Leonora Genobeba Rios',
            'materia' => 'Matematicas',
            'unidad_educativa_id' => 3,
            'experiencia' => 10
        ]);
        Maestro::create([
            'ci' => 5433345,
            'nombre' => 'David Arroyo',
            'materia' => 'Quimica',
            'unidad_educativa_id' => 3,
            'experiencia' => 10
        ]);
        Maestro::create([
            'ci' => 2439342,
            'nombre' => 'Elisa Bustamante',
            'materia' => 'Fisica',
            'unidad_educativa_id' => 3,
            'experiencia' => 10
        ]);

    }
}
