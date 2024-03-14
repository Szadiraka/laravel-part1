<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasMany;

class product_brend extends Model
{
    use HasFactory;
    protected $table='product_brends';
    protected $fillable=['name'];

    public function models()
    {
        return $this->hasMany(Model_::class);
    }
}
