<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationGardensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_gardens', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('land_area');
            $table->integer('hectares');
            $table->integer('age');
            $table->longText('spraying_record');
            $table->longText('fertilization_record');
            $table->integer('distance');
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
        Schema::dropIfExists('information_gardens');
    }
}
