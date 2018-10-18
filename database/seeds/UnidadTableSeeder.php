<?php

use Illuminate\Database\Seeder;
use App\UnidadEducativa;

class UnidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnidadEducativa::create([
            'nombre' => 'Rouma High School',
            'distrito' => 'Munaypata',
            'direccion' => 'Zona Villa Victoria Calle Virrey Toledo #1234',
            'capacidad' => 1000
        ]);
        UnidadEducativa::create([
            'nombre' => 'Fray Bernardino de Cardenas',
            'distrito' => 'Murillo',
            'direccion' => 'Zona Perez Calle Murillo #4567',
            'capacidad' => 2000
        ]);
        UnidadEducativa::create([
            'nombre' => 'Beata Placida',
            'distrito' => 'Ayacucho',
            'direccion' => 'Zona 6 de Agosto Calle Rosendo Gutierrez',
            'capacidad' => 3000
        ]);
    }
}
