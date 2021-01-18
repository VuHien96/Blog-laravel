<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 2; $i < 5; $i++) {
            $post = new Post();
            $post->title = "Title $i";
            $post->content = "Content $i";
            $post->category_id = 1;
            $post->images = "images/anh$i.jpg";
            $post->save();
        }
    }
}
