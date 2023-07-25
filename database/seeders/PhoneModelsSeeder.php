<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class PhoneModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phone_models')->insert([
            [
                'device'=>'apple',
                'model'=>'iPhone 12',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'apple',
                'model'=>'iPhone 12 Pro',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'apple',
                'model'=>'iPhone 12 Pro Max',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'apple',
                'model'=>'iPhone 13',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'apple',
                'model'=>'iPhone 13 Pro',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'apple',
                'model'=>'iPhone 13 Pro Max',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'apple',
                'model'=>'iPhone 14',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'apple',
                'model'=>'iPhone 14 Pro',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'apple',
                'model'=>'iPhone 14 Pro Max',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'android',
                'model'=>'Galaxy S21',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'android',
                'model'=>'Galaxy S21 +',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'android',
                'model'=>'Galaxy S21 Ultra',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'android',
                'model'=>'Galaxy S22',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'android',
                'model'=>'Galaxy S22 +',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'android',
                'model'=>'Galaxy S22 Ultra',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'android',
                'model'=>'Galaxy S23',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'android',
                'model'=>'Galaxy S23 +',
                'totalStockAvailable'=>999,
            ],
            [
                'device'=>'android',
                'model'=>'Galaxy S23 Ultra',
                'totalStockAvailable'=>999,
            ],
            
        ]);
    }
}
