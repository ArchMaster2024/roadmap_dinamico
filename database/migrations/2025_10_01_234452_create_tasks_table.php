<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->foreignId('step_id')->constrained('steps');
            $table->timestamps();
        });

        DB::unprepared('
            CREATE TRIGGER after_insert_task_add_one_step
            AFTER INSERT ON tasks
            FOR EACH ROW
            BEGIN
                UPDATE steps
                SET steps = steps + 1
                WHERE id = NEW.step_id;
            END
            ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS after_insert_task_add_one_step');
        Schema::dropIfExists('tasks');
    }
};
