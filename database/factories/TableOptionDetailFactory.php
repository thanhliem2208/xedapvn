<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TableOption;
use App\Models\TableOptionDetail;
use App\Models\TableUser;

class TableOptionDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableOptionDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => TableUser::factory(),
            'id_option' => TableOption::factory(),
        ];
    }
}
