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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title', 180)->comment('Task title, the type are varchar of 180 characters');
            $table->enum('status', ['completed', 'in_progress', 'pending', 'blocked'])->default('in_progress')->comment('Task status, the type is ENUM');
            $table->decimal('progress', 5, 2)->comment('Task progress, the type is DECIMAL of 5 total digits and 2 decimal digits');
            $table->foreignId('step_id')->constrained('steps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
