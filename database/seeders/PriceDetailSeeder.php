<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Price_detail;
class PriceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Price_detail::create([
            'name' => 'dynamic',
            'price' => 100.50
        ]);
        Price_detail::create([
            'name' => 'glass',
            'price' => 200
        ]);  
    }
}
