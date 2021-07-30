<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(DivisionSeeder::class);
        $this->call(NegocioSeeder::class);
       $this->call(UserSeeder::class);
        $this->call(ObjestrategicoSeeder::class);
        $this->call(ObjtacticoSeeder::class);
        $this->call(ObjoperacionalSeeder::class);
   
    }
}
