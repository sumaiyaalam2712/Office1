<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppartmentType extends Model
{
    use HasFactory, SoftDeletes;


    public function pTwo()
    {
        return $this->hasMany(Property::class,'appartment_type_id');
    }
}
