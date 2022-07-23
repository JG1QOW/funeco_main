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
        Schema::create('ships', function (Blueprint $table) {
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
            $table->unsignedBigInteger('nationality');
            $table->string('mmsi');
            $table->string('imo');
            $table->string('url');
            $table->unsignedBigInteger('company');
            $table->unsignedBigInteger('manufactor');
            $table->string('english-name');
            $table->string('active');
            $table->date('launched');
            $table->date('start-date');
            $table->string('military-number');
            $table->string('callsign');
            $table->string('urltitle');
            $table->string('class');
            $table->unsignedBigInteger('history')->nullable(true);
            $table->unsignedBigInteger('ship_type');
            $table->integer('history_poa')->nullable(true);
            $table->text('memo')->nullable(true);
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
