<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
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

        // membuat role
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Administrator";
        $adminRole->save();

        $kasirRole = new Role();
        $kasirRole->name = "kasir";
        $kasirRole->display_name = "Kasir";
        $kasirRole->save();

// membuat sample user
        $admin = new User();
        $admin->name = 'Admin pkl';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('adminresto');
        $admin->save();
        $admin->attachRole($adminRole);

// membuat sample user
        $kasir = new User();
        $kasir->name = 'kasir users';
        $kasir->email = 'kasir@gmail.com';
        $kasir->password = bcrypt('kasirresto');
        $kasir->save();
        $kasir->attachRole($kasirRole);

    }
}
