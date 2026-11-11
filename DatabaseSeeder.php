<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->create([
            'username' => 'kyleferro',
            'full_name' => 'Kyle Christian Ferro',
            'email' => 'kyle.ferro@example.com',
        ]);

        $today = today();

        Task::query()->insert([
            ['title' => 'Review Laravel routing', 'status' => 'completed', 'task_date' => $today->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Build the welcome page', 'status' => 'in progress', 'task_date' => $today->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Test the task list query', 'status' => 'pending', 'task_date' => $today->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Read Eloquent documentation', 'status' => 'completed', 'task_date' => $today->copy()->subDay()->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Create database migrations', 'status' => 'completed', 'task_date' => $today->copy()->subDay()->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Prepare project README', 'status' => 'pending', 'task_date' => $today->copy()->addDay()->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Review application layout', 'status' => 'pending', 'task_date' => $today->copy()->addDay()->toDateString(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Demonstrate the completed system', 'status' => 'pending', 'task_date' => $today->copy()->addDays(2)->toDateString(), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
