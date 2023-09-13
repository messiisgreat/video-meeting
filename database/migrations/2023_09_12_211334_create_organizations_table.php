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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->date('period_start');
            $table->date('period_end');
            $table->integer('total_interviews')->default(1000);
            $table->integer('interviews_count')->default(0);
            $table->integer('total_sms')->default(0);
            $table->integer('sms_count')->default(0);
            $table->integer('users_count')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
