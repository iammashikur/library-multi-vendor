<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'user_id'     => 4,
            'library_id'  => 1,
            'category_id' => 1,
            'cover_image' => 'https://covers.zlibcdn2.com/covers/books/f3/1b/5a/f31b5aa50e3b8a101c257085d0ed3ce2.jpg',
            'title'       => 'Ikigai: The Japanese Secret to a Long and Happy Life',
            'slug'        => 'Ikigai-The-Japanese-Secret-to-a-Long-and-HappyLife',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.',
            'price'       => '500',
            'stock'       => '100',
            'writer'      => 'Héctor García, Francesc Miralles',
            'publisher'   => 'Francesc Miralles',
            'tags'        => 'Ikigai: The Japanese Secret to a Long and Happy Life',
            'status'      => 1
        ];
    }
}
