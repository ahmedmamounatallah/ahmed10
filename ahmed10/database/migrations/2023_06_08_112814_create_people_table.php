<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->integer('address',100);
            $table->string('email',255);
            $table->integer('password',100);
            $table->string('name',255);
            $table->string('city',255);
            $table->integer('longitude',100);
            $table->string('state',255);
            $table->string('source',255);
            $table->integer('birth_data',100);
            $table->string('zip',255);
            $table->integer('latitude',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
