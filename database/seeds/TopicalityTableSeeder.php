<?php

use Illuminate\Database\Seeder;

class TopicalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $top = factory(App\Topicality::class, 50)->create();
    }
}
