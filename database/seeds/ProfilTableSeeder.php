<?php

use Illuminate\Database\Seeder;
use App\Profil;

class ProfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profil::create([
            'nom' => 'Riahi',
            'prenom' => 'Jad',
            'image' => 'KfE5V3AWvE3Z2CIpcSF6LCe1V6g5yXmfso1O2GlM.jpeg',
            'user_id' => '1',

        ]);
        Profil::create([
            'nom' => 'Riahi',
            'prenom' => 'You',
            'image' => 'KfE5V3AWvE3Z2CIpcSF6LCe1V6g5yXmfso1O2GlM.jpeg',
            'user_id' => '2',

        ]);
        Profil::create([
            'nom' => 'Riahi',
            'prenom' => 'SAb',
            'image' => 'KfE5V3AWvE3Z2CIpcSF6LCe1V6g5yXmfso1O2GlM.jpeg',
            'user_id' => '3',

        ]);

    }
}
