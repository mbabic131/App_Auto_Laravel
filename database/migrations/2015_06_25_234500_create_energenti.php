<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnergenti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energentis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Pogon');
            $table->string('JM');
            $table->float('Cijena');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('energentis');
    }
}
