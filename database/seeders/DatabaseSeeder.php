<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Book;
use App\Models\Category;
use App\Models\Library;
use App\Models\rating;
use Database\Factories\LibraryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LocationSeeder::class);
        Library::factory(1)->create();
        Book::factory(20)->create();
        Category::factory(15)->create();
        rating::factory(20)->create();
        Blog::factory(20)->create();
    }
}
