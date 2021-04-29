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
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // this can be done as separate statements
        $role = Role::create(['name' => 'owner']);

        $role = Role::create(['name' => 'iod']);

        $role = Role::create(['name' => 'admin']);

        $role = Role::create(['name' => 'user']);

    }
}
