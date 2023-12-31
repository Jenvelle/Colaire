<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */ 
    public function run(): void
    {
       DB::table('products')->insert([
        [
            'productName'=>'Albedo 1',
            'price'=>22,
            'productPhoto'=>'upload/products/albedo1.webp',
            'tag'=>'none',
            'discount'=>0,
            'category'=>'Genshin Impact',

        ],
        [
            'productName'=>'Alhait',
            'price'=>20,
            'productPhoto'=>'upload/products/alhait.webp',
            'tag'=>'new',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Archons',
            'price'=>20,
            'productPhoto'=>'upload/products/archons.webp',
            'tag'=>'none',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Arlecchino',
            'price'=>20,
            'productPhoto'=>'upload/products/arlecchino.webp',
            'tag'=>'new',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Ayaka',
            'price'=>20,
            'productPhoto'=>'upload/products/ayaka.webp',
            'tag'=>'sale',
            'discount'=>0.15,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Ayato',
            'price'=>20,
            'productPhoto'=>'upload/products/ayato.webp',
            'tag'=>'new',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Blade',
            'price'=>20,
            'productPhoto'=>'upload/products/blade.webp',
            'tag'=>'none',
            'discount'=>0,
            'category'=>'Honkai Star Rail',
        ],
        [
            'productName'=>'Bronya',
            'price'=>20,
            'productPhoto'=>'upload/products/bronya.webp',
            'tag'=>'new',
            'discount'=>0,
            'category'=>'Honkai Star Rail',
        ],
        [
            'productName'=>'Clara',
            'price'=>20,
            'productPhoto'=>'upload/products/clara.webp',
            'tag'=>'none',
            'discount'=>0,
            'category'=>'Honkai Star Rail',
        ],
        [
            'productName'=>'Columbina',
            'price'=>20,
            'productPhoto'=>'upload/products/columbina.webp',
            'tag'=>'new',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Cyno',
            'price'=>20,
            'productPhoto'=>'upload/products/cyno.webp',
            'tag'=>'sale',
            'discount'=>0.15,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Danheng',
            'price'=>20,
            'productPhoto'=>'upload/products/danheng.webp',
            'tag'=>'new',
            'discount'=>0,
            'category'=>'Honkai Star Rail',
        ],
        [
            'productName'=>'Diluc',
            'price'=>20,
            'productPhoto'=>'upload/products/diluc.webp',
            'tag'=>'none',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Dottore',
            'price'=>20,
            'productPhoto'=>'upload/products/dottore.webp',
            'tag'=>'new',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Faruzan',
            'price'=>20,
            'productPhoto'=>'upload/products/faruzan.webp',
            'tag'=>'none',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Fischl',
            'price'=>20,
            'productPhoto'=>'upload/products/fischl.webp',
            'tag'=>'new',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Fu Xuan',
            'price'=>20,
            'productPhoto'=>'upload/products/fu xuan glass phone case.webp',
            'tag'=>'sale',
            'discount'=>0.15,
            'category'=>'Honkai Star Rail',
        ],
        [
            'productName'=>'Ganyu',
            'price'=>20,
            'productPhoto'=>'upload/products/ganyu.webp',
            'tag'=>'new',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Kafka',
            'price'=>20,
            'productPhoto'=>'upload/products/kafka.webp',
            'tag'=>'none',
            'discount'=>0,
            'category'=>'Honkai Star Rail',
        ],
        [
            'productName'=>'Klee',
            'price'=>20,
            'productPhoto'=>'upload/products/klee.webp',
            'tag'=>'new',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
        [
            'productName'=>'Seele',
            'price'=>20,
            'productPhoto'=>'upload/products/seele.webp',
            'tag'=>'none',
            'discount'=>0,
            'category'=>'Honkai Star Rail',
        ],
        [
            'productName'=>'Venti',
            'price'=>20,
            'productPhoto'=>'upload/products/venti.webp',
            'tag'=>'new',
            'discount'=>0,
            'category'=>'Genshin Impact',
        ],
    ]);
    }
}
