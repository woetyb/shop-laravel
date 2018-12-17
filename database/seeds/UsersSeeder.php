<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Model\Role::where('name', 'Administrator')->first();

        $user = \App\User::create([
            'name' => 'Administrator',
            'email' => 'congquyet@gmail.com',
            'password' => bcrypt('123456')
        ]);

//        $user->roles()->attach($admin);
    }
}
