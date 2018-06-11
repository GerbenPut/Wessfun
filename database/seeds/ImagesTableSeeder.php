<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'title' => 'My post',
            'description' => 'This is not a repost',
            'category' => 'Meme',
            'sort' => 'Photo',
            'url' => 'https://pbs.twimg.com/profile_images/575890671350874112/lLhuNEZl_400x400.png',
        ]);

//        factory(App\Image::class, 50)->create();
    }
}
