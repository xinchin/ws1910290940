<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title'=>$faker->realText($maxNbChars = 15),
        'content'=>$faker->realText($maxNbChars = 100),
        'user_id'=>$faker->numberBetween(1, 10),
    ];
});
