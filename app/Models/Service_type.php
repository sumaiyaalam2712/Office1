<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_type extends Model
{
    use HasFactory;

    public function pThree()
    {
        return $this->hasMany(Property::class,'service_type_id');
    }
}
