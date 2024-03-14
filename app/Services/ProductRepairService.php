<?php
namespace App\Services;
use App\Models\Product_repair;
class ProductRepairService
{  
    public function  getAllProductRepairs()
    {
        return Product_repair::all();
    }

    public function getProductRepairById($id)
    {
        return Product_repair::find($id);
    }

    public function createProductRepair(array $data)
    {
        return Product_repair::create($data);
    }

    public function updateProductRepair($id, array $data)
    {
        $productRepair= Product_repair::find($id);
        
        return $productRepair->update($data);
    }

    public function deleteProductRepair($id)
    {
        $productRepair= Product_repair::find($id);
        return $productRepair->delete();
    }
    
}