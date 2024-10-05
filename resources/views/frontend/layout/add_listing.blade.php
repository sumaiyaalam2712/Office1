@extends('frontend.app')
@section('content')


    <div class="content">
        <!--container-->
        <div class="content">
            <!--container-->
            <div class="container">
                <!--breadcrumbs-list-->
                <div class="breadcrumbs-list bl_flat">
                    <a href="#">Home</a><span>Add New Listing</span>
                    <div class="breadcrumbs-list_dec">
                        <i class="fa-thin fa-arrow-up"></i>
                    </div>
                </div>
                <!--breadcrumbs-list end-->
                <!--main-content-->
                <div class="main-content ms_vir_height">
                    <!--boxed-container-->
                    <div class="boxed-container">
                        <div class="row">
                            <!-- pricing-column -->
                            <div class="col-lg-12">
                                <div class="dashboard-title">
                                    <div class="dashboard-title-item">
                                        <span>Add Propperty</span>
                                    </div>
                                </div>
                                <div class="db-container">
                                    <!--dasboard-content-item-->
                                    <div class="dasboard-content-item">

                                        <div class="dashboard-widget-title-single">
                                            Basic Informations
                                        </div>
                                    </div>



                                        <form action="/create_property" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        <div class="custom-form">

                                                <div class="row">
                                                    <input type="hidden"
                                                    name="user_id" value="{{$user}}" >
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-input-text"></i>
                                                            <input type="text" placeholder="Main Title"
                                                                name="property_title" />
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-building"></i>
                                                            <select data-placeholder="Category" name="apartment_category_id"
                                                                id="apartment_category_id"
                                                                class="chosen-select on-radius no-search-select">

                                                                @foreach ($apartmentCategories as $category)
                                                                    <option value="{{ $category['id'] }}"
                                                                        {{ old('apartment_category_id') == $category['id'] ? 'selected' : '' }}>
                                                                        {{ $category->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-layer-group"></i>
                                                            <select data-placeholder="Type"
                                                                class="chosen-select on-radius no-search-select"
                                                                name="appartment_type_id" id="appartment_type_id">

                                                                @foreach ($appartmentTypes as $type)
                                                                    <option value="{{ $type['id'] }}"
                                                                        {{ old('appartment_type_id') == $type['id'] ? 'selected' : '' }}>
                                                                        {{ $type->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-money-bill"></i>
                                                            <input type="text" placeholder="Price" name="price" />
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                    </div>


                                                    <div class="col-lg-3">
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-layer-group"></i>
                                                            <select data-placeholder="Service Type"
                                                                class="chosen-select on-radius no-search-select"
                                                                name="service_type_id" id="service_type_id">

                                                                @foreach ($services as $service)
                                                                    <option value="{{ $service['id'] }}"
                                                                        {{ old('service_type_id') == $service['id'] ? 'selected' : '' }}>
                                                                        {{ $service->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-tags"></i>
                                                            <input type="text" placeholder="Keywords" name="keywords" />
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                    </div>
                                                </div>

                                    <!--dasboard-content-item end-->
                                    <!--dasboard-content-item-->
                                    <div class="dasboard-content-item" style="margin-top: 20px">
                                        <div class="dashboard-widget-title-single">
                                            Location / Contacts
                                        </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-phone-office"></i>
                                                        <input type="text" placeholder="Phone" name="phone" />
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-envelope"></i>
                                                        <input type="email" placeholder="E-mail" name="email" />
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-city"></i>
                                                        <select data-placeholder="City"
                                                            class="chosen-select on-radius no-search-select"
                                                            name="city_id" id="city_id">

                                                            @foreach ($allCities as $city)
                                                                <option value="{{ $city['id'] }}"
                                                                    {{ old('city_id') == $city['id'] ? 'selected' : '' }}>
                                                                    {{ $city['name'] }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <!-- listsearch-input-item end-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-light fa-address-card"></i>
                                                        <input type="text" placeholder="Adress" name="address" />
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                            </div>


                                        </div>
                                    <!--dasboard-content-item end-->
                                    <!--dasboard-content-item-->
                                    <div class="dasboard-content-item" style="margin-top: 20px">
                                        <div class="dashboard-widget-title-single">
                                            Upload Property Media
                                        </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- listsearch-input-item -->
                                                    <!-- listsearch-input-item -->

                                                        <div class="fu-text">
                                                            <span><i class="fa-light fa-cloud-arrow-up"></i>
                                                                Click here or drop files to upload</span>
                                                            <div class="photoUpload-files fl-wrap"></div>
                                                        </div>
                                                        <input type="file" class="upload" name="images"/>

                                                    <!-- listsearch-input-item -->
                                                </div>
                                            </div>
                                        </div>

                                    <!--dasboard-content-item end-->
                                    <!--dasboard-content-item-->
                                    <div class="dasboard-content-item" style="margin-top: 20px">
                                        <div class="dashboard-widget-title-single">
                                            Property Details
                                        </div>


                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-chart-area"></i>
                                                                <input type="text" placeholder="Area:"
                                                                    name="area" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-bed"></i>
                                                                <input type="text" placeholder="Bedrooms:"
                                                                    name="bedroom" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-bath"></i>
                                                                <input type="text" placeholder="Bathrooms:"
                                                                    name="bathroom" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-car"></i>
                                                                <input type="text" placeholder="Parking:"
                                                                    name="parking" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-users"></i>
                                                                <input type="text" placeholder="Accomodation:"
                                                                    name="accommodation" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- listsearch-input-item -->
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-globe-pointer"></i>
                                                                <input type="text" placeholder="Web site:"
                                                                    name="website" />
                                                            </div>
                                                            <!-- listsearch-input-item -->
                                                        </div>
                                                    </div>

                                                <div class="col-lg-6">
                                                    <div class="cs-intputwrap">
                                                        <textarea name="details" id="details" cols="40" rows="3" placeholder="Property Details:"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="dashboard-widget-title-single">
                                                        Amenities:
                                                    </div>
                                                    <ul class="filter-tags no-list-style ds-tg">
                                                        <li>
                                                            <input id="check-aaa5" type="checkbox" name="amenities[]"
                                                                value="Wi Fi" checked="" />
                                                            <label for="check-aaa5"> Wi Fi</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-bb5" type="checkbox"
                                                                name="amenities[]"value="Swimming" checked="" />
                                                            <label for="check-bb5">Swimming</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-dd5" type="checkbox" name="amenities[]"
                                                                value="Security" />
                                                            <label for="check-dd5"> Security</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-cc5" type="checkbox" name="amenities[]"
                                                                value="Laundry Room" />
                                                            <label for="check-cc5"> Laundry Room</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-ff5" type="checkbox" name="amenities[]"
                                                                value="Equipped Kitchen" checked="" />
                                                            <label for="check-ff5">
                                                                Equipped Kitchen</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-c4" type="checkbox" name="amenities[]"
                                                                value="Air Conditioning" />
                                                            <label for="check-c4">Air Conditioning</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-c18" type="checkbox" name="amenities[]"
                                                                value="Parking" />
                                                            <label for="check-c18">Parking</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-bb53" type="checkbox" name="amenities[]"
                                                                value="Garage Attached" checked="" />
                                                            <label for="check-bb53">Garage Attached</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-dd54" type="checkbox" name="amenities[]"
                                                                value="Fireplace" />
                                                            <label for="check-dd54"> Fireplace</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-cc555" type="checkbox" name="amenities[]"
                                                                value="Window Covering" />
                                                            <label for="check-cc555">
                                                                Window Covering</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-ff511" type="checkbox" name="amenities[]"
                                                                value="Back yard" checked="" />
                                                            <label for="check-ff511">Back yard</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-c444" type="checkbox" name="amenities[]"
                                                                value="Fitness Gym" />
                                                            <label for="check-c444">Fitness Gym</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-c1843" type="checkbox" name="amenities[]"
                                                                value="Elevator in building" />
                                                            <label for="check-c1843">Elevator in building</label>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="dashboard-widget-title-single">
                                                        Upload Plans and Brochure:
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                    <!--<form class="fuzone"> -->
                                                    <div class="fu-text">
                                                        <span><i class="fa-light fa-cloud-arrow-up"></i>
                                                            Click here or drop files to upload</span>
                                                        <div class="photoUpload-files fl-wrap"></div>
                                                    </div>
                                                    <input type="file" class="upload" name="brochure" />
                                                </div>
                                            </div>
                                        </div>
                                                    <input type="submit" value="Save Your Property"style="margin-top: 10px">



                                                    </form>
                                                    <!--</form>
                                                         listsearch-input-item -->

                                        </div>



                                    <!--dasboard-content-item end-->
                                </div>


                            <!-- pricing-column end-->

                        <div class="limit-box"></div>
                    </div>
                    <!--boxed-container end-->
                </div>
                <!--main-content end-->
                <div class="to_top-btn-wrap">
                    <div class="to-top to-top_btn">
                        <span>Back to top</span> <i class="fa-solid fa-arrow-up"></i>
                    </div>
                    <div class="svg-corner svg-corner_white" style="top: 0; left: -40px; transform: rotate(-90deg)"></div>
                    <div class="svg-corner svg-corner_white" style="top: 0; right: -40px; transform: rotate(-180deg)">
                    </div>
                </div>
            </div>
            <!-- container end-->
        </div>
        <!-- container end-->
    </div>
    <script>
        $('.dropify').dropify();
    </script>
@endsection
