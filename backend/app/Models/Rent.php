<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\RentPhotos;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rent extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'address',
        'rooms',
        'user_id',
    ];

    protected $table = 'rent';

    public function photos()
    {
        return $this->hasMany(RentPhotos::class);
    }
}
