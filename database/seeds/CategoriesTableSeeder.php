<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 5)->create();

//        DB::table('categories')->insert([
//            'category' => 'Funny',
//            'description' => 'Funny images/videos',
//        ]);
//        DB::table('categories')->insert([
//            'category' => 'Nature',
//            'description' => 'If you are a nature lover',
//        ]);
//        DB::table('categories')->insert([
//            'category' => 'NSFW (18+)',
//            'description' => 'Adults only!',
//        ]);
    }
}
