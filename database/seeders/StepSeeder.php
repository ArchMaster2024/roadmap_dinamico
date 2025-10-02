<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Step;
use App\Models\Task;
use App\Models\Subtask;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Step::factory()
            ->has(
                Task::factory()->has(
                    Subtask::factory()->count(5)
                )->count(10)
            )->count(10)
            ->create();
    }
}
