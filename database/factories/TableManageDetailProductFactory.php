<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TableManageDetailProduct;
use App\Models\TableManageProduct;

class TableManageDetailProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableManageDetailProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_manage' => TableManageProduct::factory(),
            'name' => $this->faker->name,
            'quantity' => $this->faker->numberBetween(-10000, 10000),
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
        ];
    }
}
