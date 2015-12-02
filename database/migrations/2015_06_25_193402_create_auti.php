<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Naziv');
            $table->string('Tip');
            $table->string('JM');
            $table->float('Potrosnja');
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
        Schema::drop('autis');
    }
}
