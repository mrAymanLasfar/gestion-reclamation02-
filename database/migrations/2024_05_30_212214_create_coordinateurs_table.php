<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinateurs', function (Blueprint $table) {
            $table->id('id_coordinateur');
            $table->string('nom_coordinateur');
            $table->string('email_coordinateur');
            $table->string('password_coordinateur');
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
        Schema::dropIfExists('coordinateurs');
    }
};
