<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email'=>'jad.riahi@live.fr',
            'password'=> bcrypt('coding5'),
            'remember_token' => str_random(10),
            'role_id' => 1,
        ]);
        User::create([
            'email'=>'jad.riah@live.fr',
            'password'=> bcrypt('coding5'),
            'remember_token' => str_random(10),
            'role_id' => 2,
        ]);
        User::create([
            'email'=>'jad.ria@live.fr',
            'password'=> bcrypt('coding5'),
            'remember_token' => str_random(10),
            'role_id' => 3,
        ]);
        
    }
}
