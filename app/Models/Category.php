<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=['name'];

    public function pricedetails()
    {
        return $this->hasMany(Price_detail::class);
    }
}
