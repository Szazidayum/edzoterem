<?php

use App\Models\Room;
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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('room_id');
            $table->string('megnevezes');
            $table->integer('ferohely');
            $table->timestamps();
        });
        
        Room::create(['megnevezes'=>'Hősök terme','ferohely'=>10]);
        Room::create(['megnevezes'=>'Szinkronúszás','ferohely'=>30]);
        Room::create(['megnevezes'=>'Aerobik','ferohely'=>25]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
