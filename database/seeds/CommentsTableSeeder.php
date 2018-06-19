<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'message' => 'Slechte post',
            'image_id' => '1',
            'user_id' => '1',
        ]);
    }
}
