<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('products')->insert([
        [
            'productName'=>'Albedo 1',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/albedo1.webp'
        ],
        [
            'productName'=>'Alhait',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/alhait.jpg'
        ],
        [
            'productName'=>'Alhaitham 2',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/alhaitham2.webp'
        ],
        [
            'productName'=>'Archons',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/archons.webp'
        ],
        [
            'productName'=>'Arlecchino',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/arlecchino.webp'
        ],
        [
            'productName'=>'Ayaka',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/ayaka.webp'
        ],
        [
            'productName'=>'Ayaka 1',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/ayaka1.webp'
        ],
        [
            'productName'=>'Ayato',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/ayato.webp'
        ],
        [
            'productName'=>'Blade',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/blade.webp'
        ],
        [
            'productName'=>'Blade 1',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/blade1.webp'
        ],
        [
            'productName'=>'Bronya',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/bronya.webp'
        ],
        [
            'productName'=>'Bronya 1',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/bronya1.webp'
        ],
        [
            'productName'=>'Clara',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/clara.webp'
        ],
        [
            'productName'=>'Clara 1',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/clara1.webp'
        ],
        [
            'productName'=>'Columbina',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/columbina.webp'
        ],
        [
            'productName'=>'Columbina 1',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/columbina1.webp'
        ],
        [
            'productName'=>'Columbina 2',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/columbina2.webp'
        ],
        [
            'productName'=>'Cyno',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/cyno.webp'
        ],
        [
            'productName'=>'Danheng',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/danheng.webp'
        ],
        [
            'productName'=>'Diluc',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/diluc.webp'
        ],
        [
            'productName'=>'Dottore',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/dottore.webp'
        ],
        [
            'productName'=>'Faruzan',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/faruzan.webp'
        ],
        [
            'productName'=>'Fischl',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/fischl.webp'
        ],
        [
            'productName'=>'Fu Xuan',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/fu xuan glass phone case.webp'
        ],
        [
            'productName'=>'Ganyu',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/ganyu.webp'
        ],
        [
            'productName'=>'Kafka',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/kafka.webp'
        ],
        [
            'productName'=>'Klee',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/klee.webp'
        ],
        [
            'productName'=>'Klee 1',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/klee1.webp'
        ],
        [
            'productName'=>'Raiden',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/raiden.webp'
        ],
        [
            'productName'=>'Raiden Shogun',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/raidenshogun2.webp'
        ],
        [
            'productName'=>'Seele',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/seele.webp'
        ],
        [
            'productName'=>'Venti',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/venti.webp'
        ],
        [
            'productName'=>'Yaemiko',
            'price'=>3000000,
            'stocksAvailable'=>15,
            'productPhoto'=>'upload/products/yaemiko1.webp'
        ],
    ]);
    }
}
