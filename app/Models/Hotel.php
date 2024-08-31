<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'address',
        'link_gmaps',
        'city_id',
        'country_id',
        'star_level'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function photos()
    {
        return $this->hasMany(HotelPhoto::class);
    }
    public function rooms()
    {
        return $this->hasMany(HotelRoom::class);
    }
    // public static $rules = [
    //     'star_level' => 'required|integer|min:1|max:5',
    // ];

    public function getLowestRoomPrice()
    {
        $minPrice = $this->rooms()->min('price');
        return $minPrice ?? 0;
    }
}
