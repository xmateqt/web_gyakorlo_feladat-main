<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealEstateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        DB::statement("insert into real_estate_types (name, description, created_at) values ('House', 'Családi ház', CURRENT_TIMESTAMP );");
        DB::statement("insert into real_estate_types (name, description, created_at) values ('Semi-Detached House', 'Ikerház', CURRENT_TIMESTAMP );");
        DB::statement("insert into real_estate_types (name, description, created_at) values ('Terraced House', 'Sorház', CURRENT_TIMESTAMP );");
        DB::statement("insert into real_estate_types (name, description, created_at) values ('Flat', 'Lakás', CURRENT_TIMESTAMP );");
        DB::statement("insert into real_estate_types (name, description, created_at) values ('Penthouse', 'Penthouse', CURRENT_TIMESTAMP );");
        DB::statement("insert into real_estate_types (name, description, created_at) values ('Garage', 'Garázs', CURRENT_TIMESTAMP );");


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_estate_types');
    }
}
