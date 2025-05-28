<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rent;

class RentPhotos extends Model
{
    public function rent()
    {
        return $this->belongsTo(Rent::class);
    }
}
