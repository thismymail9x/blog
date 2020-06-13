<?php

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
        $category = new \App\Categories();
        $category->name = "Bất động sản";
        $category->save();
        $category = new \App\Categories();
        $category->name = "Nấu ăn";
        $category->save();
        $category = new \App\Categories();
        $category->name = "Kinh tế";
        $category->save();
        $category = new \App\Categories();
        $category->name = "Thể thao";
        $category->save();
        $category = new \App\Categories();
        $category->name = "Mua sắm";
        $category->save();
        $category = new \App\Categories();
        $category->name = "Y tế";
        $category->save();
        $category = new \App\Categories();
        $category->name = "Khác";
        $category->save();
    }
}
