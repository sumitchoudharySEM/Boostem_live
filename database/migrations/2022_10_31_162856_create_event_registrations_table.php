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
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('contact')->default();
            $table->integer('watsapp')->default();
            $table->integer('status')->default(1);
            $table->string('college')->nullable();
            $table->integer('year')->nullable();
            $table->string('branch')->nullable();
            $table->string('enrollment_no')->nullable();
            $table->string('interest')->nullable();
            $table->string('why_join')->nullable();
            $table->boolean('current_startup')->nullable();
            $table->string('pre_idea')->nullable();
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
        Schema::dropIfExists('event_registrations');
    }
};
