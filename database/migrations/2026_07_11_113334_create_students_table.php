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
        Schema::create('students', function (Blueprint $table) {

            $table->id();

            // Link with users table
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained('users')
                  ->onDelete('cascade');

            $table->string('name');

            $table->string('mobile')->unique();

            $table->text('address');

            // Admin will fill these later
            $table->string('room_number')->nullable();

            $table->string('course')->nullable();

            $table->string('gender')->nullable();

            $table->string('parent_contact')->nullable();

            $table->string('fees_status')->default('Pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};