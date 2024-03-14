<?php
namespace App\Services;
use App\Models\Type_repair;
use App\Models\Product_repair;
class TypeRepairService
{
    public function  getAllTypeRepairs()
    {
        return Type_repair::all();
    }

    public function getTypeRepairById($id)
    {
        return Type_repair::find($id);
    }

    public function createTypeRepair(array $data)
    {
        return Type_repair::create($data);
    }

    public function updateTypeRepair($id, array $data)
    {
        $typeRepair=Type_repair::find($id);
        return $typeRepair->update($data);
    
    }

    public function deleteTypeRepair($id)
    {
        $typeRepair=Type_repair::find($id);
        return $typeRepair->delete();
    
    }
 
    public function getAllTypeDetailsWithDetails()
    {
        return Type_repair::with('productRepair')->get();
    }
}