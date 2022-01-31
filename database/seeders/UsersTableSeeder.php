<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@devtest.com";
        $user->password = bcrypt('secret');
        $user->phone = '70000000000';
        $user->status = true;
        $user->role = 1;
        $user->is_admin = true;
        $user->save();
    }
}
