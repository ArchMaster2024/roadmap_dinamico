<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Roadmap;
use App\Models\Step;
use App\Models\Task;
use App\Models\Subtask;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(10)
            ->has(
                Roadmap::factory()
                    ->has(
                        Step::factory()
                            ->has(
                                Task::factory()
                                    ->count(10)
                                    ->has(
                                        Subtask::factory()->count(5)
                                    )
                            )
                    )
            )
            ->create();
    }
}
