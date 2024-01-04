<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //食料・飲料１
            //お菓子１
            for ($i = 1; $i <= 5; $i++) {
                $product = [
                    'name' => '美味しいチョコレート' . $i,
                    'description' => '濃厚なチョコレート',
                    'image' => '/images/chocolate/' . $i . '.jpg',
                    'price' => 500 + ($i * 50),
                    'stock' => 30 - ($i * 5),
                    'first_category_id' => 1,
                    'second_category_id' => 1,
                ];
                DB::table('products')->insert($product);
            }

            for ($i = 1; $i <= 3; $i++) {
                $product = [
                    'name' => '美味しいグミ' . $i,
                    'description' => 'ぷるぷるした食感のグミ',
                    'image' => '/images/gummy/' . $i . '.jpg',
                    'price' => 600 + ($i * 60),
                    'stock' => 25 - ($i * 3),
                    'first_category_id' => 1,
                    'second_category_id' => 1,
                ];
                DB::table('products')->insert($product);
            }

            for ($i = 1; $i <= 4; $i++) {
                $product = [
                    'name' => '美味しいクッキー' . $i,
                    'description' => '香ばしい焼き立てクッキー',
                    'image' => '/images/cookie/' . $i . '.jpg',
                    'price' => 700 + ($i * 70),
                    'stock' => 20 - ($i * 4),
                    'first_category_id' => 1,
                    'second_category_id' => 1,
                ];
                DB::table('products')->insert($product);
            }
        
            //お肉２
            for ($i = 1; $i <= 9; $i++) {
                $product = [
                    'name' => '美味しいお肉' . $i,
                    'description' => 'ジューシーで美味しいお肉',
                    'image' => '/images/meat/' . $i . '.jpg',
                    'price' => 1000 + ($i * 50),
                    'stock' => 33 - ($i * 2),
                    'first_category_id' => 1,
                    'second_category_id' => 2,
                ];
                DB::table('products')->insert($product);
            }
        
            //飲料３
            for ($i = 1; $i <= 3; $i++) {
                $product = [
                    'name' => '美味しい水' . $i,
                    'description' => '清涼な水',
                    'image' => '/images/water/' . $i . '.jpg',
                    'price' => 800 + ($i * 50),
                    'stock' => 50 - ($i * 5),
                    'first_category_id' => 1,
                    'second_category_id' => 3,
                ];
                DB::table('products')->insert($product);
            }
    
            for ($i = 1; $i <= 5; $i++) {
                $product = [
                    'name' => '美味しいジュース' . $i,
                    'description' => 'フルーツジュース',
                    'image' => '/images/juice/' . $i . '.jpg',
                    'price' => 1000 + ($i * 20),
                    'stock' => 30 - ($i * 3),
                    'first_category_id' => 1,
                    'second_category_id' => 3,
                ];
                DB::table('products')->insert($product);
            }
    
            for ($i = 1; $i <= 3; $i++) {
                $product = [
                    'name' => '美味しいコーヒー' . $i,
                    'description' => '濃い味わいのコーヒー',
                    'image' => '/images/coffee/' . $i . '.jpg',
                    'price' => 1800 + ($i * 20),
                    'stock' => 30 - ($i * 5),
                    'first_category_id' => 1,
                    'second_category_id' => 3,
                ];
                DB::table('products')->insert($product);
            }
        
        
        //ワイン・お酒２
            //ワイン４
            for ($i = 1; $i <= 5; $i++) {
                $product = [
                    'name' => '美味しいワイン' . $i,
                    'description' => '上質なワイン',
                    'image' => '/images/wine/' . $i . '.jpg',
                    'price' => 3000 + ($i * 100),
                    'stock' => 30 - ($i * 5),
                    'first_category_id' => 2,
                    'second_category_id' => 4,
                ];
                DB::table('products')->insert($product);
            }
            
            //スピリッツ５
            for ($i = 1; $i <= 4; $i++) {
                $product = [
                    'name' => '美味しいスピリッツ' . $i,
                    'description' => '高品質なスピリッツ',
                    'image' => '/images/spirit/' . $i . '.jpg',
                    'price' => 3000 + ($i * 150),
                    'stock' => 25 - ($i * 3),
                    'first_category_id' => 2,
                    'second_category_id' => 5,
                ];
                DB::table('products')->insert($product);
            }
        
        
        //ベビー用品・おもちゃ３
            //おもちゃ6
            for ($i = 1; $i <= 4; $i++) {
                $product = [
                    'name' => '子供用おもちゃ' . $i,
                    'description' => '子供たちが喜ぶおもちゃ',
                    'image' => '/images/toy/' . $i . '.jpg',
                    'price' => 800 + ($i * 100),
                    'stock' => 30 - ($i * 5),
                    'first_category_id' => 3,
                    'second_category_id' => 6,
                ];
                DB::table('products')->insert($product);
            }
            
            //ベビー家具７
            for ($i = 1; $i <= 4; $i++) {
                $product = [
                    'name' => '可愛いベビー家具' . $i,
                    'description' => '赤ちゃんのためのかわいい家具',
                    'image' => '/images/baby_furniture/' . $i . '.jpg',
                    'price' => 12000 + ($i * 150),
                    'stock' => 25 - ($i * 3),
                    'first_category_id' => 3,
                    'second_category_id' => 7,
                ];
                DB::table('products')->insert($product);
            }
        
            

    }
}
