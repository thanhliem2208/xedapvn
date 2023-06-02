<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TableProductCategory;

class TableProductCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableProductCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_parent' => $this->faker->numberBetween(-10000, 10000),
            'name' => $this->faker->name,
            'desc' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'content' => $this->faker->paragraphs(3, true),
            'slug' => $this->faker->slug,
            'image' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'status' => $this->faker->word,
        ];
    }
}
