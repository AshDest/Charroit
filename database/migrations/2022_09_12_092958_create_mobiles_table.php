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
        Schema::create('mobiles', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation')->unique();
            $table->string('num_chassis');
            $table->string('marque');
            $table->string('couleur');
            $table->string('anneefabrication')->nullable();
            $table->integer('kilometrage');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('section_id');
            $table->foreign('type_id')->references('id')->on('type__mobiles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('section_id')->references('id')->on('section')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('mobiles');
    }
};
