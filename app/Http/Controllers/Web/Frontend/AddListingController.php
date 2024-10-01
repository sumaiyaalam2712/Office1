<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllCity;
use App\Models\ApartmentCategory;
use App\Models\AppartmentType;
use App\Models\Service_type;
use App\Models\Property;
use Illuminate\Http\Request;

class AddListingController extends Controller
{
    public function AddListing()
    {    $user=auth()->user()->id;
        $apartmentCategories = ApartmentCategory::all();
        $appartmentTypes = AppartmentType::all();
        $allCities = AllCity::all();
        $services = Service_type::all();
         return view('frontend.layout.add_listing', compact('user','apartmentCategories', 'appartmentTypes', 'allCities', 'services'));
    }
}
