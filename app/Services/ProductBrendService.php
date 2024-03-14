<?php
namespace App\Services;
use App\Models\Product_brend;
class ProductBrendService
{
    public function  getAllProductBrends()
    {
        return Product_brend::all();
    }

    public function getProductBrendById($id)
    {
        return Product_brend::find($id);
    }

    public function createProductBrend(array $data)
    {
        return Product_brend::create($data);
    }

    public function updateProductBrend($id, array $data)
    {
        $brend= Product_brend::find($id);
        
        return $brend->update($data);
    }

    public function deleteProductBrend($id)
    {
        $brend= Product_brend::find($id);
        return $brend->delete();
    }
}