<?php

use Illuminate\Database\Seeder;

class AdvertisementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisements')->insert([
            'Company' => 'Quake Champions',
            'URL' => 'https://cdn1.vntsm.com/152876/France/100_R.jpg',
            'image_id' => '1',
        ]);
        DB::table('advertisements')->insert([
            'Company' => 'CyberGhost',
            'URL' => 'https://tpc.googlesyndication.com/simgad/5999084540335731940',
            'image_id' => '1',
        ]);
//        factory(App\Advertisement::class, 5)->create();
    }
}
