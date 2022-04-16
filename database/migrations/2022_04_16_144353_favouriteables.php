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
        Schema::create('favouriteables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('favourite_id')->nullable()->constrained('favourites')->onDelete('SET NULL');

            $table->integer('favouriteable_id');
            $table->string('favouriteable_type');

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
        Schema::dropIfExists('favouriteables');
    }
};
