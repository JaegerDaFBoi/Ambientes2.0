<?php

namespace Database\Seeders;

use App\Models\Environment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $environments = [
            [
            "nombre" => "CONTROL ELECTRICO",
            "tipo" => "Presencial",
            "aforo" => 20
            ]
        ];

        foreach ($environments as $environment) {
            Environment::create([
                'nombre' => $environment['nombre'],
                'tipo' => $environment['tipo'],
                'aforo' => $environment['aforo']
            ]);
        }
    }
}
