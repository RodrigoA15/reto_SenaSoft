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
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'usuario']);

        Permission::create(['name' => 'mascotas.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'mascotas.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'mascotas.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'mascotas.delete'])->syncRoles([$role1]);



        
    }
}
