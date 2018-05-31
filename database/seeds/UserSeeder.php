<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::where('name','Admin')->get();
        $normal_role = Role::where('name','Normal_User')->get();
        $user = User::find(1);
        $user->roles()->attach($admin_role);
        $user->save();

        $user = new User();
        $user->name = 'Ngoc Thanh';
        $user->email = 'thanh@gmail.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($normal_role);


        $user = new User();
        $user->name = 'Ngoc Bi';
        $user->email = 'bi@gmail.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($normal_role);

        $user = new User();
        $user->name = 'Tran Lap';
        $user->email = 'lap@gmail.com';
        $user->password = Hash::make('secret');
        $user->save();
        $user->roles()->attach($normal_role);
    }
}
