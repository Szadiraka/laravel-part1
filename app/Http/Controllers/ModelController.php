<?php

namespace App\Http\Controllers;

use App\Services\ModelService;
use App\Http\Controllers\Controller;
use App\Models\Model_;
use App\Models\Product_brend;
use App\Models\Product_repair;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    protected $modelService;
       public function __construct(ModelService $modelService)
       {
        $this->modelService = $modelService;
       }

      public function index()
    {
        $models= $this->modelService->getAllModels();
        return response()->json($models);
    }

    public function modelAll()
    {
        $models= $this->modelService->modelAllItems();
        return response()->json($models);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'productRepair_id' => 'required|exists:product_repairs,id',
            'productBrend_id' => 'required|exists:product_brends,id',
        ]);
        $models= $this->modelService->createModel($data);
         return response()->json($models);           
    }

    public function show(Request $request)
    {
        $model = $this->modelService->getModelById($request->$id);
        return response()->json($model);
    }

    public function update(Request $request, Model_ $model)
    {
        $id= $request->input('id');
        $data = $request->validate([
            'name' => 'required|max:255',
            'productRepair_id' => 'required|exists:product_repairs,id',
            'productBrend_id' => 'required|exists:product_brends,id',
        ]);
        $model = $this->modelService->updateModel($id, $data);
        return response()->json($model);     
    }

    public function destroy($id)
    {
        $model= $this->modelService->deleteModel($id);
        return response()->json($model);
    }
}
