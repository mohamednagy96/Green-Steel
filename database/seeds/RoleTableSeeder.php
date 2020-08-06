<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = config('roles.roles');

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role , 'guard_name' => 'admin']);
        }
    }
}
