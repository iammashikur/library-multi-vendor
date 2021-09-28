<?php

namespace Database\Factories;

use App\Models\Library;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibraryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Library::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'name' => 'sk library',
            'district_id' => 1,
            'division_id' => 1,
            'city_id' => 1,
            'address' => 'Dhaka, Mohammad-pur',
            'logo' => 'https://images-platform.99static.com//GRmtYhUNKV2Ugv_21gbqiWplrf4=/711x1150:1347x1784/fit-in/500x500/projects-files/89/8984/898485/9a8ba799-91b0-463b-a84a-087c8afe347b.jpg',
            'banner' => 'https://en.ricest.ac.ir/wp-content/uploads/2018/02/library-banner.jpg',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum,  quaerat repellat deserunt sequi sapiente voluptate aperiam. Placeat sed consequuntur impedit. Id, quae nihil labore officiis beatae culpa et accusamus quod?',
            'status' => 1
        ];
    }
}
