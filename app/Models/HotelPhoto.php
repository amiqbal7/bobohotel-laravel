<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelPhoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'hotel_id',

    ];

    public function hotel()
    {
        // cek ini foto hotel yang mana
        return $this->belongsTo(Hotel::class);
    }
}
