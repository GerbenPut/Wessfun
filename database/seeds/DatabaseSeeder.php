<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     $this->call(UsersTableSeeder::class);
     $this->call(RolesAndPermissionsSeeder::class);
     $this->call(CategoriesTableSeeder::class);
     $this->call(CommentsTableSeeder::class);
     $this->call(ImagesTableSeeder::class);
     $this->call(TagsTableSeeder::class);
     $this->call(AdvertisementsTableSeeder::class);
     $this->call(MerchTableSeeder::class);
    }
}
