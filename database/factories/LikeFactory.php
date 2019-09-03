<?php

use App\Like;
use Faker\Generator as Faker;

// 実行したコマンド
// php artisan make:factory LikesFactory
// php artisan make:seeder LikeTableSeeder
// php artisan make:model Like
$factory->define(Like::class, function (Faker $faker) {
    return [];
});
