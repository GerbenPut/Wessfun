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
            'title' => 'Pirate ship',
            'description' => 'Sexy Pirate ship',
            'sort' => 'Photo',
            'url' => 'https://images8.alphacoders.com/624/624557.jpg',
            'user_id' => '1',
            'category_id' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'Nature',
            'description' => 'Red nature',
            'sort' => 'Photo',
            'url' => 'http://www.luisasempere.com/wp-content/uploads/2017/02/computer-large-hd-wallpapers-1920x1080-essentials-gallery-sculptures-pattern-abstract-imagination.jpg',
            'user_id' => '1',
            'category_id' => '2',
        ]);
        DB::table('images')->insert([
            'title' => 'Legends never die...',
            'description' => 'WHEN THE WORLD IS CALLING YOUUUU!! YOU CAN HEAR THEM SCREAMING OUT YOUURRRRRRRRRRR NAMEEEEEEEEEEEEEEEEEE... LEGENDS NEVER DIEEEEEE',
            'sort' => 'Video',
            'url' => 'https://cdn-b-east.streamable.com/video/mp4/ghba3.mp4?token=OfRRUJIJlqS5cwJlFlzOjQ&expires=1529358461',
            'user_id' => '1',
            'category_id' => '1',
        ]);
        DB::table('images')->insert([
            'title' => 'Joris girlfriend',
            'description' => 'If you saw the texture on the wall first... Youre gay.',
            'sort' => 'Photo',
            'url' => 'http://getwallpapers.com/wallpaper/full/e/a/e/768598-popular-butt-wallpaper-1920x1080.jpg',
            'user_id' => '1',
            'category_id' => '3',
        ]);
        DB::table('images')->insert([
            'title' => 'Mountains',
            'description' => 'Who doesnt love mountains right?',
            'sort' => 'Photo',
            'url' => 'https://wallpaper-house.com/data/out/9/wallpaper2you_342144.jpg',
            'user_id' => '1',
            'category_id' => '2',
        ]);

//        factory(App\Image::class, 50)->create();
    }
}
