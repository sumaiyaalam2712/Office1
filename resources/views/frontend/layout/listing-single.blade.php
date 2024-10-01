@extends('frontend.app')
@section('content')
<div class="content">
    <div class="container">
      <div class="breadcrumbs-list bl_flat">
        <a href="#">Home</a><a href="#">Properties</a
        ><a href="#">New York</a><span>Property Single 2</span>
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
                <img src="{{asset('frontend/images/all/properties1.jpg')}}" alt="" />
                <a
                  href="{{asset('frontend/images/all/properties1.jpg')}}"
                  class="box-media-zoom popup-image"
                  ><i class="fal fa-search"></i
                ></a>
                <div class="show-info">
                  <span>info</span>
                  <div class="tooltip-info">
                    <h5>Room Details</h5>
                    <p>
                      Sed non nisi viverra, porttitor sem nec, vestibulum
                      justo tortor ornare turpis faucibus
                    </p>
                  </div>
                </div>
              </div>
              <!-- swiper-slide end-->
              <!-- swiper-slide-->
              <div class="swiper-slide hov_zoom">
                <img src="{{asset('frontend/images/all/properties4.jpg')}}" alt="" />
                <a
                  href="{{asset('frontend/images/all/properties4.jpg')}}"
                  class="box-media-zoom popup-image"
                  ><i class="fal fa-search"></i
                ></a>
                <div class="show-info">
                  <span>info</span>
                  <div class="tooltip-info">
                    <h5>Room Details</h5>
                    <p>
                      Sed non nisi viverra, porttitor sem nec, vestibulum
                      justo tortor ornare turpis faucibus
                    </p>
                  </div>
                </div>
              </div>
              <!-- swiper-slide end-->
              <!-- swiper-slide-->
              <div class="swiper-slide hov_zoom">
                <img src="{{asset('frontend/images/all/properties1.jpg')}}" alt="" />
                <a
                  href="{{asset('frontend/images/all/properties1.jpg')}}"
                  class="box-media-zoom popup-image"
                  ><i class="fal fa-search"></i
                ></a>
                <div class="show-info">
                  <span>info</span>
                  <div class="tooltip-info">
                    <h5>Room Details</h5>
                    <p>
                      Sed non nisi viverra, porttitor sem nec, vestibulum
                      justo tortor ornare turpis faucibus
                    </p>
                  </div>
                </div>
              </div>
              <!-- swiper-slide end-->
              <!-- swiper-slide-->
              <div class="swiper-slide hov_zoom">
                <img src="{{asset('frontend/images/all/properties2.jpg')}}" alt="" />
                <a
                  href="{{asset('frontend/images/all/properties2.jpg')}}"
                  class="box-media-zoom popup-image"
                  ><i class="fal fa-search"></i
                ></a>
                <div class="show-info">
                  <span>info</span>
                  <div class="tooltip-info">
                    <h5>Room Details</h5>
                    <p>
                      Sed non nisi viverra, porttitor sem nec, vestibulum
                      justo tortor ornare turpis faucibus
                    </p>
                  </div>
                </div>
              </div>
              <!-- swiper-slide end-->
              <!-- swiper-slide-->
              <div class="swiper-slide hov_zoom">
                <img src="{{asset('frontend/images/all/properties6.jpg')}}" alt="" />
                <a
                  href="{{asset('frontend/images/all/properties6.jpg')}}"
                  class="box-media-zoom popup-image"
                  ><i class="fal fa-search"></i
                ></a>
                <div class="show-info">
                  <span>info</span>
                  <div class="tooltip-info">
                    <h5>Room Details</h5>
                    <p>
                      Sed non nisi viverra, porttitor sem nec, vestibulum
                      justo tortor ornare turpis faucibus
                    </p>
                  </div>
                </div>
              </div>
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
                  <div class="hero-section_categories">
                    <a href="#">For Sale</a>
                    <a href="#">For Rent</a>
                    <a href="#">Houses</a>
                  </div>
                  <div class="hero-opt-btnns">
                    <a
                      href="#"
                      class="like-btn tolt"
                      data-microtip-position="left"
                      data-tooltip="Add to Wishlist"
                      ><i class="fa-light fa-heart"></i
                    ></a>
                    <a
                      href="#single_cf"
                      class="custom-scroll-link tolt"
                      data-microtip-position="left"
                      data-tooltip="Contact to View"
                      ><i class="fa-light fa-envelope"></i
                    ></a>
                  </div>
                </div>
                <!--boxed-content-->
                <div class="boxed-content">
                  <!--boxed-content-item-->
                  <div class="boxed-content-item">
                    <div class="hero-section-title_container hsc_flat">
                      <div class="hero-section-title">
                        <h2>House in Financial District</h2>
                        <h4>
                          <i class="fa-solid fa-location-dot"></i>
                          <span>70 Bright St New York, USA</span>
                        </h4>
                        <div class="property-single-header-price">
                          <strong>Price:</strong>
                          <span class="pshp_item"
                            ><span>$</span>150.500
                          </span>
                        </div>
                      </div>
                      <div class="hero-section-opt">
                        <div
                          class="property-single-header-date author_avatar_ps"
                        >
                          <a href="author-single.html">
                            <img src="frontend/images/announcer.jpg" alt="" /> By
                            Niko Furingee</a
                          >
                        </div>
                        <div class="property-single-header-date">
                          <span>Developer Company:</span
                          ><a href="#">House Construction</a>
                        </div>
                        <div class="property-single-header-date">
                          <span>Status:</span>Shutdown 2025
                        </div>
                        <div class="hs-pv_wrap">
                          <div class="pv-item">
                            <i class="fa-light fa-glasses"></i>
                            <span> Viewed - <strong>335</strong></span>
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
                    <h5>Four</h5>
                    <i class="fa-light fa-bed"></i>
                  </div>
                  <!--ps-facts-item end-->
                  <!--ps-facts-item-->
                  <div class="ps-facts-item">
                    <h4>Bethroom</h4>
                    <h5>Two</h5>
                    <i class="fa-light fa-bath"></i>
                  </div>
                  <!--ps-facts-item end-->
                  <!--ps-facts-item-->
                  <div class="ps-facts-item">
                    <h4>Area</h4>
                    <h5>365 ft</h5>
                    <i class="fa-light fa-chart-area"></i>
                  </div>
                  <!--ps-facts-item end-->
                  <!--ps-facts-item-->
                  <div class="ps-facts-item">
                    <h4>Parking</h4>
                    <h5>Outdoor</h5>
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
                      Praesent eros turpis, commodo vel justo at, pulvinar
                      mollis eros. Mauris aliquet eu quam id ornare. Morbi
                      ac quam enim. Cras vitae nulla condimentum, semper
                      dolor non, faucibus dolor. Vivamus adipiscing eros
                      quis orci fringilla, sed pretium lectus viverra.
                      Pellentesque habitant morbi tristique senectus et
                      netus et malesuada fames ac turpis egestas. Donec
                      nec velit non odio aliquam suscipit. Sed non neque
                      faucibus, condimentum lectus at, accumsan enim.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. Maecenas in pulvinar neque. Nulla finibus
                      lobortis pulvinar. Donec a consectetur nulla. Nulla
                      posuere sapien vitae lectus suscipit, et pulvinar
                      nisi tincidunt. Aliquam erat volutpat. Curabitur
                      convallis fringilla diam sed aliquam. Sed tempor
                      iaculis massa faucibus feugiat. In fermentum
                      facilisis massa, a consequat purus viverra.
                    </p>
                    <div class="pp-single-opt-wrap">
                      <div class="pp-single-opt-links">
                        <ul>
                          <li>
                            <a href="#" download
                              ><i class="fa-light fa-file-pdf"></i>
                              Download Brochure
                            </a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa-light fa-layer-group"></i>
                              View Floor Plans</a
                            >
                          </li>
                        </ul>
                        <a href="#" class="pp-single-opt-link_silngle"
                          >Visit Website</a
                        >
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
                          <li>
                            <a href="#"
                              ><i class="fal fa-dumbbell"></i> Gym</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fal fa-wifi"></i> Wi Fi</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fal fa-parking"></i> Parking</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fal fa-cloud"></i> Air
                              Conditioned</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fal fa-swimmer"></i>Swimming Pool</a
                            >
                          </li>
                          <li>
                              <a href="#"
                                ><i class="fa-thin fa-fire-burner"></i>Kitchen</a
                              >
                            </li>
                          <li>
                            <a href="#"
                              ><i class="fal fa-cctv"></i> Security</a
                            >
                          </li>
                          <li>
                              <a href="#"
                                ><i class="fa-thin fa-dog"></i> Allow Pets</a
                              >
                            </li>
                          <li>
                            <a href="#"
                              ><i class="fal fa-washer"></i> Laundry
                              Room</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--boxed-content-item end-->
                </div>
                <!--boxed-content end-->
                <!--banner-widget-wrap-->
                <div class="banner-widget-wrap">
                  <div
                    class="bg-wrap bg-parallax-wrap-gradien fs-wrapper"
                  >
                    <div class="bg" data-bg="{{asset('frontend/images/all/properties3.jpg')}}"></div>
                  </div>
                  <div class="banner-widget_content">
                    <div
                      class="video-box-btn"
                      id="html5-videos"
                      data-html="#video1"
                    >
                      <i class="fas fa-play"></i>
                    </div>
                    <h5><span>Property Video Presentation</span></h5>
                  </div>
                  <div
                    style="display: none"
                    id="video1"
                    class="popup_video"
                    data-videolink="video/1.mp4"
                  >
                    <video
                      class="lg-video-object lg-html5"
                      controls
                      preload="none"
                    >
                      <source src="/" type="video/mp4" />
                    </video>
                  </div>
                </div>
                <!--banner-widget-wrap end-->
                <div class="accordion">
                  <a class="toggle act-accordion" href="#">
                    Details option <i class="fa-solid fa-caret-down"></i
                  ></a>
                  <div class="accordion-inner visible">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. Maecenas in pulvinar neque. Nulla finibus
                      lobortis pulvinar. Donec a consectetur nulla. Nulla
                      posuere sapien vitae lectus suscipit, et pulvinar
                      nisi tincidunt. Aliquam erat volutpat. Curabitur
                      convallis fringilla diam sed aliquam. Sed tempor
                      iaculis massa faucibus feugiat. In fermentum
                      facilisis massa, a consequat purus viverra.
                    </p>
                  </div>
                  <a class="toggle" href="#">
                    Details option 2 <i class="fa-solid fa-caret-down"></i
                  ></a>
                  <div class="accordion-inner">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. Maecenas in pulvinar neque. Nulla finibus
                      lobortis pulvinar. Donec a consectetur nulla. Nulla
                      posuere sapien vitae lectus suscipit, et pulvinar
                      nisi tincidunt. Aliquam erat volutpat. Curabitur
                      convallis fringilla diam sed aliquam. Sed tempor
                      iaculis massa faucibus feugiat. In fermentum
                      facilisis massa, a consequat purus viverra.
                    </p>
                  </div>
                  <a class="toggle" href="#">
                    Details option 3 <i class="fa-solid fa-caret-down"></i
                  ></a>
                  <div class="accordion-inner">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. Maecenas in pulvinar neque. Nulla finibus
                      lobortis pulvinar. Donec a consectetur nulla. Nulla
                      posuere sapien vitae lectus suscipit, et pulvinar
                      nisi tincidunt. Aliquam erat volutpat. Curabitur
                      convallis fringilla diam sed aliquam. Sed tempor
                      iaculis massa faucibus feugiat. In fermentum
                      facilisis massa, a consequat purus viverra.
                    </p>
                  </div>
                </div>
                <!--boxed-content-->
                <div class="boxed-content">
                  <!--boxed-content-title-->
                  <div class="boxed-content-title">
                    <h3>Property Location</h3>
                  </div>
                  <!--boxed-content-title end-->
                  <!--boxed-content-item-->
                  <div class="boxed-content-item">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="map-container mapC_vis2">
                          <div
                            id="singleMap"
                            class="single-map-container fs-wrapper"
                            data-latitude="40.7427837"
                            data-longitude="-73.11445617675781"
                            data-mapTitle="Our Location"
                            data-infotitle="House in Financial Distric"
                            data-infotext="70 Bright St New York, USA"
                          ></div>
                          <div class="scrollContorl"></div>
                          <input
                            id="pac-input"
                            class="controls fl-wrap controls-mapwn"
                            autocomplete="on"
                            type="text"
                            placeholder="What Nearby? Schools, Gym... "
                            value=""
                          />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="nerby-list-wrap">
                          <div class="nerby-list-container">
                            <div class="nerby-list">
                              <span class="nerby-title"
                                >What's Nearby</span
                              >
                              <div class="nerby-list-box">
                                <ul>
                                  <li>
                                    <i class="fa-light fa-school"></i
                                    >School: <span>1.2km</span>
                                  </li>
                                  <li>
                                    <i
                                      class="fa-light fa-cart-shopping"
                                    ></i
                                    >Shopping Mall: <span>2.2km</span>
                                  </li>
                                  <li>
                                    <i
                                      class="fa-light fa-user-police-tie"
                                    ></i
                                    >Police Station: <span>1.6km</span>
                                  </li>
                                  <li>
                                    <i
                                      class="fa-light fa-truck-medical"
                                    ></i
                                    >Hospital: <span>0.7km</span>
                                  </li>
                                  <li>
                                    <i class="fa-light fa-teddy-bear"></i
                                    >Playschool: <span>1.1km</span>
                                  </li>
                                  <li>
                                    <i class="fa-light fa-bench-tree"></i
                                    >Parks: <span>0.2km</span>
                                  </li>
                                </ul>
                                <a
                                  href="#"
                                  class="commentssubmit commentssubmit_fw"
                                  style="margin-top: 10px"
                                  >Get Directions</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--boxed-content-item end-->
                </div>
                <!--boxed-content end-->
              </div>
            </div>
            <div class="col-lg-4">
              <!--boxed-container-->
              <div class="sb-container">
                <div class="charts-container">
                  <div class="dec-title">
                    <div class="dec-title_item">
                      Dynamics of Price Changes
                      <div
                        class="svg-corner svg-corner_dark"
                        style="
                          top: 12px;
                          right: -39px;
                          transform: rotate(90deg);
                        "
                      ></div>
                    </div>
                  </div>
                  <div class="charts-item dark-bg sb-widget">
                    <div class="graph-price-container">
                      <div class="graph-price animaper">
                        <div class="graph-price-item">
                          <div class="graph" data-percent="50%">
                            <div class="gil"><span>$130.00</span></div>
                          </div>
                          <div class="graph-price-item-title">March</div>
                        </div>
                        <div class="graph-price-item">
                          <div class="graph" data-percent="65%">
                            <div class="gil"><span>$145.00</span></div>
                          </div>
                          <div class="graph-price-item-title">April</div>
                        </div>
                        <div class="graph-price-item">
                          <div class="graph" data-percent="55%">
                            <div class="gil"><span>$135.00</span></div>
                          </div>
                          <div class="graph-price-item-title">May</div>
                        </div>
                        <div class="graph-price-item">
                          <div class="graph" data-percent="78%">
                            <div class="gil"><span>$155.500</span></div>
                          </div>
                          <div class="graph-price-item-title">June</div>
                        </div>
                      </div>
                      <div class="graph-price-counter">
                        <div class="graph-price-counter-wrap">
                          <div class="stats animaper">
                            <div
                              class="num"
                              data-content="27"
                              data-num="27"
                            >
                              0
                            </div>
                            <span class="price-perc"
                              ><i class="fa-light fa-percent"></i
                            ></span>
                          </div>
                          <h4>Object Price change percentage</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
                      <a href="#">Hotel</a>
                      <a href="#">Hostel</a>
                      <a href="#">Room</a>
                      <a href="#">Spa</a>
                      <a href="#">Restourant</a>
                      <a href="#">Parking</a>
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
                              <a
                                href="agent-single.html"
                                class="property-contacts_profile_link"
                              >
                                <img src="{{asset('frontend/images/announcer.jpg')}}" alt="" />
                                <span>Agent:</span>Niko Furingee
                              </a>
                            </div>
                            <div class="property-contacts-links">
                              <a
                                href="tel:+18475555555"
                                class="tolt pcl_btn"
                                data-microtip-position="left"
                                data-tooltip="Call"
                                ><i class="fa-solid fa-phone"></i
                              ></a>
                              <a
                                href="#"
                                class="show-messenger-links pcl_btn tolt"
                                data-microtip-position="left"
                                data-tooltip="Write Message"
                                ><i class="fa-solid fa-message-sms"></i
                              ></a>
                            </div>
                            <div class="messenger-links-container">
                              <a
                                href="#"
                                class="tolt"
                                data-microtip-position="bottom"
                                data-tooltip="Viber"
                                ><i class="fa-brands fa-viber"></i
                              ></a>
                              <a
                                href="#"
                                class="tolt"
                                data-microtip-position="bottom"
                                data-tooltip="Whatsapp"
                                ><i class="fa-brands fa-whatsapp"></i
                              ></a>
                              <a
                                href="#"
                                class="tolt"
                                data-microtip-position="bottom"
                                data-tooltip="Telegram"
                                ><i class="fa-brands fa-telegram"></i
                              ></a>
                              <a
                                href="#"
                                class="tolt"
                                data-microtip-position="bottom"
                                data-tooltip="Facebook Messenger"
                                ><i
                                  class="fa-brands fa-facebook-messenger"
                                ></i
                              ></a>
                            </div>
                          </div>
                          <div class="log-separator"><span>or</span></div>
                          <p>
                            Use the form below to select a viewing time
                            and date.
                          </p>
                        </div>
                        <div class="custom-form" id="single_cf">
                          <form
                          action="/create_request"
                            method="post">
                          @csrf

                          <div class="cs-intputwrap">
                            <i class="fa-light fa-user"></i>

                            <div class="cs-intputwrap">
                              <i class="fa-light fa-user"></i>
                              <input
                                name="name"
                                type="text"
                                placeholder="Your name"
                                onClick="this.select()"

                              />
                            </div>
                            <div class="cs-intputwrap">
                              <i class="fa-light fa-phone-office"></i>
                              <input
                                name="phone"
                                type="text"
                                placeholder="Your Phone"
                                onClick="this.select()"

                              />
                            </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="cs-intputwrap">
                                  <i class="fa-light fa-calendar"></i>
                                  <div class="date-container">
                                    <input
                                      type="date"
                                      placeholder="Date"
                                      id="request_date"
                                      name="request_date"

                                    />
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="cs-intputwrap">
                                  <i class="fa-light fa-calendar"></i>
                                  <select
                                    data-placeholder="Time"
                                    class="chosen-select on-radius no-search-select"   name="request_time" id="request_time"
                                  >
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
                            <button
                              onclick="window.location.href=''"
                              class="commentssubmit commentssubmit_fw"
                            >
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
        <div class="boxed-container">
          <div class="boxed-content-title bcst_ca">
            <h3>Similar Properties</h3>
          </div>
          <div class="single-carousel-wrap">
            <div class="single-carousel">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <!-- swiper-slide -->
                  <div class="swiper-slide">
                    <!-- listing-item -->
                    <div class="listing-item">
                      <div class="geodir-category-listing">
                        <div class="geodir-category-img">
                          <a
                            href="listing-single.html"
                            class="geodir-category-img_item"
                          >
                            <div
                              class="bg"
                              data-bg="{{asset('frontend/images/all/properties5.jpg')}}"
                            ></div>
                            <div class="overlay"></div>
                          </a>
                          <div class="geodir-category-location">
                            <a href="#4" class="map-item"
                              ><i class="fas fa-map-marker-alt"></i> W
                              85th St, New York, USA
                            </a>
                          </div>
                          <ul class="list-single-opt_header_cat">
                            <li><a href="#" class="cat-opt">Sale</a></li>
                            <li>
                              <a href="#" class="cat-opt">Apartment</a>
                            </li>
                          </ul>
                          <a
                            href="#"
                            class="geodir_save-btn tolt"
                            data-microtip-position="left"
                            data-tooltip="Save"
                            ><span><i class="fal fa-heart"></i></span
                          ></a>
                          <div class="geodir-category-listing_media-list">
                            <span><i class="fas fa-camera"></i> 13</span>
                          </div>
                        </div>
                        <div class="geodir-category-content">
                          <h3>
                            <a href="listing-single.html"
                              >Contemporary Apartment</a
                            >
                          </h3>
                          <div class="geodir-category-content_price">
                            $ 1,600,000
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Maecenas in pulvinar neque.
                            Nulla finibus lobortis pulvinar. Donec a
                            consectetur nulla.
                          </p>
                          <div class="geodir-category-content-details">
                            <ul>
                              <li>
                                <i class="fa-light fa-bed"></i
                                ><span>4</span>
                              </li>
                              <li>
                                <i class="fa-light fa-bath"></i
                                ><span>1</span>
                              </li>
                              <li>
                                <i class="fa-light fa-chart-area"></i
                                ><span>550 ft2</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="geodir-category-footer">
                          <a href="agent-single.html" class="gcf-company"
                            ><img src="{{asset('frontend/images/announcer.jpg')}}" alt="" /><span
                              >By Liza Rose</span
                            ></a
                          >
                          <a href="listing-single.html" class="gid_link"
                            ><span>View Details</span>
                            <i class="fa-solid fa-caret-right"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <!-- listing-item end-->
                  </div>
                  <!--swiper-slide end -->
                  <!-- swiper-slide -->
                  <div class="swiper-slide">
                    <!-- listing-item -->
                    <div class="listing-item">
                      <div class="geodir-category-listing">
                        <div class="geodir-category-img">
                          <a
                            href="listing-single.html"
                            class="geodir-category-img_item"
                          >
                            <div
                              class="bg"
                              data-bg="{{asset('frontend/images/all/properties1.jpg')}}"
                            ></div>
                            <div class="overlay"></div>
                          </a>
                          <div class="geodir-category-location">
                            <a href="#4" class="map-item"
                              ><i class="fas fa-map-marker-alt"></i> 40
                              Journal Square , NJ, USA</a
                            >
                          </div>
                          <ul class="list-single-opt_header_cat">
                            <li><a href="#" class="cat-opt">Sale</a></li>
                            <li><a href="#" class="cat-opt">House</a></li>
                          </ul>
                          <a
                            href="#"
                            class="geodir_save-btn tolt"
                            data-microtip-position="left"
                            data-tooltip="Save"
                            ><span><i class="fal fa-heart"></i></span
                          ></a>
                          <div class="geodir-category-listing_media-list">
                            <span><i class="fas fa-camera"></i> 13</span>
                          </div>
                        </div>
                        <div class="geodir-category-content">
                          <h3>
                            <a href="listing-single.html"
                              >Gorgeous House For Sale</a
                            >
                          </h3>
                          <div class="geodir-category-content_price">
                            $ 500,000
                          </div>
                          <p>
                            Maecenas in pulvinar neque. Nulla finibus
                            lobortis pulvinar. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Donec a
                            consectetur nulla.
                          </p>
                          <div class="geodir-category-content-details">
                            <ul>
                              <li>
                                <i class="fa-light fa-bed"></i
                                ><span>2</span>
                              </li>
                              <li>
                                <i class="fa-light fa-bath"></i
                                ><span>2</span>
                              </li>
                              <li>
                                <i class="fa-light fa-chart-area"></i
                                ><span>150 ft2</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="geodir-category-footer">
                          <a href="agent-single.html" class="gcf-company"
                            ><img src="{{asset('frontend/images/announcer.jpg')}}" alt="" /><span
                              >By Niko Furingee
                            </span></a
                          >
                          <a href="listing-single.html" class="gid_link"
                            ><span>View Details</span>
                            <i class="fa-solid fa-caret-right"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <!-- listing-item end-->
                  </div>
                  <!--swiper-slide end -->
                  <!-- swiper-slide -->
                  <div class="swiper-slide">
                    <!-- listing-item -->
                    <div class="listing-item">
                      <div class="geodir-category-listing">
                        <div class="geodir-category-img">
                          <a
                            href="listing-single.html"
                            class="geodir-category-img_item"
                          >
                            <div
                              class="bg"
                              data-bg="{{asset('frontend/images/all/properties4.jpg')}}"
                            ></div>
                            <div class="overlay"></div>
                          </a>
                          <div class="geodir-category-location">
                            <a href="#4" class="map-item"
                              ><i class="fas fa-map-marker-alt"></i> 70
                              Bright St, Jersey City, NJ USA</a
                            >
                          </div>
                          <ul class="list-single-opt_header_cat">
                            <li><a href="#" class="cat-opt">Rent</a></li>
                            <li>
                              <a href="#" class="cat-opt">Apartment</a>
                            </li>
                          </ul>
                          <a
                            href="#"
                            class="geodir_save-btn tolt"
                            data-microtip-position="left"
                            data-tooltip="Save"
                            ><span><i class="fal fa-heart"></i></span
                          ></a>
                          <div class="geodir-category-listing_media-list">
                            <span><i class="fas fa-camera"></i> 5</span>
                          </div>
                        </div>
                        <div class="geodir-category-content">
                          <h3>
                            <a href="listing-single.html"
                              >Kayak Point House</a
                            >
                          </h3>
                          <div class="geodir-category-content_price">
                            $ 1500 / per month
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Maecenas in pulvinar neque.
                            Nulla finibus lobortis pulvinar. Donec a
                            consectetur nulla.
                          </p>
                          <div class="geodir-category-content-details">
                            <ul>
                              <li>
                                <i class="fa-light fa-bed"></i
                                ><span>1</span>
                              </li>
                              <li>
                                <i class="fa-light fa-bath"></i
                                ><span>1</span>
                              </li>
                              <li>
                                <i class="fa-light fa-chart-area"></i
                                ><span>70 ft2</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="geodir-category-footer">
                          <a href="agent-single.html" class="gcf-company"
                            ><img src="{{ asset('frontend/images/announcer.jpg') }}" alt="" /><span
                              >By Andy Sposty</span
                            ></a
                          >
                          <a href="listing-single.html" class="gid_link"
                            ><span>View Details</span>
                            <i class="fa-solid fa-caret-right"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <!-- listing-item end-->
                  </div>
                  <!--swiper-slide end -->
                  <!-- swiper-slide -->
                  <div class="swiper-slide">
                    <!-- listing-item -->
                    <div class="listing-item">
                      <div class="geodir-category-listing">
                        <div class="geodir-category-img">
                          <a
                            href="listing-single.html"
                            class="geodir-category-img_item"
                          >
                            <div
                              class="bg"
                              data-bg="frontend/images/all/properties2.jpg"
                            ></div>
                            <div class="overlay"></div>
                          </a>
                          <div class="geodir-category-location">
                            <a href="#4" class="map-item"
                              ><i class="fas fa-map-marker-alt"></i> W
                              85th St, New York, USA
                            </a>
                          </div>
                          <ul class="list-single-opt_header_cat">
                            <li><a href="#" class="cat-opt">Sale</a></li>
                            <li><a href="#" class="cat-opt">House</a></li>
                          </ul>
                          <a
                            href="#"
                            class="geodir_save-btn tolt"
                            data-microtip-position="left"
                            data-tooltip="Save"
                            ><span><i class="fal fa-heart"></i></span
                          ></a>
                          <div class="geodir-category-listing_media-list">
                            <span><i class="fas fa-camera"></i> 7</span>
                          </div>
                        </div>
                        <div class="geodir-category-content">
                          <h3>
                            <a href="listing-single.html"
                              >Luxury Family Home</a
                            >
                          </h3>
                          <div class="geodir-category-content_price">
                            $ 450,000
                          </div>
                          <p>
                            Maecenas in pulvinar neque. Nulla finibus
                            lobortis pulvinar. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Donec a
                            consectetur nulla.
                          </p>
                          <div class="geodir-category-content-details">
                            <ul>
                              <li>
                                <i class="fa-light fa-bed"></i
                                ><span>2</span>
                              </li>
                              <li>
                                <i class="fa-light fa-bath"></i
                                ><span>1</span>
                              </li>
                              <li>
                                <i class="fa-light fa-chart-area"></i
                                ><span>150 ft2</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="geodir-category-footer">
                          <a href="agent-single.html" class="gcf-company"
                            ><img src="{{ asset('frontend/images/announcer.jpg') }}" alt="" /><span
                              >By Anna Lips</span
                            ></a
                          >
                          <a href="listing-single.html" class="gid_link"
                            ><span>View Details</span>
                            <i class="fa-solid fa-caret-right"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <!-- listing-item end-->
                  </div>
                  <!--swiper-slide end -->
                </div>
              </div>
            </div>
          </div>
          <div class="ss-carousel-pagination_wrap">
            <div
              class="solid-pagination_btns ss-carousel-pagination_init"
            ></div>
          </div>
          <div class="ss-carousel-button-wrap">
            <div class="ss-carousel-button ss-carousel-button-prev">
              <i class="fas fa-caret-left"></i>
            </div>
            <div class="ss-carousel-button ss-carousel-button-next">
              <i class="fas fa-caret-right"></i>
            </div>
          </div>
        </div>
      </div>
      <!--main-content end-->
      <div class="to_top-btn-wrap">
        <div class="to-top to-top_btn">
          <span>Back to top</span> <i class="fa-solid fa-arrow-up"></i>
        </div>
        <div
          class="svg-corner svg-corner_white"
          style="top: 0; left: -40px; transform: rotate(-90deg)"
        ></div>
        <div
          class="svg-corner svg-corner_white"
          style="top: 0; right: -40px; transform: rotate(-180deg)"
        ></div>
      </div>
    </div>
    <!-- container end-->
  </div>
@endsection
