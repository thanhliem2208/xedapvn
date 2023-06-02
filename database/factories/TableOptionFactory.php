<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TableOption;

class TableOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableOption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'name' => $this->faker->name,
            'code' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'status' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
