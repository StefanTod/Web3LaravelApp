<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_vip = Role::where('name', 'Vip')->first();
        $role_moderator = Role::where('name', 'Mod')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role_user);

        $vip = new User();
        $vip->name = 'Vip';
        $vip->email = 'vip@example.com';
        $vip->password = bcrypt('vip');
        $vip->save();
        $vip->roles()->attach($role_vip);

        $mod = new User();
        $mod->name = 'Mod';
        $mod->email = 'mod@example.com';
        $mod->password = bcrypt('mod');
        $mod->save();
        $mod->roles()->attach($role_moderator);

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'Admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
