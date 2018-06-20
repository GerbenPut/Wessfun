<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'title' => 'TagTitel',
            'message' => 'Media Tags',
        ]);

        factory(App\Tag::class, 5)->create();
    }
}
