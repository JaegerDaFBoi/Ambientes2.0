<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instructores = [
            [
            "nombre" => "GERMAN ANDRES AGUIRRE VALENCIA",
            "cedula" => "75099753",
            "area" => "AREA DE SISTEMAS, MANTENIMIENTO DE EQUIPOS DE COMPUTO Y DISEÑO GRAFICO Y MULTIMEDIAL",
            "tipo" => "Presencial",
            "vinculacion" => "Planta",
            "horassemana" => 120,
            "email" => "german353@misena.edu.co"
            ]
        ];

        foreach ($instructores as $instructor)
        {
            Instructor::create([
                'nombre' => $instructor['nombre'],
                'cedula' => $instructor['cedula'],
                'area' => $instructor['area'],
                'tipo' => $instructor['tipo'],
                'vinculacion' => $instructor['vinculacion'],
                'horassemana' => $instructor['horassemana'],
                'email' => $instructor['email']
            ]);
        }
        
    }
}
