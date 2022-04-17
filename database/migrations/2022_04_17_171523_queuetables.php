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
        Schema::create('queuetables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('queue_id')->nullable()->constrained('queues')->onDelete('SET NULL');
            $table->integer('queuetables_id');
            $table->string('queuetables_type');
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
        Schema::dropIfExists('queuetables');
    }
};
