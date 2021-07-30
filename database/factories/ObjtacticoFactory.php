<?php

namespace Database\Factories;

use App\Models\Objtactico;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObjtacticoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Objtactico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->text(250)
        ];
    }
}
