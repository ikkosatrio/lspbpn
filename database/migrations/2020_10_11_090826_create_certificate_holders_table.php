<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificateHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_holders', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->date('expired_date')->nullable();
            $table->text('no_registrasi')->nullable();
            $table->text('no_sertifikat')->nullable();
            
            $table->integer('province_id')->unsigned()->default('0');
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
        Schema::dropIfExists('certificate_holders');
    }
}
