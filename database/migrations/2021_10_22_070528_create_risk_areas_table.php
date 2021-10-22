<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiskAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risk_areas', function (Blueprint $table) {
            $table->id();
            $table->string('left');
            $table->string('right');
            $table->string('front');
            $table->string('behind');
            // 0 = bensin 1 = solar
            $table->integer('fuel');
            $table->string('customers_id');
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
        Schema::dropIfExists('risk_areas');
    }
}
