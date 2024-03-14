<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;
use illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function priceDetails()
    {
        return $this->belongsToMany(Price_detail::class, 'orders_priceDetails', 'order_id', 'pricedetail_id');
    }

    public function typeRepairs()
    {
        return $this->belongsToMany(Type_repair::class, 'orders_typeRepairs', 'order_id', 'typerepair_id');
    }

    
}

// $user = User::with('orders.priceDetails.priceDetail', 'orders.typeRepairs.typeRepair')->find($userId);
