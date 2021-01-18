<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i < 5; $i++) {
            $category = new Category();
            $category->name = "Danh mục $i";
            $category->save();
        }
    }
}
