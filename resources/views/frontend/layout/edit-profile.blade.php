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
                                    <input class="hidden radio-label" type="radio" name="accept-offers" id="sale-button"
                                        checked="checked">
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
                                    <input type="text" placeholder="Keywords..." value="">
                                </div>
                                <!-- listsearch-input-item -->
                                <!-- listsearch-input-item -->
                                <div class="cs-intputwrap">
                                    <i class="fa-light fa-location-dot"></i>
                                    <input type="text" placeholder="Location..." value="">
                                </div>
                                <!-- listsearch-input-item -->
                                <!-- listsearch-input-item -->
                                <div class="cs-intputwrap">
                                    <div class="price-range-wrap ">
                                        <label>Price Range</label>
                                        <div class="price-rage-item">
                                            <input type="text" class="price-range-double" data-min="100"
                                                data-max="100000" name="price-range1" data-step="1" value="1"
                                                data-prefix="$">
                                        </div>
                                    </div>
                                </div>
                                <!-- listsearch-input-item -->
                                <button onclick="window.location.href='listing.html'"
                                    class="commentssubmit commentssubmit_fw">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-search-wrap  end -->
                <div class="header-search-btn tolt" data-microtip-position="bottom" data-tooltip="Search"><i
                        class="fa-regular fa-magnifying-glass"></i> </div>
                <a href="add-listing.html" class="header-btn"><span>Add Your Propperty</span></a>
                <div class="wish_btn swl_btn tolt" data-microtip-position="bottom" data-tooltip="Wishlist">
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
                            <li><a href="dashboard-properties.html"> Properties</a></li>
                        </ul>
                        <a href="index.html" class="hum_log-out_btn"><i class="fa-light fa-power-off"></i> Log Out </a>
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
                    <a href="#">Home</a><a href="#">Dashboard</a><span>Edit Profile</span>
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
                                                <span>Welcome : <strong> Alisa</strong></span>
                                                <a href="dashboard-editprofile.html" class="usmha_edit tolt"
                                                    data-microtip-position="left" data-tooltip="Edit Profile"><i
                                                        class="fa-light fa-user-pen"></i></a>
                                                <div class="db-menu_modile_btn"><strong>Menu</strong><i
                                                        class="fa-regular fa-bars"></i></div>
                                            </div>
                                        </div>
                                        <div class="user-dasboard-menu faq-nav ">
                                            <ul>
                                                <li><a href="dashboard.html"> Dashboard</a></li>
                                                <li><a href="dashboard-listing.html"> Your Advertisements </a></li>
                                                <li><a href="dashboard-requests.html"> Your Requests <span>6</span> </a>
                                                </li>
                                                <li><a href="add-listing.html"> Add New Propperty </a></li>
                                                <li><a href="dashboard-editprofile.html" class="act-scrlink"> Edit
                                                        profile</a></li>
                                            </ul>
                                            <a href="index.html" class="hum_log-out_btn"><i
                                                    class="fa-light fa-power-off"></i> Log Out </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- user-dasboard-menu_wrap end-->
                            <!-- pricing-column -->
                            <div class="col-lg-9">
                                <div class="dashboard-title">
                                    <div class="dashboard-title-item"><span>Edit your profile</span></div>
                                    <!--Tariff Plan menu-->
                                    <div class="tfp-det-container">
                                        <div class="db-date"><i class="fa-regular fa-calendar"></i><strong></strong></div>
                                        <div class="tfp-btn"><span>Your Tariff Plan : </span> <strong>Extended</strong>
                                        </div>
                                        <div class="tfp-det">
                                            <p>You Are on <a href="#">Extended</a> . Use link bellow to view details
                                                or upgrade. </p>
                                            <a href="#" class="tfp-det-btn color-bg">View Details <i
                                                    class="fa-solid fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                    <!--Tariff Plan menu end-->
                                </div>
                                <div class="db-container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!--dasboard-content-item-->
                                            <div class="dasboard-content-item">
                                                <div class="dashboard-widget-title-single">Personal Info</div>

                                                <form action="/edit-info" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="custom-form">
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-user"></i>
                                                            <input type="text" placeholder="First Name"
                                                                name="first_name">
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                        </p>
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-solid fa-user"></i>
                                                            <input type="text" placeholder="Second Name"
                                                                name="last_name">
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-envelope"></i>
                                                            <input type="email" placeholder="Email Address"
                                                                name="email">
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <i class="fa-light fa-phone"></i>
                                                            <input type="text" placeholder="Phone" name="phone">
                                                        </div>
                                                        <!-- listsearch-input-item -->
                                                        <div class="cs-intputwrap">
                                                            <textarea name="bio" id="bio" cols="40" rows="3" placeholder="About Text:"></textarea>
                                                        </div>
                                                        <button class="commentssubmit" type="submit">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--dasboard-content-item end-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="edit-profile-photo">
                                            <div class="edit-profile-photo_cur">
                                                <img src="images/avatar/1.jpg" alt="">
                                            </div>
                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span> Upload New Photo</span>
                                                    <input type="file" class="upload">
                                                </div>
                                            </div>
                                            <div class="abs_bg"></div>
                                            <div class="remove_phav tolt" data-microtip-position="left"
                                                data-tooltip="Remove Photo"><i class="fa-light fa-trash"></i></div>
                                        </div>
                                        <!--dasboard-content-item-->
                                        <div class="dasboard-content-item">
                                            <div class="dashboard-widget-title-single">Your Socials Links</div>

                                            <form action="/edit-socialmedia" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="custom-form">
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-brands fa-facebook-f"></i>
                                                        <input type="text" placeholder="Facebook" name="facebook">
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-brands fa-tiktok"></i>
                                                        <input type="text" placeholder="TikTok" name="tiktok">
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-brands fa-instagram"></i>
                                                        <input type="text" placeholder="Instagram" name="instagram">
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-brands fa-x-twitter"></i>
                                                        <input type="text" placeholder="X-Twitter" name="twitter">
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                    <!-- listsearch-input-item -->
                                                    <div class="cs-intputwrap">
                                                        <i class="fa-brands fa-youtube"></i>
                                                        <input type="text" placeholder="Youtube" name="youtube">
                                                    </div>
                                                    <!-- listsearch-input-item -->
                                                </div>
                                                <button class="commentssubmit" type="submit">Update</button>
                                            </form>
                                        </div>
                                        <!--dasboard-content-item end-->
                                    </div>
                                </div>
                                <!--dasboard-content-item-->
                                <div class="dasboard-content-item" style="margin-top: 20px">
                                    <div class="dashboard-widget-title-single">Change Password</div>
                                    <div class="custom-form">
                                        <!-- listsearch-input-item -->
                                        <div class="cs-intputwrap pass-input-wrap">
                                            <i class="fa-light fa-lock-open"></i>
                                            <input type="password" class="pass-input" placeholder="Current Password"
                                                name="">
                                            <div class="view-pass"></div>
                                        </div>
                                        <!-- listsearch-input-item -->
                                        <!-- listsearch-input-item -->
                                        <div class="cs-intputwrap pass-input-wrap">
                                            <i class="fa-light fa-lock"></i>
                                            <input type="password" class="pass-input" placeholder="New Password"
                                                name="">
                                            <div class="view-pass"></div>
                                        </div>
                                        <!-- listsearch-input-item -->
                                        <!-- listsearch-input-item -->
                                        <div class="cs-intputwrap pass-input-wrap">
                                            <i class="fa-light fa-shield-check"></i>
                                            <input type="password" class="pass-input" placeholder="Confirm New Password"
                                                name="">
                                            <div class="view-pass"></div>
                                        </div>
                                        <!-- listsearch-input-item -->
                                        <!-- listsearch-input-item -->
                                        <!-- listsearch-input-item -->
                                        <!-- listsearch-input-item -->
                                        <!-- listsearch-input-item -->
                                    </div>
                                    <button type="submit" class="commentssubmit">Update</button>

                                </div>
                                <!--dasboard-content-item end-->
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
                <div class="svg-corner svg-corner_white" style="top:0;left:  -40px; transform: rotate(-90deg)"></div>
                <div class="svg-corner svg-corner_white" style="top:0;right: -40px; transform: rotate(-180deg)"></div>
            </div>
        </div>
        <!-- container end-->
    </div>
    <!--content  end-->
@endsection('content')
