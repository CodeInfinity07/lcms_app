<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('prize'); // Prize for the tournament
            $table->integer('participants'); // Number of participants
            $table->integer('format'); // Tournament format (e.g., knockout, league, etc.)
            $table->integer('fee'); // Fee for participation
            $table->integer('status'); // Status
            $table->integer('mode'); // Mode of the tournament (e.g., online, offline)
            $table->json('registered_clubs')->nullable(); // List of registered clubs (stored as JSON)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournaments');
    }
};