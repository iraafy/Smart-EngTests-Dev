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
        Schema::create('test_collections', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->date('date');
            $table->time('start_time', $precision = 0);
            $table->time('end_time', $precision = 0);
            $table->string('code');
            $table->string('password');
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
        Schema::dropIfExists('test_collections');
    }
};
