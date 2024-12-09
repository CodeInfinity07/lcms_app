<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_admins', function (Blueprint $table) {
            $table->id(); // Primary key named 'id'
            $table->foreignId('club_id')->constrained('clubs')->onDelete('cascade'); // Foreign key to 'clubs' table
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade'); // Foreign key to 'users' table
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
        Schema::dropIfExists('club_admins');
    }
}