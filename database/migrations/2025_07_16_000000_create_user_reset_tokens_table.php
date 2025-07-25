<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_reset_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('token');
            $table->timestamps();

            $table->foreign('email')->references('email')->on('user')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_reset_tokens');
    }
};
