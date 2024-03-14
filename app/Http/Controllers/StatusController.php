<?php

namespace App\Http\Controllers;

use App\Services\StatusService;
use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    protected $statusService;
       public function __construct(StatusService $statusService)
       {
        $this->statusService = $statusService;
       }

      public function index()
    {
        $statuses= $this->statusService->getAllStatuses();
        return response()->json($statuses);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);
        $statuses= $this->statusService->createStatus($data);
         return response()->json($statuses);           
    }

    public function show(Request $request)
    {
        $status = $this->statusService->getStatusById($request->$id);
        return response()->json($status);
    }

    public function update(Request $request, Status $status)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);
        $status = $this->statusService->updateStatus($status, $data);
        return response()->json($status);     
    }

    public function destroy(Status $status)
    {
       $statuses= $this->statusService->deleteStatus($status);
       return responce()->json($statuses);
    }
       
}

