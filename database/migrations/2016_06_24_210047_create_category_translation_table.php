<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCategoryTranslationTable
 */
class CreateCategoryTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'category_translation',
            function (Blueprint $table) {
                $table->increments('entity_id');
                $table->integer('category_id', false, true);
                $table->string('name', 200);
                $table->string('plural_name', 200);
                $table->string('short_name', 200);
                $table->string('lang', 50);
            }
        );

        $this->insertCategory1();

        $this->insertCategory2();

        $this->insertCategory3();
    }

    /**
     *
     */
    private function insertCategory1()
    {
        DB::table('category_translation')->insert(
            array(
                'category_id' => '1',
                'name' => 'Pet Service',
                'plural_name' => 'Pet Services',
                'short_name' => 'Pet Service',
                'lang' => 'en-US'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '1',
                'name' => 'Servicio para mascotas',
                'plural_name' => 'Servicios para mascotas',
                'short_name' => 'Servicio para mascotas',
                'lang' => 'es-CO'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '1',
                'name' => 'Pet Service',
                'plural_name' => 'Pet Services',
                'short_name' => 'Pet Service',
                'lang' => 'en-CA'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '1',
                'name' => 'Service pour animaux de compagnie',
                'plural_name' => 'Services pour animaux de compagnie',
                'short_name' => 'Service pour animaux de compagnie',
                'lang' => 'fr-FR'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '1',
                'name' => 'Servicio para mascotas',
                'plural_name' => 'Servicios para mascotas',
                'short_name' => 'Servicio para mascotas',
                'lang' => 'es-ES'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '1',
                'name' => 'Pet Service',
                'plural_name' => 'Pet Services',
                'short_name' => 'Pet Service',
                'lang' => 'en-GB'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '1',
                'name' => 'Haustierservice',
                'plural_name' => 'Haustierservices',
                'short_name' => 'Haustierservice',
                'lang' => 'de-DE'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '1',
                'name' => 'Loja de Animais de Estimação',
                'plural_name' => 'Lojas de Animais de Estimação',
                'short_name' => 'Loja de Animais de Estimação',
                'lang' => 'pt-BR'
            )
        );
    }

    /**
     *
     */
    private function insertCategory2()
    {
        DB::table('category_translation')->insert(
            array(
                'category_id' => '2',
                'name' => 'Pet Store',
                'plural_name' => 'Pet Stores',
                'short_name' => 'Pet Store',
                'lang' => 'en-US'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '2',
                'name' => 'Tienda de mascotas',
                'plural_name' => 'Tiendas de mascotas',
                'short_name' => 'Tienda de mascotas',
                'lang' => 'es-CO'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '2',
                'name' => 'Pet Store',
                'plural_name' => 'Pet Stores',
                'short_name' => 'Pet Store',
                'lang' => 'en-CA'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '2',
                'name' => 'Animalerie',
                'plural_name' => 'Animaleries',
                'short_name' => 'Animalerie',
                'lang' => 'fr-FR'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '2',
                'name' => 'Tienda de mascotas',
                'plural_name' => 'Tiendas de mascotas',
                'short_name' => 'Tienda de mascotas',
                'lang' => 'es-ES'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '2',
                'name' => 'Pet Store',
                'plural_name' => 'Pet Stores',
                'short_name' => 'Pet Store',
                'lang' => 'en-GB'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '2',
                'name' => 'Tierhandlung',
                'plural_name' => 'Tierhandlungen',
                'short_name' => 'Tierhandlung',
                'lang' => 'de-DE'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '2',
                'name' => 'Pet Shop',
                'plural_name' => 'Pet Shops',
                'short_name' => 'Pet Shop',
                'lang' => 'pt-BR'
            )
        );
    }

    /**
     *
     */
    private function insertCategory3()
    {
        DB::table('category_translation')->insert(
            array(
                'category_id' => '3',
                'name' => 'Veterinarian',
                'plural_name' => 'Veterinarians',
                'short_name' => 'Veterinarians',
                'lang' => 'en-US'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '3',
                'name' => 'Veterinario',
                'plural_name' => 'Veterinarios',
                'short_name' => 'Veterinarios',
                'lang' => 'es-CO'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '3',
                'name' => 'Veterinarian',
                'plural_name' => 'Veterinarians',
                'short_name' => 'Veterinarians',
                'lang' => 'en-CA'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '3',
                'name' => 'Vétérinaire',
                'plural_name' => 'Vétérinaires',
                'short_name' => 'Vétérinaires',
                'lang' => 'fr-FR'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '3',
                'name' => 'Veterinario',
                'plural_name' => 'Veterinarios',
                'short_name' => 'Veterinarios',
                'lang' => 'es-ES'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '3',
                'name' => 'Veterinarian',
                'plural_name' => 'Veterinarians',
                'short_name' => 'Veterinarians',
                'lang' => 'en-GB'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '3',
                'name' => 'Tierarzt',
                'plural_name' => 'Tierärzte',
                'short_name' => 'Tierärzte',
                'lang' => 'de-DE'
            )
        );

        DB::table('category_translation')->insert(
            array(
                'category_id' => '3',
                'name' => 'Clínica Veterinária',
                'plural_name' => 'Clínicas Veterinárias',
                'short_name' => 'Clínicas Veterinárias',
                'lang' => 'pt-BR'
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
        Schema::drop('category_translation');
    }
}
