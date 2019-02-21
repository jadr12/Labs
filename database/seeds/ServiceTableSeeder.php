<?php

use Illuminate\Database\Seeder;
use App\Services;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Services::create([

            'iconeservice' => 'flaticon-023-flask',
            'textservice' => 'Service',
            'descriptionservice' =>'Salut',
            
        ]);
        Services::create([

            'iconeservice' => 'flaticon-023-flask',
            'textservice' => 'Service',
            'descriptionservice' =>'Salut',
            
        ]);
        Services::create([

            'iconeservice' => 'flaticon-023-flask',
            'textservice' => 'Service',
            'descriptionservice' =>'Salut',
            
        ]);

    }
}
