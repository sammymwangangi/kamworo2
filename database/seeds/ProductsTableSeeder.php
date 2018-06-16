<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name1 = 'Voklswagen';
        $name2 = 'Toyota Premio';
        $name3 = 'Toyota fielder';
        $name4 = 'Toyota Ipsum';
        $name5 = 'Nissan Xtrail';

        $product1 = [
        	'name' => $name1,
        	'description' => 'Toyota land cruise Prado kbv 3000 cc diesel engine turbo auto gear 4wd silver old shape new tyres allow rims accidents free very good condition',
        	'price' => '1000000',
        	'category_id' => '1',
        	'slug' => str_slug($name1)
        ];        

        $product2 = [
        	'name' => $name2,
        	'description' => 'Toyota land cruise Prado kbv 3000 cc diesel engine turbo auto gear 4wd silver old shape new tyres allow rims accidents free very good condition',
        	'price' => '2000000',
        	'category_id' => '2',
        	'slug' => str_slug($name2)
        ];        

        $product3 = [
        	'name' => $name3,
        	'description' => 'Toyota land cruise Prado kbv 3000 cc diesel engine turbo auto gear 4wd silver old shape new tyres allow rims accidents free very good condition',
        	'price' => '3000000',
        	'category_id' => '3',
        	'slug' => str_slug($name3)
        ];       

        $product4 = [
        	'name' => $name4,
        	'description' => 'Toyota land cruise Prado kbv 3000 cc diesel engine turbo auto gear 4wd silver old shape new tyres allow rims accidents free very good condition',
        	'price' => '4000000',
        	'category_id' => '4',
        	'slug' => str_slug($name4)
        ];        

        $product5 = [
        	'name' => $name5,
        	'description' => 'Toyota land cruise Prado kbv 3000 cc diesel engine turbo auto gear 4wd silver old shape new tyres allow rims accidents free very good condition',
        	'price' => '5000000',
        	'category_id' => '5',
        	'slug' => str_slug($name5)
        ];

        Product::create($product1);
        Product::create($product2);
        Product::create($product3);
        Product::create($product4);
        Product::create($product5);

    }
}
