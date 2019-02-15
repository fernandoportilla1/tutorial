<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
	$count = App\User::count();
	
    return [
        "title" => $faker->name,
        "content" => $faker->text($maxNbChars = 300),
        "user_id" => $faker->numberBetween(1, $count)  
    ];
});
