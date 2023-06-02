<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TableColor;
use App\Models\TableProduct;
use App\Models\TableProductCategory;
use App\Models\TableSize;

class TableProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_category' => TableProductCategory::factory(),
            'id_color' => TableColor::factory(),
            'id_size' => TableSize::factory(),
            'image' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'slug' => $this->faker->slug,
            'name' => $this->faker->name,
            'desc' => $this->faker->text,
            'content' => $this->faker->paragraphs(3, true),
            'code' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'price_sale' => $this->faker->randomFloat(0, 0, 9999999999.),
            'discount' => $this->faker->numberBetween(-10000, 10000),
            'quantity' => $this->faker->numberBetween(-10000, 10000),
            'status' => $this->faker->word,
        ];
    }
}
