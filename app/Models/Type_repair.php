<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use illuminate\Database\Eloquent\Relations\HasMany;

class Type_repair extends Model
{
    use HasFactory;
    protected $table='type_repairs';
    protected $fillable=['name','productRepair_id','price','repairTime'];

    public function productRepair()
    {
        return $this->belongsTo(Product_repair::class,'productRepair_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class,'orders_typeRepairs');
    }

}
