<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
 
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'user_id' => '1',
            'category_id' => '1',
        ]);
        Order::create([
            'user_id' => '2',
            'category_id' => '2',
        ]);
    }
}
