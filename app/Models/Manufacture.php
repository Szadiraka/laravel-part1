<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasMany;

class Manufacture extends Model
{
    use HasFactory;
    protected $table='manufactures';
    protected $fillable=['name'];

    public function pricedetails()
    {
        return $this->hasMany(Price_detail::class);
    }
}
