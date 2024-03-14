<?php

namespace App\Http\Controllers;
use App\Services\ManufactureService;
use App\Http\Controllers\Controller;
use App\Models\Manufacture;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    protected $manufactureService;
       public function __construct(ManufactureService $manufactureService)
       {
        $this->manufactureService = $manufactureService;
       }

      public function index()
    {
        $manufactures= $this->manufactureService->getAllManufactures();
        return response()->json($manufactures);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:manufactures|max:255',
        
        ]);
        $manufactures= $this->manufactureService->createManufacture($data);
         return response()->json($manufactures);           
    }

    public function show(Request $request)
    {
        $manufacture = $this->manufactureService->getManufactureById($request->$id);
        return response()->json($manufacture);
    }

    public function update(Request $request, Manufacture $manufacture)
    {
                  
        $id= $request->input('id');
        $data = $request->validate([
            'name' => 'required|unique:manufactures|max:255',
        ]);
        $manufacture = $this->manufactureService->updateManufacture($id, $data);
        return response()->json($manufacture);     
    }

    public function destroy($id)
    {
       $manufactures= $this->manufactureService->deleteManufacture($id);
       return responce()->json($manufactures);
    }




       
}
