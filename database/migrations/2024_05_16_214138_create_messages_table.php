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
        Schema::create('messages', function (Blueprint $table) {
            $table->id('id_message');
            $table->string('contenu du message');
            $table->timestamps();

            $table->unsignedBigInteger('id_conversation')->nullable();
            $table->foreign('id_conversation')->references('id_conversation')->on('conversations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
};
