<?php
namespace App\Services;
use App\Models\Model_;
use App\Models\Product_brend;
use App\Models\Product_repair;
class ModelService
{

    public function  getAllModels()
    {
        return Model_::all();
    }
    public function modelAllItems()
    {
    
         return $models = Model_::with('productBrend', 'productRepair')->get();
    
    }
    public function getModelById($id)
    {
        return Model_::find($id);
    }

    public function createModel(array $data)
    {
        return Model_::create($data);
    }

    public function updateModel($id, array $data)
    {
        $model= Model_::find($id);
        
        return $model->update($data);
    }

    public function deleteModel( $id)
    {
        $model= Model_::find($id);
        
        return $model->delete();
    }
}