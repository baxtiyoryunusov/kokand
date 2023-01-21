<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePersmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create(['guard_name' => 'admin', 'name' => 'Standart-User']);
      //  Role::create(['guard_name' => 'admin', 'name' => 'Super-Admin']);

    }
}
