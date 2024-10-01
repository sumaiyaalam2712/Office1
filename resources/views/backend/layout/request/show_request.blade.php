@extends('frontend.app')
@section('content')

<!--header-->
<header class="main-header">
    <div class="container">
        <div class="header-inner">
            <a href="index.html" class="logo-holder"><img src="images/logo.png" alt=""></a>
            <!--  navigation -->
            <div class="nav-holder main-menu">
                <nav>
                    <ul class="no-list-style">
                        <li>
                            <a href="#" class="act-link">Home <i class="fa-solid fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <li><a href="index.html">Slider</a></li>
                                <li><a href="index2.html">Video</a></li>
                                <li><a href="index3.html">Slideshow</a></li>
                                <li><a href="index4.html">Parallax Image</a></li>
                                <li><a href="dashboard.html">User Dasboard</a></li>
                            </ul>
                            <!--second level end-->
                        </li>
                        <li>
                            <a href="#">Listings <i class="fa-solid fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <li><a href="listing.html">Style 1</a></li>
                                <li><a href="listing2.html">Style 2</a></li>
                                <li><a href="listing3.html">Style 3</a></li>
                                <li><a href="listing4.html">Style 4</a></li>
                                <li>
                                    <a href="#">Single <i class="fa-solid fa-caret-right"></i></a>
                                    <!--third  level  -->
                                    <ul>
                                        <li><a href="listing-single.html">Style 1</a></li>
                                        <li><a href="listing-single2.html">Style 2</a></li>
                                        <li><a href="listing-single3.html">Style 3</a></li>
                                    </ul>
                                    <!--third  level end-->
                                </li>
                            </ul>
                            <!--second level end-->
                        </li>
                        <li>
                            <a href="blog.html">News</a>
                        </li>
                        <li>
                            <a href="#">Pages <i class="fa-solid fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="agent-single.html">Agent single</a></li>
                                <li><a href="help.html">How it Works</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="add-listing.html">Add Listing</a></li>
                            </ul>
                            <!--second level end-->
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- navigation  end -->
            <!-- nav-button-wrap-->
            <div class="nav-button-wrap">
                <div class="nav-button">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <!-- nav-button-wrap end-->
            <!-- header-search-wrap  -->
            <div class="header-search-wrap novis_search">
                <div class="header-search">
                    <div class="header-search-nav">
                        <div class="header-search-nav_container">
                            <div class="header-search-radio">
                                <input class="hidden radio-label" type="radio" name="accept-offers" id="sale-button" checked="checked">
                                <label class="button-label" for="sale-button">Sale</label>
                                <input class="hidden radio-label" type="radio" name="accept-offers" id="rent-button">
                                <label class="button-label" for="rent-button">Rent</label>
                                <input class="hidden radio-label" type="radio" name="accept-offers" id="comm-button">
                                <label class="button-label" for="comm-button">Commercial</label>
                            </div>
                        </div>
                    </div>
                    <div class="header-search-container">
                        <div class="custom-form">
                            <!-- listsearch-input-item -->
                            <div class="cs-intputwrap">
                                <i class="fa-light fa-house"></i>
                                <input type="text"   placeholder="Keywords..." value="">
                            </div>
                            <!-- listsearch-input-item -->
                            <!-- listsearch-input-item -->
                            <div class="cs-intputwrap">
                                <i class="fa-light fa-location-dot"></i>
                                <input type="text"   placeholder="Location..." value="">
                            </div>
                            <!-- listsearch-input-item -->
                            <!-- listsearch-input-item -->
                            <div class="cs-intputwrap">
                                <div class="price-range-wrap ">
                                    <label>Price Range</label>
                                    <div class="price-rage-item">
                                        <input type="text" class="price-range-double" data-min="100" data-max="100000"  name="price-range1"  data-step="1" value="1" data-prefix="$">
                                    </div>
                                </div>
                            </div>
                            <!-- listsearch-input-item -->
                            <button onclick="window.location.href='listing.html'" class="commentssubmit commentssubmit_fw">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-wrap  end -->
            <div class="header-search-btn tolt" data-microtip-position="bottom"  data-tooltip="Search"><i class="fa-regular fa-magnifying-glass"></i> </div>
            <a href="add-listing.html" class="header-btn"><span>Add Your Propperty</span></a>
            <div class="wish_btn swl_btn tolt" data-microtip-position="bottom"  data-tooltip="Wishlist">
                <div class="wish_btn-item"><i class="fa-thin fa-heart"></i><span class="wish_count">3</span></div>
            </div>
            <div class="header-user-menu">
                <div class="header-user-name">
                    <span>Hello , <strong> Alisa</strong></span>
                    <img src="images/avatar/1.jpg" alt="">
                </div>
                <div class="header-user-menu_wrap">
                    <ul>
                        <li><a href="dashboard.html" class="hum_act"> Dashboard</a></li>
                        <li><a href="dashboard-editprofile.html"> Edit profile</a></li>
                        <li><a href="add-listing.html"> Add Listing</a></li>
                        <li><a href="dashboard-properties.html">  Properties</a></li>
                    </ul>
                    <a href="index.html" class="hum_log-out_btn"><i class="fa-light fa-power-off"></i> Log Out  </a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="body-overlay fs-wrapper search-form-overlay close-search-form"></div>
<!--header-end-->
<!--warpper-->
<div class="wrapper">
    <!--content-->
    <div class="content">
        <!--container-->
        <div class="container">
            <!--breadcrumbs-list-->
            <div class="breadcrumbs-list bl_flat">
                <a href="#">Home</a><a href="#">Dashboard</a><span>Requests</span>
                <div class="breadcrumbs-list_dec"><i class="fa-thin fa-arrow-up"></i></div>
            </div>
            <!--breadcrumbs-list end-->
            <!--main-content-->
            <div class="main-content  ms_vir_height">
                <!--boxed-container-->
                <div class="boxed-container">
                    <div class="row">
                        <!-- user-dasboard-menu_wrap -->
                        <div class="col-lg-3">
                            <div class="boxed-content btf_init">
                                <div class="user-dasboard-menu_wrap">
                                    <div class="user-dasboard-menu-header">
                                        <div class="user-dasboard-menu_header-avatar">
                                            <img src="images/avatar/1.jpg" alt="">
                                            <span>Welcome :  <strong> Alisa</strong></span>
                                            <a href="dashboard-editprofile.html" class="usmha_edit tolt" data-microtip-position="left"  data-tooltip="Edit Profile"><i class="fa-light fa-user-pen"></i></a>
                                            <div class="db-menu_modile_btn"><strong>Menu</strong><i class="fa-regular fa-bars"></i></div>
                                        </div>
                                    </div>
                                    <div class="user-dasboard-menu faq-nav ">
                                        <ul>
                                            <li><a href="dashboard.html"> Dashboard</a></li>
                                            <li><a href="dashboard-listing.html"> Your Advertisements </a></li>
                                            <li><a href="dashboard-requests.html"  class="act-scrlink"> Your  Requests <span>6</span> </a></li>
                                            <li><a href="add-listing.html"> Add New Propperty </a></li>
                                            <li><a href="dashboard-editprofile.html">  Edit profile</a></li>
                                        </ul>
                                        <a href="index.html" class="hum_log-out_btn"><i class="fa-light fa-power-off"></i> Log Out  </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- user-dasboard-menu_wrap end-->
                        <!-- pricing-column -->
                        <div class="col-lg-9">
                            <div class="dashboard-title">
                                <div class="dashboard-title-item"><span> Your  Requests <strong>6</strong> </span></div>
                                <!--Tariff Plan menu-->
                                <div class="tfp-det-container">
                                    <div class="db-date"><i class="fa-regular fa-calendar"></i><strong></strong></div>
                                    <div class="tfp-btn"><span>Your Tariff Plan : </span> <strong>Extended</strong></div>
                                    <div class="tfp-det">
                                        <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
                                        <a href="#" class="tfp-det-btn color-bg">View Details <i class="fa-solid fa-caret-right"></i></a>
                                    </div>
                                </div>
                                <!--Tariff Plan menu end-->
                            </div>
                            <div class="db-container">
                                <div class="dasboard-opt-header">
                                    <div class="dashboard-search-listing">
                                        <input type="text" onclick="this.select()" placeholder="Search" value="">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                    <div class="db-price-opt-container">
                                        <!-- price-opt-->
                                        <div class="db-price-opt">
                                            <span class="price-opt-title">Sort   by:</span>
                                            <div class="cs-intputwrap" style="margin-bottom: 0">
                                                <i class="fa-light fa-arrow-down-small-big"></i>
                                                <select data-placeholder="Popularity" class="chosen-select no-search-select">
                                                    <option>Lastes</option>
                                                    <option>Oldes</option>
                                                    <option>Name: A-Z</option>
                                                    <option>Name: Z-A</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- price-opt end-->
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- bookings-item -->
                                    @foreach ($infos as $info)
                                    <div class="col-lg-6">
                                        <div class="bookings-item">
                                            <div class="bookings-item-header">
                                                <img src="images/all/thumbnails/1.jpg" alt="">
                                                <h4>For <a href="listing-single.html" target="_blank">Gorgeous house for sale</a></h4>
                                                <span class="new-bookmark">New</span>
                                            </div>
                                            <div class="bookings-item-content">

                                                <ul>
                                                    <li>Name: <span>{{$info['name']}}</span></li>
                                                    <li>Phone: <span>{{$info['phone']}}</span></li>
                                                    <li>Date: <span>{{$info['request_date']}}</span></li>
                                                    <li>Time: <span>{{$info['request_time']}}</span></li>
                                                </ul>

                                            </div>
                                            <div class="bookings-item-footer">
                                                <span class="message-date"><i class="fa-regular fa-calendar"></i> 12 May 2024</span>
                                                <ul>
                                                    <li><a href="#" class="tolt" data-microtip-position="left" data-tooltip="Call"><i class="fa-regular fa-phone"></i></a></li>
                                                    <li><a href="#" class="tolt" data-microtip-position="left" data-tooltip="Delete"><i class="fa-regular fa-trash-can"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- bookings-item end -->

                            </div>
                            <div class="pagination-wrap">
                                <div class="pagination float-pagination">
                                    <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                    <a href="#">1</a>
                                    <a href="#" class="current-page">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                </div>
                                <div class="load-more_btn"><i class="fa-solid fa-arrows-spin"></i>Load More</div>
                            </div>
                        </div>
                        <!-- pricing-column end-->
                    </div>
                    <div class="limit-box"></div>
                </div>
                <!--boxed-container end-->
            </div>
            <!--main-content end-->
            <div class="to_top-btn-wrap">
                <div class="to-top to-top_btn"><span>Back to top</span> <i class="fa-solid fa-arrow-up"></i></div>
                <div class="svg-corner svg-corner_white"  style="top:0;left:  -40px; transform: rotate(-90deg)"></div>
                <div class="svg-corner svg-corner_white"  style="top:0;right: -40px; transform: rotate(-180deg)"></div>
            </div>
        </div>
        <!-- container end-->
    </div>
    <!--content  end-->
    <!--main-footer-->
    <div class="height-emulator"></div>
    <footer class="main-footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <!-- footer-widget -->
                    <div class="col-lg-4">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Get Our Application</div>
                            <div class="footer-widget-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="api-links-wrap">
                                    <a href="#" class="footer-widget-content-link"><span> On Apple Store</span><i class="fa-brands fa-apple"></i></a>
                                    <a href="#" class="footer-widget-content-link"><span> On Google PLay</span><i class="fa-brands fa-google-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Helpful links</div>
                            <div class="footer-widget-content">
                                <div class="footer-list footer-box  ">
                                    <ul>
                                        <li><a href="#">Our last News</a></li>
                                        <li><a href="#">Pricing Plans</a></li>
                                        <li><a href="#">Contacts</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Our Contacts</div>
                            <div class="footer-widget-content">
                                <div class="footer-list footer-box  ">
                                    <ul  class="footer-contacts  ">
                                        <li><span>Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                        <li> <span>Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                        <li><span>Phone :</span><a href="#">+2(111)123456789</a></li>
                                    </ul>
                                    <a href="contacts.html" class="footer-widget-content-link"><span>Get in Touch</span><i class="fa-solid fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-lg-4">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Subscribe</div>
                            <div class="footer-widget-content">
                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                <form id="subscribe"   class="subscribe-item">
                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                    <button type="submit" id="subscribe-button" class="subscribe-button"><span>Send</span> </button>
                                    <label for="subscribe-email" class="subscribe-message"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                </div>
                <!-- footer-widget-wrap end-->
            </div>
            <div class="footer-bottom">
                <a href="index.html" class="footer-home_link"><i class="fa-regular  fa-house"></i></a>
                <div class="copyright"> <span>&#169;Renstate 2024</span> . All rights reserved. </div>
                <div class="footer-social">
                    <span class="footer-social-title">Follow Us</span>
                    <div class="footer-social-wrap">
                        <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--main-footer end-->
</div>
<!--warpper end-->
<!--wish-list-wrap-->
<div class="wish-list-wrap">
    <div class="wish-list-close clwl_btn"><i class="fa-regular fa-xmark"></i></div>
    <div class="wish-list_header">
        <div class="wish-list-title">Your Wishlist <span>3</span></div>
    </div>
    <div class="wish-list-container">
        <!--wish-list-item-->
        <div class="wish-list-item fl-wrap">
            <div class="wish-list-img"><a href="listing-single.html"><img src="images/all/thumbnails/1.jpg" alt=""></a>
            </div>
            <div class="wish-list-descr">
                <h4><a href="listing-single.html">Urban House</a></h4>
                <div class="geodir-category-location fl-wrap"><a href="#"> 40 Journal Square  , NJ, USA</a></div>
                <div class="wish-list-price"> $ 320,000</div>
                <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
            </div>
        </div>
        <!--wish-list-item end-->
        <!--wish-list-item-->
        <div class="wish-list-item fl-wrap">
            <div class="wish-list-img"><a href="listing-single.html"><img src="images/all/thumbnails/1.jpg" alt=""></a>
            </div>
            <div class="wish-list-descr">
                <h4><a href="listing-single.html">Luxury Family Home</a></h4>
                <div class="geodir-category-location fl-wrap"><a href="#">  40 Journal Square  , NJ, USA</a></div>
                <div class="wish-list-price">  $ 1500 - per month</div>
                <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
            </div>
        </div>
        <!--wish-list-item end-->
        <!--wish-list-item-->
        <div class="wish-list-item fl-wrap">
            <div class="wish-list-img"><a href="listing-single.html"><img src="images/all/thumbnails/1.jpg" alt=""></a>
            </div>
            <div class="wish-list-descr">
                <h4><a href="listing-single.html">Modern Apartment</a></h4>
                <div class="geodir-category-location fl-wrap"><a href="#">  40 Journal Square  , NJ, USA</a></div>
                <div class="wish-list-price"> $ 1,600,000</div>
                <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
            </div>
        </div>
        <!--wish-list-item end-->
    </div>
    <div class="wish-list-footer">
        <div class="clear_wishlist">  Clear Wishlist</div>
    </div>
</div>
<div class="body-overlay fs-wrapper wishlist-wrap-overlay clwl_btn"></div>
<!--wish-list-wrap end-->
<!-- progress-bar  -->
<div class="progress-bar-wrap">
    <div class="progress-bar color-bg"></div>
</div>
<!-- progress-bar end -->


@endsection