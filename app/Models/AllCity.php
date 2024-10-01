<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AllCity extends Model
{
    use HasFactory, SoftDeletes;
    public function pFour()
    {
        return $this->hasMany(Property::class, 'all_city_id');
    }

}
