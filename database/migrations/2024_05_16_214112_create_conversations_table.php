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
        Schema::create('conversations', function (Blueprint $table) {
            $table->id('id_conversation');
            $table->timestamps();

            $table->unsignedBigInteger('id_reclamation')->nullable();
            $table->foreign('id_reclamation')->references('id_reclamation')->on('reclamations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

};
