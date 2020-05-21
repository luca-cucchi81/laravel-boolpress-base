<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
            $post = new Post;
            $post->title = $faker->sentence(6, true);
            $post->author = $faker->name();
            $post->img = 'https://picsum.photos/500/300';
            $post->body = $faker->text(100);
            $post->published = rand(0,1);
            $post->slug = Str::slug($post->title, '-');
            $post->save();
        }
    }
}
