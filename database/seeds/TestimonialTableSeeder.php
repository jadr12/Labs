<?php

use Illuminate\Database\Seeder;
use App\Testimonial;

class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([

            'commentairetesti' => 'salut',
            'nomtesti' => 'Saida',
            'entreprise' => ' Eloya',
            'imagetesti' => 'MQaasAnpuJlXTb8BjOpaZRrA0NBkMmYNZ4H9VfhE.jpeg'
        ]);

    }
}
