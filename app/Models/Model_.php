<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasMany;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class Model_ extends Model
{
    use HasFactory;
    protected $table='models';
    protected $fillable=['name','productRepair_id','productBrend_id'];

    public function productRepair()
    {
        return $this->belongsTo(Product_repair::class,'productRepair_id');
    }
    public function productBrend()
    {
        return $this->belongsTo(Product_brend::class,'productBrend_id');
    }

    public function pricedetails()
    {
        return $this->hasMany(Price_detail::class);
    }
}
