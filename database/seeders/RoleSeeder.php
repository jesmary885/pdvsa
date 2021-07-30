<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Analista']);

        Permission::create(['name' => 'asignacion.registro_asignacion'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.home'])->syncRoles([$role1]);
        Permission::create(['name' => 'avances.registro'])->syncRoles([$role2]);
/*
        Permission::create(['name' => 'admin.users.index',
                            'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.create',
                            'description' => 'Crear usuario'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Asignar rol a usuario'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.index',
                            'description' => 'Ver listado de categorias'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.categories.create',
                            'description' => 'Crear categoria'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit',
                            'description' => 'Editar categoria'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy',
                            'description' => 'Eliminar categoria'])->syncRoles([$role1]);*/

        
    }
}
