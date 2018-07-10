<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Admin';
        $role->description = 'This is admin role which is the biggest role.';
        $role->save();

        $role = new Role();
        $role->name = 'Normal_User';
        $role->description = 'This is normal role can access specific page.';
        $role->save();
    }
}
