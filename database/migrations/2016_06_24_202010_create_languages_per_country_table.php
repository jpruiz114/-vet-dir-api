<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateLanguagesPerCountryTable
 */
class CreateLanguagesPerCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'languages_per_country',
            function (Blueprint $table) {
                $table->increments('entity_id');
                $table->string('country_code', 2);
                $table->string('lang', 50);
            }
        );

        DB::table('languages_per_country')->insert(
            array('country_code' => 'US', 'lang' => 'en-US')
        );

        DB::table('languages_per_country')->insert(
            array('country_code' => 'CO', 'lang' => 'es-CO')
        );

        DB::table('languages_per_country')->insert(
            array('country_code' => 'CA', 'lang' => 'en-CA')
        );

        DB::table('languages_per_country')->insert(
            array('country_code' => 'FR', 'lang' => 'fr-FR')
        );

        DB::table('languages_per_country')->insert(
            array('country_code' => 'ES', 'lang' => 'es-ES')
        );

        DB::table('languages_per_country')->insert(
            array('country_code' => 'GB', 'lang' => 'en-GB')
        );

        DB::table('languages_per_country')->insert(
            array('country_code' => 'DE', 'lang' => 'de-DE')
        );

        DB::table('languages_per_country')->insert(
            array('country_code' => 'BR', 'lang' => 'pt-BR')
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('languages_per_country');
    }
}
