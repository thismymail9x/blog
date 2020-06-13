<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = 'a@gmail.com';
        $user->image = 'default.jpn';
        $user->password = '1';
        $user->role = 1;
        $user->save();
    }
}
