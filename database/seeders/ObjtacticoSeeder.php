<?php

namespace Database\Seeders;

use App\Models\Objtactico;
use Illuminate\Database\Seeder;

class ObjtacticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objtacticos = [
            [
                'description' => '1.1 Identificar la condicion de los activos mediante metodologías de diagnostico y análisis de Confiabilidad, disponibles.',
                'objestrategico_id' => '1',
            ],
            [
                'description' => '1.2 Estimar Escenarios de Desempeño de los Activos durante el ciclo de vida.',
                'objestrategico_id' => '1',
            ],
            [
                'description' => '2.1 Optimizar los Planes de Mantenimiento existentes de los activos de E&P.',
                'objestrategico_id' => '2',
            ],
            [
                'description' => '2.2 Formular Planes de Mantenimiento Preventivo a los activos.',
                'objestrategico_id' => '2',
            ],
            [
                'description' => '3.1 Impulsar el uso adecuado de los sistemas de información Corporativos (Pdvsa).',
                'objestrategico_id' => '3',
            ],
            [
                'description' => '3.2 Definir estrategias de divulgación que destaquen la importancia de la Confiabilidad Operacional en los procesos productivos.',
                'objestrategico_id' => '3',
            ],
            [
                'description' => '3.3 Definir estrategias de Formación externa en materia de confiabilidad dirigidos a las gerencias operativas.',
                'objestrategico_id' => '3',
            ],
            [
                'description' => '4.1 Contribuir al Impulso de Proyectos para el mejor funcionamiento de E&P.',
                'objestrategico_id' => '4',
            ],
            [
                'description' => '4.2 Promover estrategias de correlación y elaboración de estudios conjuntos con las Gerencias de SIHO y Ambiente. ',
                'objestrategico_id' => '4',
            ],
            [
                'description' => '5.1 Actividades No inherentes al Plan Estratégico',
                'objestrategico_id' => '5',
            ],
        ];

        foreach ($objtacticos as $objtactico) {
            Objtactico::create($objtactico);
        }
    }
}
