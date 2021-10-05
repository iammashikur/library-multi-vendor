<?php

namespace Database\Factories;

use App\Models\rating;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => '1',
            'rating' => '5',
            'book_id' => random_int(1, 20),
            'comment' => $this->faker->sentence()
        ];
    }
}
