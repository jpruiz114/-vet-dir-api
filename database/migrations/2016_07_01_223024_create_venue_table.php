<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'venue',
            function (Blueprint $table) {
                $table->increments('entity_id');

                $table->string('foursquare_id', 50)->nullable();

                $table->string('name', 200);

                $table->string('contact_phone', 50)->nullable();
                $table->string('contact_formatted_phone', 50)->nullable();

                $table->string('location_address', 200)->nullable();
                $table->string('location_cross_street', 200)->nullable();

                $table->string('location_lat', 50);
                $table->string('location_lng', 50);
                $table->string('location_cc', 200);

                $table->string('location_city', 200)->nullable();
                $table->string('location_state', 200)->nullable();
                $table->string('location_country', 200)->nullable();
                $table->string('location_formatted_address', 200)->nullable();

                $table->string('foursquare_category', 50)->nullable();

                $table->integer('category_id', false, true);
                $table->integer('verified', false, true);

                $table->string('url', 200)->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('venue');
    }
}
