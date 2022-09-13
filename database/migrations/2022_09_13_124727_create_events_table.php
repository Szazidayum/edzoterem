<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->string('megnevezes');
            $table->integer('edzo_id')->references('id')->on('users');
            $table->integer('room_id')->references('room_id')->on('rooms');
            $table->integer('idotartam')->default(90);
            $table->timestamps();
        });

        Event::create(['megnevezes'=>'Fitness 1.alkalom','edzo_id'=>1,'room_id'=>1]);
        Event::create(['megnevezes'=>'Szinkronúszás verseny előtti felkészítés','edzo_id'=>4,'room_id'=>2,'idotartam'=>180]);
        Event::create(['megnevezes'=>'Zumba haladóknak','edzo_id'=>4,'room_id'=>3]);
        Event::create(['megnevezes'=>'Nyugdíjas aerobik edzés','edzo_id'=>3,'room_id'=>3]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
