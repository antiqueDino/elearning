<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->icon = '<i class="fas fa-code"></i>';
        $category->name = "Développement Web";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-laptop-code"></i>';
        $category->name = "Développement Logiciel";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fab fa-codepen"></i>';
        $category->name = "Infrastructure";
        $category->save();
    }
}
