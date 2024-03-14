<?php

namespace App\Http\Controllers;

use App\Models\Product_repair;
use App\Services\ProductRepairService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProductRepairController extends Controller
{
    protected $productRepairService;
       public function __construct(ProductRepairService $productRepairService)
       {
        $this->productRepairService = $productRepairService;
       }

      public function index()
    {
        $productRepairs= $this->productRepairService->getAllproductRepairs();
        return response()->json($productRepairs);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:product_repairs|max:255',
        ]);
        $productRepairs= $this->productRepairService->createProductRepair($data);
         return response()->json($productRepairs);           
    }

    public function show(Request $request)
    {
        $productRepair = $this->productRepairService->getProductRepairById($request->$id);
        return response()->json($productRepair);
    }

    public function update(Request $request, Product_repair $productRepair)
    {
        $id= $request->input('id');
        $data = $request->validate([
            'name' => 'required|unique:product_repairs|max:255',
        ]);
        $productRepair = $this->productRepairService->updateProductRepair($id, $data);
        return response()->json($productRepair);     
    }

    public function destroy($id)
    {
       $productRepairs= $this->productRepairService->deleteProductRepair($id);
       return responce()->json($productRepairs);
    }
}
