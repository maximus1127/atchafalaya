<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteWidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_wides', function (Blueprint $table) {
            $table->id();
            $table->string('phone_1_name')->nullable();
            $table->string('phone_1_number')->nullable();
            $table->string('phone_2_name')->nullable();
            $table->string('phone_2_number')->nullable();
            $table->string('phone_3_name')->nullable();
            $table->string('phone_3_number')->nullable();
            $table->string('phone_4_name')->nullable();
            $table->string('phone_4_number')->nullable();
            $table->string('phone_5_name')->nullable();
            $table->string('phone_5_number')->nullable();
            $table->string('general_manager')->nullable();
            $table->string('general_manager_email')->nullable();
            $table->text('hours')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
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
        Schema::dropIfExists('site_wides');
    }
}
