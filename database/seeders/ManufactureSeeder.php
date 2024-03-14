<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manufacture;

class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manufacture::create([
            'name' => 'XL',
        ]);
        Manufacture::create([
            'name' => 'Tianma',
        ]);
    }
}
