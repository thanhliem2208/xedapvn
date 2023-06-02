<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TableGallery;
use App\Models\TableProduct;

class TableGalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableGallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_parent' => TableProduct::factory(),
            'image' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'hash' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'name' => $this->faker->name,
            'status' => $this->faker->word,
        ];
    }
}
