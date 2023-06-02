<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TableOrder;
use App\Models\TableOrderDetail;

class TableOrderDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableOrderDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_order' => TableOrder::factory(),
            'id_product' => $this->faker->numberBetween(-10000, 10000),
            'quantity' => $this->faker->numberBetween(-10000, 10000),
            'name' => $this->faker->name,
            'code_product' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'price_sale' => $this->faker->randomFloat(0, 0, 9999999999.),
            'color' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'size' => $this->faker->regexify('[A-Za-z0-9]{255}'),
        ];
    }
}
