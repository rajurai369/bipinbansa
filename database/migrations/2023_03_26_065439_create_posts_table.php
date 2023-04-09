<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->timestamps();

            $timestamp = '2022-03-01 10:00:00';

            // Create a Carbon instance from the timestamp
            $carbon = Carbon::createFromFormat('Y-m-d H:i:s', $timestamp);

            // Convert the Carbon instance to the Nepali timezone
            $nepaliTime = $carbon->tz('Asia/Kathmandu');

            // Format the Nepali time as a string
            $nepaliTimeString = $nepaliTime->format('Y-m-d H:i:s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
