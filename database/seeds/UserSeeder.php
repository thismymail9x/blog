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
        $user->name = 'admin1';
        $user->username = 'ab@gmail.com';
        $user->image = 'default.jpn';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->role = 1;
        $user->save();
    }
}
