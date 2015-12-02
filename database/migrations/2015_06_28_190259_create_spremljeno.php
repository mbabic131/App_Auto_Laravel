<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpremljeno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spremljenos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Automobil');
            $table->string('Pogon');
            $table->integer('Broj_kmh');
            $table->float('Ukupni_troskovi');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('spremljenos');
    }
}
