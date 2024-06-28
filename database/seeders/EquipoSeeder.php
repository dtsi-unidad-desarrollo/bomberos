<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipos = [
            [
                'nombre' => 'EQUIPO 1'
            ],
            [
                'nombre' => 'EQUIPO 2'
            ],
            [
                'nombre' => 'EQUIPO 3'
            ],
            [
                'nombre' => 'EQUIPO 4'
            ],
            [
                'nombre' => 'EQUIPO 5'
            ],
            [
                'nombre' => 'EQUIPO 6'
            ]
            
        ];
    
        foreach ($equipos as $key => $equipo) {
            Equipo::create($equipo);
        }
    }
}
