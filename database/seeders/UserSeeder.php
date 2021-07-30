<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\Negocio;
use App\Models\Region;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       // $region = Region::all()->random()->id;

        /*$division = $region->divisions()->first()->id;
        $negocio = $division->negocios()->first()->id;*/

      /*  $divisiones= Division::all();
        
        foreach ($divisiones as $division){
            $division = $division->region()->first()->id;
        }

        $negocios= Negocio::all();
        
        foreach ($negocios as $negocio){
            $negocio = $negocio->division()->first()->id;
        }
*/
        /*$regioni = Region::all()->random()->id;
        $divisioni = $regioni->divisions->random()->id;
        $negocioi = $divisioni->negocios->random()->id;*/

      


        User::create([
            'name'=>'Jesmary',
            'apellido' => 'Carneiro',
            'indicador' => 'carneirojd',
            'email'=>'jesmary885@gmail.com',
            'cedula' => '18678549',
            'telefono' => '04141929280',
            'region_id' => '1',
            'division_id' => '2',
            'negocio_id' => '1',
            'password'=>bcrypt('123456789'),

        ])->assignRole('Admin');



        User::create([
            'name'=>'Jillmery',
            'apellido'=>'Carneiro',
            'indicador' => 'carneiroji',
            'email'=>'jillmery885@gmail.com',
            'cedula' => '18111333',
            'telefono' => '04145589632',
            'region_id' => '2',
            'division_id' => '1',
            'negocio_id' => '2',
            'password'=>bcrypt('123456789')

        ])->assignRole('Analista');
    }
}
