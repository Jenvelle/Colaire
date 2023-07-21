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
            'totalStockAvailable'=>3,
            'productPhoto'=>'upload/products/albedo1.webp',
            'tag'=>'none',
            'discount'=>0,

        ],
        [
            'productName'=>'Alhait',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/alhait.webp',
            'tag'=>'new',
            'discount'=>0,
        ],
        [
            'productName'=>'Archons',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/archons.webp',
            'tag'=>'none',
            'discount'=>0,
        ],
        [
            'productName'=>'Arlecchino',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/arlecchino.webp',
            'tag'=>'new',
            'discount'=>0,
        ],
        [
            'productName'=>'Ayaka',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/ayaka.webp',
            'tag'=>'sale',
            'discount'=>0.15,
        ],
        [
            'productName'=>'Ayato',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/ayato.webp',
            'tag'=>'new',
            'discount'=>0,
        ],
        [
            'productName'=>'Blade',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/blade.webp',
            'tag'=>'none',
            'discount'=>0,
        ],
        [
            'productName'=>'Bronya',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/bronya.webp',
            'tag'=>'new',
            'discount'=>0,
        ],
        [
            'productName'=>'Clara',
            'price'=>20,
            'totalStockAvailable'=>0,
            'productPhoto'=>'upload/products/clara.webp',
            'tag'=>'none',
            'discount'=>0,
        ],
        [
            'productName'=>'Columbina',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/columbina.webp',
            'tag'=>'new',
            'discount'=>0,
        ],
        [
            'productName'=>'Cyno',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/cyno.webp',
            'tag'=>'sale',
            'discount'=>0.15,
        ],
        [
            'productName'=>'Danheng',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/danheng.webp',
            'tag'=>'new',
            'discount'=>0,
        ],
        [
            'productName'=>'Diluc',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/diluc.webp',
            'tag'=>'none',
            'discount'=>0,
        ],
        [
            'productName'=>'Dottore',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/dottore.webp',
            'tag'=>'new',
            'discount'=>0,
        ],
        [
            'productName'=>'Faruzan',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/faruzan.webp',
            'tag'=>'none',
            'discount'=>0,
        ],
        [
            'productName'=>'Fischl',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/fischl.webp',
            'tag'=>'new',
            'discount'=>0,
        ],
        [
            'productName'=>'Fu Xuan',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/fu xuan glass phone case.webp',
            'tag'=>'sale',
            'discount'=>0.15,
        ],
        [
            'productName'=>'Ganyu',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/ganyu.webp',
            'tag'=>'new',
            'discount'=>0,
        ],
        [
            'productName'=>'Kafka',
            'price'=>20,
            'totalStockAvailable'=>0,
            'productPhoto'=>'upload/products/kafka.webp',
            'tag'=>'none',
            'discount'=>0,
        ],
        [
            'productName'=>'Klee',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/klee.webp',
            'tag'=>'new',
            'discount'=>0,
        ],
        [
            'productName'=>'Seele',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/seele.webp',
            'tag'=>'none',
            'discount'=>0,
        ],
        [
            'productName'=>'Venti',
            'price'=>20,
            'totalStockAvailable'=>15,
            'productPhoto'=>'upload/products/venti.webp',
            'tag'=>'new',
            'discount'=>0,
        ],
    ]);
    }
}
