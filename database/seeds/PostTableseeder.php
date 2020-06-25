<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $title = $faker->text(40);

            $newPost = new Post();
            $newPost->user_id = 1;
            $newPost->title = $title;
            $newPost->body = $faker->paragraphs(3, true);
            $newPost->slug = Str::slug($title, '-');

            $newPost->save();
        }
    }
}
