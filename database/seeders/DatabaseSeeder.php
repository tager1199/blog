<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::truncate();
//        Category::truncate();
//        Post::truncate();
        User::factory()->create(
            [
                'name' => "Tom A",
                'username' => 'tom.a',
                'email' => 'tom.a@ohhdeer.com'
            ]
        );

        Post::factory(5)->create();
//        $user = User::factory()->create();
//        $u = User::factory()->create();
//        $pers = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//        $fam = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $pers->id,
//            'title' => 'My Personal Post',
//            'excerpt' => 'Personal Excerpt',
//            'body' => 'Lorem ipsum dolar sit amet.',
//            'slug'=>'my-personal-post'
//        ]);
//        Post::create([
//            'user_id' => $u->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'excerpt' => 'Work Excerpt',
//            'body' => 'Lorem ipsum dolar sit amet.',
//            'slug'=>'my-work-post'
//        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
