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
            ['name' => 'Photo', 'id' => 1, 'slug' => 'photo'],
            ['name' => 'Video', 'id' => 2, 'slug' => 'video'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $user = User::factory()->create([
            'name' => 'Luka',
            'email' => 'lukachochua@gmail.com',
            'password' => 'password',
        ]);

        Post::factory(30)
            ->create(['user_id' => $user->id])
            ->each(function ($post) use ($categories) {
                $category = Category::where('name', $categories[array_rand($categories)]['name'])->first();
                $post->category_id = $category->id;
                $post->save();
        });
    }
}
