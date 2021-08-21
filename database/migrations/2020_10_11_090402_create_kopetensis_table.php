<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKopetensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kopetensis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('price')->nullable();
            $table->integer('price_discount')->nullable();

            $table->text('slug')->nullable();
            $table->text('code')->nullable();
            $table->text('short_content')->nullable();
            $table->text('content')->nullable();

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
        Schema::dropIfExists('kopetensis');
    }
}
