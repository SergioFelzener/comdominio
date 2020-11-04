<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class NewsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\News::factory(20)->create();
    }
}
