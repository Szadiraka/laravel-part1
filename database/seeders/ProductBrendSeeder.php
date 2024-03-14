<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product_brend;
class ProductBrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product_brend::create([
            'name' => 'iphone'
        ]);
        Product_brend::create([
            'name' => 'samsung'
        ]);  
    }
}
