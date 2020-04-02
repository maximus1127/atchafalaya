<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_homes', function (Blueprint $table) {
            $table->id();
            $table->boolean('featured')->default(0);
            $table->boolean('show_on_home')->default(0);
            $table->bigInteger('type_id')->unsigned();
            $table->string('bedrooms')->nullable();
            $table->string('main_image')->nullable();
            $table->string('virtual_tour')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('square_feet')->nullable();
            $table->string('starting_price')->nullable();
            $table->string('contact')->nullable();
            $table->text('description')->nullable();
            $table->longText('details')->nullable();
            $table->longText('features')->nullable();
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
        Schema::dropIfExists('mobile_homes');
    }
}
