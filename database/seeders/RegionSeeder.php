<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\Negocio;
use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Region::factory(8)->create()->each(function(Region $region){
            Division::factory(8)->create([
                'region_id' => $region->id
            ])->each(function(Division $division){
                Negocio::factory(8)->create([
                    'division_id' => $division->id
                ]);
            });
        });*/

        $regions = ['FAJA PETROLIFERA', 'ORIENTE', 'OCCIDENTE'];

        foreach ($regions as $region) {
            Region::create([
                'name' => $region
            ]);
        }


    }
}
