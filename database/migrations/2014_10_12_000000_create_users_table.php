<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name'=>'Jancsi','email'=>'jancsi@gmail.com']);
        User::create(['name'=>'Juliska','email'=>'juliska@gmail.com']);
        User::create(['name'=>'Alex Dominik','email'=>'csiszi@gmail.com']);
        User::create(['name'=>'Molnár Szasza','email'=>'szazidayum@gmail.com']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
