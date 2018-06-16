<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = ['name' => 'Car', 'slug' => str_slug('Car') ];
        $category2 = ['name' => 'Car Accessories', 'slug' => str_slug('Car Accessories') ];
        $category3 = ['name' => 'Trucks, Commersial &Agricultural', 'slug' => str_slug('Trucks, Commersial &Agricultural') ];
        $category4 = ['name' => 'Motorcycles', 'slug' => str_slug('Motorcycles') ];
        $category5 = ['name' => 'Other Vehicles', 'slug' => str_slug('Other Vehicles') ];

        Category::create($category1);
        Category::create($category2);
        Category::create($category3);
        Category::create($category4);
        Category::create($category5);
    }
}
