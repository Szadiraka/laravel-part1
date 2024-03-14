<?php
namespace App\Services;
use App\Models\Price_detail;
class PriceDetailService
{
    public function  getAllPriceDetails()
    {
        return Price_detail::all();
    }

    public function getPriceDetailById($id)
    {
        return Price_detail::find($id);
    }

    public function createPriceDetail(array $data)
    {
        return Price_detail::create($data);
    }

    public function updatePriceDetail($id, array $data)
    {
        $priceDetail=Price_detail::find($id);
        return $priceDetail->update($data);
    }

    public function deletePriceDetail($id)
    {
        $priceDetail=Price_detail::find($id);
        return $priceDetail->delete();
    }

    public function getAllPriceDetailsWithDetails()
    {
        return Price_detail::with('model', 'category', 'manufacture')->get();
    }
}