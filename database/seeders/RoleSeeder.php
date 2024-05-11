<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newRole = new Role();
        $newRole->id = 1;
        $newRole->name = 'Administrator';
        $newRole->code = 'Admin';
        $newRole->save();
        $this->command->info('Role Administrator Success Insert');

        $newRole = new Role();
        $newRole->id = 2;
        $newRole->name = 'Pengelola Website';
        $newRole->code = 'pengelola';
        $newRole->save();
        $this->command->info('Role Pengelola Website Success Insert');
    }
}
