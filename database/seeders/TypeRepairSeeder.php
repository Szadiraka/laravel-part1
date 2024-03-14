<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type_repair;
class TypeRepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type_repair::create([
            'name' => 'Немає підсвічування',
            'productRepair_id' => 4,
            'repairTime'=> '1-4 дні',
            'price'=> 340

        ]);
        Type_repair::create([
            'name' => 'Вертикальні смуги на зображені',
            'productRepair_id' => 4,
            'repairTime'=> '1-54 дні',
            'price'=> 380
        ]); 
        Type_repair::create([
            'name' => 'Не вмикається',
            'productRepair_id' => 4,
            'repairTime'=> '1-4 дні',
            'price'=> 300
        ]); 
        Type_repair::create([
            'name' => 'Заміна інвертора',
            'productRepair_id' => 4,
            'repairTime'=> '1-4 дні',
            'price'=> 330
        ]); 
       
    }
}
