<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TableManageProduct;
use App\Models\TableProduct;

class TableManageProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableManageProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_product' => TableProduct::factory(),
            'name' => $this->faker->name,
            'code' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'total_price' => $this->faker->randomFloat(0, 0, 9999999999.),
        ];
    }
}
