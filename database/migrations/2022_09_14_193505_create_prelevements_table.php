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
        Schema::create('prelevements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mobile_id');
            $table->integer('kilometre')->default(0);
            $table->date('dateprelevement');
            $table->foreign('mobile_id')->references('id')->on('mobiles')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('prelevements');
    }
};
