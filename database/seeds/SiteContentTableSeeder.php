<?php

use Illuminate\Database\Seeder;
use App\SiteContent;

class SiteContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContent::create([
            'titrecarousel' => 'Get your freebie template now!',
            'titrevideo' => 'GET IN THE LAB AND DISCOVER THE WORLD',
            'textupvideo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.',
            'textupvideo2' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui,  vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed    ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices.     Quisque porttitor porttitorlaoreet vel risus et luctus.',
            'titreservice' => 'Get in the Lab and see the services',
            'titreteam' => 'Get in the Lab and  meet the team',
            'titretestimonial' =>'Salut les gens',
            'lienvideo' => 'https://www.youtube.com/watch?v=DuFVuh6mWWA',
            'titrepromotion' => 'Are you ready to stand out?',
            'stpromotion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
            'titrecontact' => 'Contact us',
            'stcontact' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'titreadresse' => 'Main Office',
            'stadresse' => 'C/ Libertad, 34',
            'stville' => '05200 Arévalo',
            'stnumero' => '0034 37483 2445 322',
            'stemail' => 'hello@company.com',
        ]);
    }
}
