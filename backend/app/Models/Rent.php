<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\RentPhotos;

class Rent extends Model
{
    protected $fillable = [
        'title',
        'description',
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
