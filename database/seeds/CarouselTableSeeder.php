<?php

use Illuminate\Database\Seeder;
use App\Carousel;

class CarouselTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carousel::create([

            'imagecarousel' => "SjE0zl60yWsrwyIdmW0VpPVORyt2IkQrvNwbVruz.jpeg",
        ]);
    }
}
