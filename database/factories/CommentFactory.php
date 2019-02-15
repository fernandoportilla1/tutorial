<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
	$userCount = App\User::count();
	$postCount = App\Models\Post::count();
	
    return [
        "content" => $faker->text($maxNbChars = 50),
        "user_id" => $faker->numberBetween(1, $userCount),
        "post_id" => $faker->numberBetween(1, $postCount)
    ];
});
