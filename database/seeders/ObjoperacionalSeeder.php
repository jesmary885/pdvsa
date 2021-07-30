<?php

namespace Database\Seeders;

use App\Models\Objoperacional;
use Illuminate\Database\Seeder;

class ObjoperacionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objoperacionals = [
            [
                'description' => '1.1.1  Analizar el "Contexto Operacional" de los activos ',
                'objtactico_id' => '1',
            ],
            [
                'description' => '1.2.1  Elaborar estudios de Confiabilidad / Disponibilidad / Mantenibilidad (Estudios de pronósticos - RAM) de los sistemas medulares',
                'objtactico_id' => '2',
            ],
            [
                'description' => '2.1.2 Ajustar los planes de mantenimiento los activos de acuerdo a su Contexto Operacional',
                'objtactico_id' => '3',
            ],
            [
                'description' => '2.2.2 Elaborar planes de mantenimiento basados en la metodología Inspección Basada en Riesgos (IBR)',
                'objtactico_id' => '4',
            ],
            [
                'description' => '3.1.1 SAP PM - Documentar el proceso de definición de taxonomía de los activos de acuerdo a la Norma MM-01-01-07',
                'objtactico_id' => '5',
            ],
            [
                'description' => '3.2.1 Utilizar medios visuales informativos en las distintas áreas operativas para mostrar información básica y logros de la gerencia confiabilidad operacional',
                'objtactico_id' => '6',
            ],
        ];

        foreach ($objoperacionals as $objoperacional) {
            Objoperacional::create($objoperacional);
        }
    }
}
