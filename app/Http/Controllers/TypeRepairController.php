<?php

namespace App\Http\Controllers;
use App\Services\TypeRepairService;
use App\Http\Controllers\Controller;
use App\Models\Type_repair;
use App\Models\Products_repair;
use Illuminate\Http\Request;


class TypeRepairController extends Controller
{
    protected $typeRepairService;
    public function __construct(TypeRepairService $typeRepairService)
    {
     $this->typeRepairService = $typeRepairService;
    }

   public function index()
 {
     $typeRepairs= $this->typeRepairService->getAllTypeRepairs();
     return response()->json($typeRepairs);
 }

 public function store(Request $request)
 {
     $data = $request->validate([
         'name' => 'required|max:255',
         'productRepair_id'=> 'required|exists:product_repairs,id',
         'price'=> 'required|integer',
         'repairTime'=> 'required|max:255',
     ]);
     $typeRepairs= $this->typeRepairService->createTypeRepair($data);
      return response()->json($typeRepairs);           
 }

 public function show(Request $request)
 {
     $typeRepairs = $this->typeRepairService->getTypeRepairById($request->$id);
     return response()->json($typeRepairs);
 }

 public function update(Request $request, Type_repair $typeRepair)
 {
    $id= $request->input('id');
     $data = $request->validate([
        'name' => 'required|max:255',
         'productRepair_id'=> 'required|exists:product_repairs,id',
         'price'=> 'required| integer',
         'repairTime'=> 'required|max:255',
     ]);
     $typeRepairs = $this->typeRepairService->updateTypeRepair($id, $data);
     return response()->json($typeRepairs);     
 }

 public function destroy($id)
 {
    $typeRepairs= $this->typeRepairService->deleteTypeRepair($id);
    return response()->json($typeRepairs);
 }

 public function getTypeRepairsWithChild()
    {
        $results= $this->typeRepairService->getAllTypeDetailsWithDetails();
        return response()->json($results);
    }
}
