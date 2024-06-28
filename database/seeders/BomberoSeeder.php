<?php

namespace Database\Seeders;

use App\Models\Bombero;
use Illuminate\Database\Seeder;

class BomberoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bomberos = [
            [
                'nombre' => 'JUAN QUINTANA',
                'cedula' => '20536897', 
                'telefono' => '04143534587',
                'correo' => 'TEST@TEST.COM',
                'direccion' => 'BARINAS',
                'cargo' => 'CAPITAN',
                'rol' => 'DIRIGENTE DE LA BRIGADA 2',
            ],
            [
                'nombre' => 'KAREN QUINTANA',
                'cedula' => '20536810', 
                'telefono' => '04143534587',
                'correo' => 'TEST@TEST.COM',
                'direccion' => 'BARINAS',
                'cargo' => 'CAPITAN',
                'rol' => 'DIRIGENTE DE LA BRIGADA 3',
            ],
            [
                'nombre' => 'JUANA DE ARCO',
                'cedula' => '20536811', 
                'telefono' => '04143534587',
                'correo' => 'TEST@TEST.COM',
                'direccion' => 'BARINAS',
                'cargo' => 'CAPITAN',
                'rol' => 'DIRIGENTE DE LA BRIGADA 2',
            ],
            [
                'nombre' => 'ISAAC JIMENEZ',
                'cedula' => '20536812', 
                'telefono' => '04143534587',
                'correo' => 'TEST@TEST.COM',
                'direccion' => 'BARINAS',
                'cargo' => 'GENERAL',
                'rol' => 'GENERAL',
            ],
            [
                'nombre' => 'JUAN VELAZQUE',
                'cedula' => '20536813', 
                'telefono' => '04143534587',
                'correo' => 'TEST@TEST.COM',
                'direccion' => 'BARINAS',
                'cargo' => 'CORONEL',
                'rol' => 'CORONEL',
            ],
            [
                'nombre' => 'CARLOS FARFAN',
                'cedula' => '20536814', 
                'telefono' => '04143534587',
                'correo' => 'TEST@TEST.COM',
                'direccion' => 'BARINAS',
                'cargo' => 'CADETE',
                'rol' => 'CADETE',
            ],
            [
                'nombre' => 'PEDRO QUINTANA',
                'cedula' => '20536815', 
                'telefono' => '04143534587',
                'correo' => 'TEST@TEST.COM',
                'direccion' => 'BARINAS',
                'cargo' => 'CADETE',
                'rol' => 'CADETE',
            ]
        ];
    
        foreach ($bomberos as $key => $bombero) {
            Bombero::create($bombero);
        }
    }
}
