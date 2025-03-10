<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TaskSeeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory(10)->create();

        DB::table('priorities')->insert([
            ['name' => 'low', 'description' => 'Low priority'],
            ['name' => 'medium', 'description' => 'Medium priority'],
            ['name' => 'high', 'description' => 'High priority'],
        ]);

        $this->call([
            TaskSeeder::class,
        ]);
    }
}
