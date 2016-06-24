<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCategoryTable
 */
class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'category',
            function (Blueprint $table) {
                $table->increments('entity_id');
                $table->string('default_name', 200);
                $table->string('foursquare_id_equivalent', 50);
            }
        );

        DB::table('category')->insert(
            array(
                'entity_id' => 1,
                'default_name' => 'Servicio para mascotas',
                'foursquare_id_equivalent' => '5032897c91d4c4b30a586d69'
            )
        );

        DB::table('category')->insert(
            array(
                'entity_id' => 2,
                'default_name' => 'Tienda de mascotas',
                'foursquare_id_equivalent' => '4bf58dd8d48988d100951735'
            )
        );

        DB::table('category')->insert(
            array(
                'entity_id' => 3,
                'default_name' => 'Veterinario',
                'foursquare_id_equivalent' => '4d954af4a243a5684765b473'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category');
    }
}
