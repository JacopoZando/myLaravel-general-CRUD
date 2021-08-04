<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MyMatch;
use Faker\Generator as Faker;

$factory->define(MyMatch::class, function (Faker $faker) {
    return [
        'team1' => $faker -> word,
        'team2' => $faker -> word,
        'point1' => $faker -> numberBetween($min = 0, $max = 30),
        'point2' => $faker -> numberBetween($min = 0, $max = 30),
        'result' => $faker -> numberBetween($min = 0, $max = 1) ==0,
    ];
});
