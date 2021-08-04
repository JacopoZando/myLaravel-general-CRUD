<?php

use App\MyMatch;
use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MyMatch::class, 50)-> create();
    }
}
