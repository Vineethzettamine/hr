<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations..
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role')->nullable();
            $table->string('email')->unique();
            $table->string('designation', 300)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('alternative_phone', 100)->nullable();
            $table->string('rel_of_alternative_phone', 255)->nullable();
            $table->string('blood_group', 100)->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('birthday', 100)->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->text('bio')->nullable();
            $table->string('photo')->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('sort')->nullable()->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
