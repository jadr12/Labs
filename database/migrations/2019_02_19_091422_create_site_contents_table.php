<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titrecarousel');
            $table->string('titrevideo');
            $table->string('textupvideo',400);
            $table->string('textupvideo2',400);
            $table->string('lienvideo')->nullable();
            $table->string('titretestimonial')->nullable();
            $table->string('titreservice');
            $table->string('titreteam');
            $table->string('titrepromotion');
            $table->string('stpromotion');
            $table->string('titrecontact');
            $table->string('stcontact');
            $table->string('titreadresse');
            $table->string('stadresse');
            $table->string('stville');
            $table->string('stnumero');
            $table->string('stemail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_contents');
    }
}
