<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;
    protected $table='messages';
    protected $fillable=['sender_id','text','receiver_id'];

    // public function sender()
    // {
    //     return $this->belongsTo(User::class, 'sender_id');
    // }

    // public function receiver()
    // {
    //     return $this->belongsTo(User::class, 'receiver_id');
    // }
}
