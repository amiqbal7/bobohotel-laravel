<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelRoom extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'photo',
        'price',
        'total_people',
        'hotel_id'

    ];

    public function hotel()
    {
        // cek ini dluxe atau premium hotel yang mana
        return $this->belongsTo(Hotel::class);
    }

}

