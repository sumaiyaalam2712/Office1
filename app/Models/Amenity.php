<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Amenity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'status', 'slug'];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_amenity');
    }
}
