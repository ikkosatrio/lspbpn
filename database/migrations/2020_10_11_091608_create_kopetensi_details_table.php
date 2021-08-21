<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKopetensiDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kopetensi_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sort')->nullable();

            $table->text('title')->nullable();
            $table->text('content')->nullable();

            $table->integer('kopetensi_id')->unsigned()->default('0');

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
        Schema::dropIfExists('kopetensi_details');
    }
}
