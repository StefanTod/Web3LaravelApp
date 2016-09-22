<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new \App\Role();
        $role_user->name = 'User';
        $role_user->description = 'A normal User';
        $role_user->save();

        $role_vip = new \App\Role();
        $role_vip->name = 'Vip';
        $role_vip->description = 'Premium User';
        $role_vip->save();

        $role_moderator = new \App\Role();
        $role_moderator->name = 'Mod';
        $role_moderator->description = 'Moderator';
        $role_moderator->save();

        $role_admin = new \App\Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'Administrator';
        $role_admin->save();

    }
}
