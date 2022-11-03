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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->json('tags')->nullable();
            $table->string('type')->default('e');
            $table->string('created_by_id');
            $table->string('location')->nullable();
            $table->json('attachments')->nullable();
            $table->string('title');
            $table->string('short_description');
            $table->timestamp('registration_start')->nullable();
            $table->timestamp('registration_end')->nullable();
            $table->longText('about')->nullable();
            $table->string('event_banner_path', 2048)->nullable();
            $table->json('timeline_data')->nullable();
            $table->json('certificates')->nullable();
            $table->json('additional_input_field')->nullable();
            $table->string('status')->nullable();
            $table->boolean('active')->nullable();
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
        Schema::dropIfExists('event');
    }
};
