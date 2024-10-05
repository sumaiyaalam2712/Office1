<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory;
    // protected $fillable = ['user_id', 'category_id', 'appartment_type_id', 'property_title', 'price', 'keyword', 'phone', 'email', 'all_cities_id', 'address', 'area', 'bedroom', 'parking', 'accomudation', 'website', 'details', 'brochure_pdf'];
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function apartmentcategory()
    {
        return $this->belongsTo(ApartmentCategory::class);
    }

    public function appartmenttype()
    {
        return $this->belongsTo(AppartmentType::class,'appartment_type_id');
    }

    public function city()
    {
        return $this->belongsTo(AllCity::class, 'all_city_id');
    }
    public function servicetype()
    {
        return $this->belongsTo(Service_type::class, 'service_type_id');
    }


}
