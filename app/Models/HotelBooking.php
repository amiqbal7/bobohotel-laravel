<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelBooking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'proof',
        'checkin_at',
        'checkout_at',
        'total_days',
        'total_amount',
        'user_id',
        'hotel_id',
        'is_paid',
        'room_id',
    ];

    //
    public function customer() {
        // cek user mana yang booking
        return $this->belongsTo(User::class, 'user_id');
    }
    public function hotels() {
        // cek hotel mana yang sedang di book
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }
    public function room() {
        // cek room mana yg di book
        return $this->belongsTo(HotelRoom::class, 'room_id');
    }

}



