@extends('frontend.app')
@section('content')
    <div class="content">
        <div class="container">
            <div class="breadcrumbs-list bl_flat">
                <a href="{{ route('homepage') }}">Home</a><a href="{{ route('listing-search') }}">Properties</a>
                <div class="breadcrumbs-list_dec">
                    <i class="fa-thin fa-arrow-up"></i>
                </div>
            </div>
        </div>
        <!--single-carousle-container-->
        <div class="fw-carousel-container">
            <div class="fw-carousel-wrap">
                <!-- fw-carousel  -->
                <div class="fw-carousel lightgallery">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- swiper-slide-->

                            <div class="swiper-slide hov_zoom">
                                <img src="{{ asset('backend/img/' . $data['images']) }}" alt="Photo" />
                                <a href="" class="box-media-zoom popup-image"><i class="fal fa-search"></i></a>
                                <div class="show-info">
                                    <span>info</span>

                                </div>
                            </div>

                            <!-- swiper-slide end-->

                            <!-- swiper-slide end-->
                        </div>
                    </div>
                </div>
                <!-- fw-carousel end -->
            </div>
            <!-- fw-carousel-wrap end -->
            <div class="fw-carousel-button-prev slider-button">
                <i class="fa-solid fa-caret-left"></i>
            </div>
            <div class="fw-carousel-button-next slider-button">
                <i class="fa-solid fa-caret-right"></i>
            </div>
            <div class="fwc-controls_wrap">
                <div class="solid-pagination_btns fwc-pagination"></div>
            </div>
        </div>
        <!--single-carousle-container-->
        <div class="container">
            <div class="main-content">
                <div class="boxed-container">
                    <div class="row">
                        <div class="col-lg-8">
                            <!--boxed-container-->
                            <div class="scroll-content-wrap">
                                <div class="share-holder init-fix-column">
                                    <span class="share-title"> Share </span>
                                    <div class="share-container isShare"></div>
                                </div>
                                <div class="list-single-opt_header hsc_flat_bci">

                                    <div class="hero-opt-btnns">
                                        <a href="#" class="like-btn tolt" data-microtip-position="left"
                                            data-tooltip="Add to Wishlist"><i class="fa-light fa-heart"></i></a>
                                        <a href="#single_cf" class="custom-scroll-link tolt" data-microtip-position="left"
                                            data-tooltip="Contact to View"><i class="fa-light fa-envelope"></i></a>
                                    </div>
                                </div>
                                <!--boxed-content-->
                                <div class="boxed-content">
                                    <!--boxed-content-item-->
                                    <div class="boxed-content-item">
                                        <div class="hero-section-title_container hsc_flat">
                                            <div class="hero-section-title">
                                                <h2>{{ $data->property_title }}</h2>
                                                <h4>
                                                    <i class="fa-solid fa-location-dot"></i>
                                                    <span>{{ $data->address }}</span>
                                                </h4>
                                                <div class="property-single-header-price">
                                                    <strong>Price:</strong>
                                                    <span class="pshp_item"><span>$</span>{{ $data->price }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="hero-section-opt">
                                                <div class="property-single-header-date author_avatar_ps">
                                                    <a href="author-single.html">
                                                        <img src="frontend/images/announcer.jpg" alt="" /> By
                                                        {{ $data->user_id }}</a>
                                                </div>

                                                <div class="property-single-header-date">
                                                    <span>Status:</span>
                                                </div>
                                                <div class="hs-pv_wrap">
                                                    <div class="pv-item">
                                                        <i class="fa-light fa-glasses"></i>
                                                        <span> Viewed - <strong></strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--boxed-content-item end-->
                                </div>
                                <!--boxed-content end-->
                                <!--ps-facts-wrapper-->
                                <div class="ps-facts-wrapper">
                                    <!--ps-facts-item-->
                                    <div class="ps-facts-item">
                                        <h4>Bedroom</h4>
                                        <h5>{{ $data->bedroom }}</h5>
                                        <i class="fa-light fa-bed"></i>
                                    </div>
                                    <!--ps-facts-item end-->
                                    <!--ps-facts-item-->
                                    <div class="ps-facts-item">
                                        <h4>Bethroom</h4>
                                        <h5>{{ $data->bathroom }}</h5>
                                        <i class="fa-light fa-bath"></i>
                                    </div>
                                    <!--ps-facts-item end-->
                                    <!--ps-facts-item-->
                                    <div class="ps-facts-item">
                                        <h4>Area</h4>
                                        <h5>{{ $data->area }} ft</h5>
                                        <i class="fa-light fa-chart-area"></i>
                                    </div>
                                    <!--ps-facts-item end-->
                                    <!--ps-facts-item-->
                                    <div class="ps-facts-item">
                                        <h4>Parking</h4>
                                        <h5>{{ $data->parking }}</h5>
                                        <i class="fa-light fa-car"></i>
                                    </div>
                                    <!--ps-facts-item end-->
                                </div>
                                <!--ps-facts-wrapper end-->
                                <!--boxed-content-->
                                <div class="boxed-content">
                                    <!--boxed-content-title-->
                                    <div class="boxed-content-title">
                                        <h3>About this Property</h3>
                                    </div>
                                    <!--boxed-content-title end-->
                                    <!--boxed-content-item-->
                                    <div class="boxed-content-item">
                                        <p>
                                            {{ $data->details }}
                                        </p>
                                        <div class="pp-single-opt-wrap">
                                            <div class="pp-single-opt-links">
                                                <ul>
                                                    <li>
                                                        <a href="#" download><i class="fa-light fa-file-pdf"></i>
                                                            Download Brochure
                                                        </a>
                                                    </li>

                                                </ul>
                                                <a href="{{ url('$data->website') }}"
                                                    class="pp-single-opt-link_silngle">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--boxed-content-item end-->
                                </div>
                                <!--boxed-content end-->
                                <!--boxed-content-->
                                <div class="boxed-content">
                                    <!--boxed-content-title-->
                                    <div class="boxed-content-title">
                                        <h3>Property Amenities</h3>
                                    </div>
                                    <!--boxed-content-title end-->
                                    <!--boxed-content-item-->
                                    <div class="boxed-content-item">
                                        <div class="pp-single-opt">
                                            <div class="pp-single-features">
                                                <ul>
                                                    @if ($data->amenities)
                                                        @foreach (explode(',', $data->amenities) as $amenity)
                                                            <li>
                                                                <label>{{ trim($amenity) }}</label>
                                                            </li>
                                                        @endforeach
                                                    @else
                                                        <li>No amenities available.</li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--boxed-content-item end-->
                                </div>
                                <!--boxed-content end-->
                                <!--banner-widget-wrap-->
                                <div class="banner-widget-wrap">
                                    <div class="bg-wrap bg-parallax-wrap-gradien fs-wrapper">
                                        <div class="bg" data-bg="{{ asset('frontend/images/all/properties3.jpg') }}">
                                        </div>
                                    </div>
                                    <div class="banner-widget_content">
                                        <div class="video-box-btn" id="html5-videos" data-html="#video1">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        <h5><span>Property Video Presentation</span></h5>
                                    </div>
                                    <div style="display: none" id="video1" class="popup_video"
                                        data-videolink="video/1.mp4">
                                        <video class="lg-video-object lg-html5" controls preload="none">
                                            <source src="/" type="video/mp4" />
                                        </video>
                                    </div>
                                </div>
                                <!--banner-widget-wrap end-->


                                <!--boxed-content-->
                                <div class="boxed-content">
                                    <!--boxed-content-title-->
                                    <div class="boxed-content-title">
                                        <h3>Property Location</h3>
                                        <h3>{{ $data['address'] }}</h3>
                                    </div>
                                    <!--boxed-content-title end-->
                                    <!--boxed-content-item-->

                                    <!--boxed-content-item end-->
                                </div>
                                <!--boxed-content end-->
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!--boxed-container-->
                            <div class="sb-container">

                                <!--boxed-content-->
                                <div class="boxed-content">
                                    <!--boxed-content-title-->
                                    <div class="boxed-content-title">
                                        <h3>Property Tags</h3>
                                    </div>
                                    <!--boxed-content-title end-->
                                    <!--boxed-content-item-->
                                    <div class="boxed-content-item bc-item_smal_pad">
                                        <div class="tags-widget">
                                            {{ $data['keywords'] }}
                                        </div>
                                    </div>
                                    <!--boxed-content-item end-->
                                </div>
                                <!--boxed-content end-->
                                <!--boxed-content-->
                                <div class="fixed-form-wrap">
                                    <div class="fixed-form">
                                        <div class="boxed-content">
                                            <!--boxed-content-title-->
                                            <div class="boxed-content-title">
                                                <h3>Request a Showing</h3>
                                            </div>
                                            <!--boxed-content-title end-->
                                            <!--boxed-content-item-->
                                            <div class="boxed-content-item">
                                                <div class="property-contacts-wrap">
                                                    <div class="property-contacts-item sh-links">
                                                        <div class="property-contacts_profile">
                                                            <a href="agent-single.html"
                                                                class="property-contacts_profile_link">

                                                                <span>Agent:</span>
                                                            </a>
                                                        </div>
                                                        <div class="property-contacts-links">
                                                            <a href="tel:+18475555555" class="tolt pcl_btn"
                                                                data-microtip-position="left" data-tooltip="Call"><i
                                                                    class="fa-solid fa-phone"></i></a>
                                                            <a href="#" class="show-messenger-links pcl_btn tolt"
                                                                data-microtip-position="left"
                                                                data-tooltip="Write Message"><i
                                                                    class="fa-solid fa-message-sms"></i></a>
                                                        </div>
                                                        <div class="messenger-links-container">
                                                            <a href="#" class="tolt"
                                                                data-microtip-position="bottom" data-tooltip="Viber"><i
                                                                    class="fa-brands fa-viber"></i></a>

                                                            @php

                                                                $phoneNumber = 8801855487666;
                                                                $message = 'Interested for your property';
                                                            @endphp

                                                            <a href="https://wa.me/{{ $phoneNumber }}?text={{ urlencode($message) }}"
                                                                target="_blank" class="tolt"
                                                                data-microtip-position="bottom" data-tooltip="Whatsapp"><i
                                                                    class="fa-brands fa-whatsapp"></i></a>
                                                                    <a href="https://t.me/telegram/{{ $phoneNumber }}?text={{ urlencode($message) }}"
                                                                    target="_blank" class="tolt"
                                                                data-microtip-position="bottom" data-tooltip="Telegram"><i
                                                                    class="fa-brands fa-telegram"></i></a>
                                                            <a href="#" class="tolt"
                                                                data-microtip-position="bottom"
                                                                data-tooltip="Facebook Messenger"><i
                                                                    class="fa-brands fa-facebook-messenger"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="log-separator"><span>or</span></div>
                                                    <p>
                                                        Use the form below to select a viewing time
                                                        and date.
                                                    </p>
                                                </div>
                                                <div class="custom-form" id="single_cf">
                                                    <form action="/create_request" method="post">
                                                        @csrf

                                                        <div class="cs-intputwrap">



                                                            <input type="hidden" name="user_id"
                                                                value="{{ $data->user_id }}">
                                                            <input type="hidden" name="property_id"
                                                                value="{{ $data->id }}">
                                                            <input type="hidden" name="property_name"
                                                                value="{{ $data->property_title }}">
                                                            <input type="hidden" name="address"
                                                                value="{{ $data->address }}">

                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-user"></i>
                                                                <input name="name" type="text"
                                                                    placeholder="Your name" onClick="this.select()" />
                                                            </div>
                                                            <div class="cs-intputwrap">
                                                                <i class="fa-light fa-phone-office"></i>
                                                                <input name="phone" type="text"
                                                                    placeholder="Your Phone" onClick="this.select()" />
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="cs-intputwrap">
                                                                        <i class="fa-light fa-calendar"></i>
                                                                        <div class="date-container">
                                                                            <input type="date" placeholder="Date"
                                                                                id="request_date" name="request_date" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="cs-intputwrap">
                                                                        <i class="fa-light fa-calendar"></i>
                                                                        <select data-placeholder="Time"
                                                                            class="chosen-select on-radius no-search-select"
                                                                            name="request_time" id="request_time">
                                                                            <option value="09:00:00">9:00</option>
                                                                            <option value="10:00:00">10:00</option>
                                                                            <option value="11:00:00">11:00</option>
                                                                            <option value="12:00:00">12:00</option>
                                                                            <option value="13:00:00">13:00</option>
                                                                            <option value="14:00:00">14:00</option>
                                                                            <option value="15:00:00">15:00</option>
                                                                            <option value="16:00:00">16:00</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button onclick="window.location.href=''"
                                                                class="commentssubmit commentssubmit_fw">
                                                                Send Request
                                                            </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--boxed-content-item end-->
                                        </div>
                                    </div>
                                </div>
                                <!--boxed-content end-->
                            </div>
                        </div>
                    </div>
                    <div class="limit-box"></div>
                </div>
                <!--swiper-slide end -->



            </div>
        </div>
        <!--main-content end-->
        <div class="to_top-btn-wrap">
            <div class="to-top to-top_btn">
                <span>Back to top</span> <i class="fa-solid fa-arrow-up"></i>
            </div>
            <div class="svg-corner svg-corner_white" style="top: 0; left: -40px; transform: rotate(-90deg)"></div>
            <div class="svg-corner svg-corner_white" style="top: 0; right: -40px; transform: rotate(-180deg)"></div>
        </div>
    </div>
    <!-- container end-->
    </div>
@endsection
