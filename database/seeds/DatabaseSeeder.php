<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SiteContentTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(CarouselTableSeeder::class);
        $this->call(ProfilTableSeeder::class);
        $this->call(TestimonialTableSeeder::class);

    }
}
