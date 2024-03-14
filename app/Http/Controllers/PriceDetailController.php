<?php

namespace App\Http\Controllers;
use App\Services\PriceDetailService;
use App\Http\Controllers\Controller;
use App\Models\Price_detail;
use Illuminate\Http\Request;


class PriceDetailController extends Controller
{
    protected $priceDetailService;
       public function __construct(PriceDetailService $priceDetailService)
       {
        $this->priceDetailService = $priceDetailService;
       }

      public function index()
    {
        $priceDetailes= $this->priceDetailService->getAllPriceDetails();
        return response()->json($priceDetailes);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:price_details|max:255',
            'price' => 'required|integer',
            'model_id'=> 'required|exists:models,id',
            'category_id'=> 'required|exists:categories,id',
            'manufacture_id'=> 'required|exists:manufactures,id',
        ]);
        $priceDetailes= $this->priceDetailService->createPriceDetail($data);
         return response()->json($priceDetailes);           
    }

    public function show(Request $request)
    {
        $priceDetail = $this->priceDetailService->getpriceDetailById($request->$id);
        return response()->json($priceDetail);
    }

    public function update(Request $request, Price_detail $priceDetail)
    {
        $id= $request->input('id');
        $data = $request->validate([
            'name' => 'required|unique:price_details|max:255',
            'price' => 'required|integer',
            'model_id'=> 'required|exists:models,id',
            'category_id'=> 'required|exists:categories,id',
            'manufacture_id'=> 'required|exists:manufactures,id',
        ]);
        $priceDetail = $this->priceDetailService->updatePriceDetail($id, $data);
        return response()->json($priceDetail);     
    }

    public function destroy($id)
    {
       $priceDetailes= $this->priceDetailService->deletePriceDetail($id);
       return response()->json($priceDetailes);
    }

    public function getPriceDetailsWithChild()
    {
        $results= $this->priceDetailService->getAllPriceDetailsWithDetails();
        return response()->json($results);
    }
}
