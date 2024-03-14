<?php
namespace App\Services;
use App\Models\Manufacture;
class ManufactureService
{

    public function  getAllManufactures()
    {
        return Manufacture::all();
    }

    public function getManufactureById($id)
    {
        return Manufacture::find($id);
    }

    public function createManufacture(array $data)
    {
        return Manufacture::create($data);
    }

    public function updateManufacture( $id, array $data)
    {
        $manufacture= Manufacture::find($id);
        
        return $manufacture->update($data);
    }

    public function deleteManufacture( $id)
    {
        $manufacture= Manufacture::find($id);
        return $manufacture->delete();
        
    }
}