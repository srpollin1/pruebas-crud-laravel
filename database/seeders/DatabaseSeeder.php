<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;
use App\Models\Game;
use App\Models\ProductModel;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ProductSeeder::class);
        $this->call(SongSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(ProjectSeeder::class);
        // Animal::factory(50)->create();
        User::factory(10)->create();
    }
}
