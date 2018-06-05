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
            'url' => 'https://i.redditmedia.com/qCEwFXfLBg-WWkKH-jrGWryIBTZhqb8f1I1x5znADcE.jpg?fit=crop&crop=faces%2Centropy&arh=2&w=640&s=14742c9ae5873486d5c405e7f6108113',
        ]);

//        factory(App\Image::class, 50)->create();
    }
}
