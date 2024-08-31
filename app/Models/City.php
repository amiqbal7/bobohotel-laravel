<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    // fillable adalah data yang diisi pengguna saja
    protected $fillable = [
        'name',
        'slug',
    ];

    public function hotels() {
        return $this->hasMany(Hotel::class);
    }
}
