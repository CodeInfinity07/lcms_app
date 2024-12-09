<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tournaments', function (Blueprint $table) {
            $table->string('starting_date')->nullable()->after('status'); // Add your column here
        });
    }

    public function down()
    {
        Schema::table('tournaments', function (Blueprint $table) {
            $table->dropColumn('starting_date'); // Remove the column in case of rollback
        });
    }
};
