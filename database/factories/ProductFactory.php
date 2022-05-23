<?php
/** @var Factory $factory */
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'price' => $faker->numberBetween($min = 200, $max = 9000),
    ];
});