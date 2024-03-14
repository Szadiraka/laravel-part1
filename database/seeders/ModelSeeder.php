<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Model_;
class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model_::create([
            'name' => 'пробная модель1',
            'productRepair_id' => '1',
            'productBrend_id' => '1',
        ]);
        Model_::create([
            'name' => 'пробная модель2',
            'productRepair_id' => '1',
            'productBrend_id' => '1',
        ]);
    }
}
