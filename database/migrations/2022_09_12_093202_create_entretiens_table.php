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
        Schema::create('entretiens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('garage_id');
            $table->unsignedBigInteger('mobile_id');
            $table->date('date_entretien');
            $table->text('entretien');
            $table->float('cout');
            $table->foreign('garage_id')->references('id')->on('garages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mobile_id')->references('id')->on('mobiles')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('entretiens');
    }
};
