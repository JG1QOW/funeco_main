<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('term_id');
            $table->string('taxonomy');
            $table->string('name');
            $table->string('slug');
            $table->integer('term_group');
            $table->integer('term_order');
            $table->unsignedBigInteger('term_taxonomy_id');
            $table->text('description');
            $table->unsignedBigInteger('parent');
            $table->unsignedBigInteger('count');
            $table->string('url');
            $table->string('address');
            $table->string('map');
            $table->unsignedBigInteger('area');
            $table->string('english-name');
            $table->string('urltitle');
            $table->string('longitude');
            $table->string('latitude');
            $table->date('launched');
            $table->date('start-date');
            $table->string('military-number');
            $table->string('callsign');
            $table->string('urltitle');
            $table->string('class');
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
        Schema::dropIfExists('ships');
    }
}