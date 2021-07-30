<?php

namespace Database\Seeders;

use App\Models\Objestrategico;
use Illuminate\Database\Seeder;

class ObjEstrategicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objestrategicos = ['1.  Contribuir a la mejora de la Confiabilidad y Disponibilidad Operacional de los activos de Exploración y Producción', 
                            '2. Aplicar estrategias necesarias para mejorar la mantenibilidad de los activos en su ciclo de vida.', 
                            '3. Fortalecer la cultura de Confiabilidad Operacional en EyP.',
                            '4.  Apoyar Estrategias de orden corporativo relacionadas con Mantenimiento, Calidad, Seguridad Industrial y el Ambiente en las instalaciones de E&P.',
                            '5. Actividades No inherentes al Plan Estratégico.'];

        foreach ($objestrategicos as $objestrategico) {
            Objestrategico::create([
                'description' => $objestrategico
            ]);
        }
    }
}
