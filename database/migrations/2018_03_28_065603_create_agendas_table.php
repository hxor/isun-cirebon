<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('date_start');
            $table->string('clock_start');
            $table->date('date_end');
            $table->string('clock_end');
            $table->string('location');
            $table->text('address');
            $table->text('description')->nullable();
            $table->string('organizer');
            $table->string('uniform')->nullable();
            $table->text('disposition');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('agendas');
    }
}
