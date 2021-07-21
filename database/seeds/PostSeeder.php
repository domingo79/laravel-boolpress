<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {

            $post = new Post();
            $post->title = $faker->word();
            // $post->image = $faker->imageUrl(640, 480,  true, $post->title, true);
            $post->image = 'https://picsum.photos/id/' . $i . '/200/200';
            $post->description = $faker->text();
            $post->save();
        }
    }
}
