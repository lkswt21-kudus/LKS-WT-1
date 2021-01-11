<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->name = 'admin';
        $admin->email = 'admin@email.com';
        $admin->password = \Hash::make('123456');
        $admin->role = 1;
        $admin->save();
    }
}
