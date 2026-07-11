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
    $table->string('name');
    $table->string('mobile')->unique();
    $table->text('address');
    $table->string('room_number');
    $table->string('course');
    $table->string('gender');
    $table->string('parent_contact');
    $table->string('fees_status');
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
