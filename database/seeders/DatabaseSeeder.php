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
        $categories = [
            ['name' => 'Personal', 'id' => 1],
            ['name' => 'Food', 'id' => 2],
            ['name' => 'Other', 'id' => 3],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $user = User::factory()->create([
            'name' => 'Luka',
            'email' => 'lukachochua@gmail.com',
            'password' => 'password',
        ]);

        \App\Models\Post::factory(10)
            ->create(['user_id' => $user->id])
            ->each(function ($post) use ($categories) {
                $category = Category::where('name', $categories[array_rand($categories)]['name'])->first();
                $post->category_id = $category->id;
                $post->save();
            });
    }
}
