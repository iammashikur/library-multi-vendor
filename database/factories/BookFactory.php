<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => 1,
            'library_id'  => 1,
            'category_id' => 1,
            'cover_image' => $this->faker->image('public/uploads/images',640,480, null, false),
            'title'       => $this->faker->word,
            'slug'        => 'Ikigai-The-Japanese-Secret-to-a-Long-and-HappyLife',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.',
            'price'       => '500',
            'stock'       => '100',
            'writer'      => $this->faker->name,
            'publisher'   => $this->faker->name,
            'tags'        => 'Ikigai: The Japanese Secret to a Long and Happy Life',
            'status'      => 1
        ];
    }
}
