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
         'imagecarousel' =>"http://lorempixel.com/g/400/200/"   
        ]);
        
    }
}
