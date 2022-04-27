<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fnb_id');
            $table->foreign('fnb_id')->references('id')->on('fnb');
            $table->string('menu_name');
            $table->text('menu_desc'); //Description Menu
            $table->integer('price'); //Product price
            $table->string('img_menu'); //image for product
            $table->string('img_profile'); //image for logo instantions and place
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
        Schema::dropIfExists('company');
    }
}
