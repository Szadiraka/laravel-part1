<?php

namespace App\Http\Controllers;

use App\Services\ProductBrendService;
use App\Http\Controllers\Controller;
use App\Models\Product_brend;
use Illuminate\Http\Request;


class ProductBrendController extends Controller
{
    protected $productBrendService;
    public function __construct(ProductBrendService $productBrendService)
    {
     $this->productBrendService = $productBrendService;
    }

   public function index()
 {
     $productBrends= $this->productBrendService->getAllProductBrends();
     return response()->json($productBrends);
 }

 public function store(Request $request)
 {
     $data = $request->validate([
         'name' => 'required|unique:product_brends|max:255',
     ]);
     $productBrends= $this->productBrendService->createProductBrend($data);
      return response()->json($productBrends);           
 }

 public function show(Request $request)
 {
     $productBrend = $this->productBrendService->getProductBrendById($request->$id);
     return response()->json($productBrend);
 }

 public function update(Request $request, Product_brend $productBrend)
 {
     $id= $request->input('id');
     $data = $request->validate([
        'name' => 'required|unique:product_brends|max:255',
     ]);
     $productBrends = $this->productBrendService->updateProductBrend($id, $data);
     return response()->json($productBrends);     
 }

 public function destroy($id)
 {
    $productBrends= $this->productBrendService->deleteProductBrend($id);
    return response()->json($productBrends);
 }
}
