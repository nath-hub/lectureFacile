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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
             $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('code')->nullable();
            $table->integer('phone')->unique();
            $table->string('email')->unique()->nullable();
            $table->integer('prix')->nullable();
            $table->boolean('statut')->nullable();
            $table->date('dateNais')->nullable();
            $table->date('expires_at', 31536000)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
