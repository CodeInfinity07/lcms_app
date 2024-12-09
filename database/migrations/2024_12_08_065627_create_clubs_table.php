<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id(); // Primary key named 'id'
            $table->string('club_name'); // Club name
            $table->string('club_code')->unique(); // Unique club code
            $table->string('owner_number');
            $table->foreignId('owner_id')->constrained('users')->onDelete('cascade'); // Foreign key to 'users' table
            $table->timestamps(); // Created at & updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubs');
    }
}
