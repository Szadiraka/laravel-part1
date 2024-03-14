<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product_repair;
class ProductRepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product_repair::create([
            'name' => 'leptop'
        ]);
        Product_repair::create([
            'name' => 'cellphone'
        ]);  
    }
}
