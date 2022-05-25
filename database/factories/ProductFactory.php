<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductFactory extends Factory
{
    use HasFactory;

    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'price' => $this->faker->numberBetween($min = 200, $max = 9000),
        ];
    }
}
