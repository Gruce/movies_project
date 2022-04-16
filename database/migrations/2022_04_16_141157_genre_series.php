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
        Schema::create('genre_series', function (Blueprint $table) {
            $table->id();
            $table->foreignId('genre_id')->nullable()->constrained('genres')->onDelete('SET NULL');
            $table->foreignId('series_id')->nullable()->constrained('series')->onDelete('SET NULL');
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
        Schema::dropIfExists('genre_series');
    }
};
