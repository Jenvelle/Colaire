<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use DB;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert([
            [
                'transaction_id'=>'CA20232107001',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>1,
                'totalPrice'=>22,
                'status'=>'paid',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107002',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>1,
                'totalPrice'=>22,
                'status'=>'paid',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107003',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>1,
                'totalPrice'=>22,
                'status'=>'pending',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107004',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>3,
                'totalPrice'=>20,
                'status'=>'pending',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107005',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>3,
                'totalPrice'=>20,
                'status'=>'cancelled',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107006',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>3,
                'totalPrice'=>20,
                'status'=>'cancelled',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107007',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>2,
                'totalPrice'=>20,
                'status'=>'completed',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107008',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>2,
                'totalPrice'=>20,
                'status'=>'completed',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107009',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>4,
                'totalPrice'=>20,
                'status'=>'completed',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107010',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>5,
                'totalPrice'=>20,
                'status'=>'completed',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107011',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>5,
                'totalPrice'=>20,
                'status'=>'completed',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107012',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>5,
                'totalPrice'=>20,
                'status'=>'completed',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
            [
                'transaction_id'=>'CA20232107013',
                'email'=>'matthewsliwag@gmail.com',
                'amountSold'=>1,
                'productId'=>5,
                'totalPrice'=>20,
                'status'=>'completed',
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
    
            ],
        ]
        );
    }
}
