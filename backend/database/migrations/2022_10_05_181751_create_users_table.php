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
            $table->string("full_name");
            $table->string("email")->unique();
            $table->string("password");
            $table->string("bio")->default('NA');
            $table->string("location");
            $table->integer("age");
            $table->string("gender");
            $table->string("interested_in");
            $table->string("profile_picture_url")->default('NA');
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
