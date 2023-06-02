<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TablePhoto;

class TablePhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TablePhoto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'link' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'name' => $this->faker->name,
            'type' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'status' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
