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
            'title' => 'hehe',
            'description' => 'xD',
            'category' => 'Funny',
            'url' => 'http://www.ablemultimediadesign.com/wp-content/uploads/2017/04/27.gif',
        ]);
    }
}
