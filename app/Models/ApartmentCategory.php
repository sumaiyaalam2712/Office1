<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentCategory extends Model
{
    use HasFactory;
    public function pOne()
    {
        return $this->hasMany(Property::class, 'apartment_category_id');
    }
}
