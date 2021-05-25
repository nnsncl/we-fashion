<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraphs(1, true),
            'price' => $this->faker->randomFloat(2, 0, 999),
            'ref' => $this->faker->regexify('[A-Za-z0-9]{16}'),
            'discount' => $this->faker->boolean(),
            'gender' => $this->faker->randomElement(['male', 'female'])
        ];
    }
}
