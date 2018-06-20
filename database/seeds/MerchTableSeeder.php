<?php

use Illuminate\Database\Seeder;

class MerchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Merch::class, 10)->create();


        DB::table('merches')->insert([
            'name' => 'Norwegian pullover',
            'price' => '€ 49,99',
            'size' => 'M',
            'url' => 'https://www.norwegianpullovers.com/pub/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/t/o/torino_blauw.jpg',

        ]);
        DB::table('merches')->insert([
            'name' => 'Body warmer',
            'price' => '€ 29,99',
            'size' => 'S',
            'url' => 'https://s7.landsend.com/is/image/LandsEnd/469490_A516_LF_HME?fmt=jpeg,rgb&qlt=80,1&op_sharpen=0&resMode=sharp2&op_usm=0.5,1,3,0&icc=sRGB%20IEC61966-2.1,relative&iccEmbed=1&hei=561&wid=374',
        ]);
        DB::table('merches')->insert([
            'name' => 'Broek',
            'price' => '€ 39,99',
            'size' => 'S',
            'url' => 'https://cdn.nextchapter-ecommerce.com/Public/Products/xxlarge/1226213-98056-broek-claudia-grijs-10.jpg',
        ]);


    }
}
