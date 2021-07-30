<?php

namespace Database\Seeders;

use App\Models\Negocio;
use Illuminate\Database\Seeder;

class NegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $negocios = [
            [
                'name' => 'SAN TOME',
                'division_id' => '2',
            ],
            [
                'name' => 'INDOVENEZOLANA',
                'division_id' => '1',
            ],
            [
                'name' => 'PETROBOSCAN',
                'division_id' => '3',
            ],
            [
                'name' => 'PETROZUMANO',
                'division_id' => '1',
            ],
        ];

        foreach ($negocios as $negocio){
            Negocio::create($negocio);
        }
    }
}
