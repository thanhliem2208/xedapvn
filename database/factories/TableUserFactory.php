<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TableUser;

class TableUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TableUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'birthday' => $this->faker->dateTime(),
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'status' => $this->faker->numberBetween(-10000, 10000),
            'username' => $this->faker->userName,
            'password' => $this->faker->password,
        ];
    }
}
