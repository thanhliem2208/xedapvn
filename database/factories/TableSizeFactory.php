<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TableSize;

class TableSizeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableSize::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'status' => $this->faker->word,
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'price_sale' => $this->faker->randomFloat(0, 0, 9999999999.),
            'discount' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
