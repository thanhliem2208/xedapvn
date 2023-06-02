<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TableOrder;
use App\Models\TableOrderStatus;
use App\Models\TablePayment;
use App\Models\TableUser;

class TableOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => TableUser::factory(),
            'id_payment' => TablePayment::factory(),
            'code' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'total_price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'id_order_status' => TableOrderStatus::factory(),
            'address' => $this->faker->regexify('[A-Za-z0-9]{255}'),
        ];
    }
}
