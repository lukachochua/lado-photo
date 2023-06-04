<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::factory()->create([
            'name' => 'Luka',
            'email' => 'lukachochua@gmail.com',
            'password' => 'password',
        ]);

        Category::factory()->create([
            'name' => 'Food & Beverage',
            'id' => 1,
        ]);
        Category::factory()->create([
            'name' => 'People',
            'id' => 2,
        ]);
        Category::factory()->create([
            'name' => 'Product',
            'id' => 3,
        ]);

        Category::factory()->create([
            'name' => 'Architecture and Landscape',
            'id' => 4,
        ]);

        Category::factory()->create([
            'name' => 'Candid',
            'id' => 5,
        ]);

        


        Post::factory(5)->create(['user_id' => $user->id]);
        
    }
}
