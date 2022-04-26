<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, dolorem ratione animi dignissimos neque qui aliquam. Ad incidunt eaque quasi dolores a mollitia. Ducimus impedit similique alias explicabo molestiae harum. Sapiente autem assumenda laudantium rem reiciendis accusamus incidunt repellat maxime ut. Adipisci architecto, error impedit inventore voluptates saepe minima aspernatur!</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, dolorem ratione animi dignissimos neque qui aliquam. Ad incidunt eaque quasi dolores a mollitia. Ducimus impedit similique alias explicabo molestiae harum. Sapiente autem assumenda laudantium rem reiciendis accusamus incidunt repellat maxime ut. Adipisci architecto, error impedit inventore voluptates saepe minima aspernatur!</p>'
        ]);
    }
}
