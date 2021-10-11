<?php

namespace Database\Factories;

use App\Models\LibraryWallet;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibraryWalletFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LibraryWallet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'book_sold' => 50,
            'total_amount' => 0,
            'status' => 0,
        ];
    }
}
