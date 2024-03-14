<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class price_detail extends Model
{
    use HasFactory;
    protected $table='price_details';
    protected $fillable=['name','price','model_id','category_id','manufacture_id'];


    public function model()
    {
        return $this->belongsTo(Model_::class);

    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class,'orders_priceDetails');
    }
}
