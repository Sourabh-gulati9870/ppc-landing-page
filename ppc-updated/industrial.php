<!DOCTYPE html>
<html lang="en">

<head>
<?php  
  $pageTitle = "Lease Industrial Factory in Noida";
  include 'head.php';
  ?>
</head>

<body>
  <?php include 'header.php'; ?>

  <main>
    <!-- Home Banner Start -->
    <section>
      <div class="width-100">
        <div id="carouselExample" class="carousel slide banner-slider" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="desktop_banner w-100" src="assets/images/slider-1.jpg" alt="banner1">
              <img class="mobile_banner w-100" src="assets/images/slide-mobile1.jpg" alt="bannerm1">
            </div>
            <div class="carousel-item">
              <img class="desktop_banner w-100" src="assets/images/slider-2.jpg" alt="banner2">
              <img class="mobile_banner w-100" src="assets/images/slide-mobile2.jpg" alt="bannerm2">
            </div>
          </div>
          <div class="banner-text">
            <div class="inner-space">
              <h1 class="desktop-view"><i class="fa-solid fa-clipboard"></i>Request for a call back</h1>
              <p>Fill Up the form and get an<strong>Expert Call</strong></p>
              <div class="form-section">
                <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" name="onloadform" onsubmit="return validateFormload();">
                  <input type="hidden" name="oid" value="00D90000000gJ1h">
                  <input type="hidden" name="retURL" id="retURL" value="https://properties.buniyad.com/lease-noida/thank-you.php">
                  <input type="hidden" name="00N90000004FeK4" id="00N90000004FeK4" value="PPC LANDING PAGE - Lease Industrial Factory in Noida">
                  <input type="hidden" name="00N90000004FeK9" id="00N90000004FeK9" value="Noida">
                  <input type="hidden" name="lead_source" id="lead_source" value="Mini-Query"> <span class="pop-msg">
                    <div class="dflx">
                      <div class="form-group">
                        <input id="first_name" class="form-control tpfrm" maxlength="20" name="first_name" size="20" type="text" placeholder="Enter your name" autocomplete="off" required />
                      </div>

                      <div class="form-group">
                        <input id="phone" class="form-control tpfrm" maxlength="10" name="phone" size="20" type="text" placeholder="Mobile Number" autocomplete="off" required />
                      </div>

                      <button type="submit" name="submit" value="Send Query" class="modal-btn frm-btn" id="btn-validate">Send Query</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span><i class="banner-cara fa-solid fa-arrow-left"></i></span>
            <span class="visually-hidden"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span><i class="banner-cara fa-solid fa-arrow-right"></i></span>
            <span class="visually-hidden"></span>
          </button>
        </div>
      </div>
    </section>
    <!-- Home Banner End -->

    <!-- Property tab Start -->
    <section>
      <div class="container-fluid dk-blue">
        <div class="bg-darkb">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle all-btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-industry"></i> Commercial Properties
            </button>

            <ul class="list-paramerter" aria-labelledby="dropdownMenuButton1">

              <li><button class="dropdown-item clickable" onclick="addFilter('Sector 85')">Sector 85</button></li>

              <li><button class="dropdown-item clickable" onclick="addFilter('Sector 63')">Sector 63</button></li>

              <li><button class="dropdown-item clickable" onclick="addFilter('Sector PH II')">Sector PH II</button></li>

              <li><button class="dropdown-item clickable" onclick="addFilter('Sector HC')">Sector HC</button></li>

            </ul>

          </div>

        </div>
        <div class="container-fluid lt-blue">
          <div class="container">
            <div id="filters"></div>
            <div class="tab-content">

              <div id="tab1" class="tab-pane">
                <div class="container-fluid room-collection space-reduce">
                  <h2 class="tab-heading-locate"><i class="fa-solid fa-location-dot"></i>Sector 85 Noida</h2>
                  <div class="container space-reduce">
                    <div class="row">
                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry1.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Factory For Rent</h3>
                            </div>

                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-85, Noida</h4>
                              <p>Factory Available for Rent</p>
                            </div>
                            <ul class="property-info industrial-listing">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Plot Size :</strong>3800 SqMt</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Facing :</strong>North facing</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>5</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floors :</strong>BSMT+GF+FF+SF+3rd+4th</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Covered Area :</strong>1,25,000 SqFt</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Located On:</strong>24 Mtr. Wide Road</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Parking :</strong>Available</p>
                              </li>
                            </ul>

                            <button class="readMoreBtn see-close industrial-btn">See more</button>

                          </div>
                        </div>
                        <div class="prize-detail-box industrial-button">
                          <div class="prize-book">
                            <div class="ind-price">
                              <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                                  Price</span></h4>
                            </div>
                            <div class="ind-query">
                              <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry4.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry5.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry6.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Factory For Rent</h3>
                            </div>

                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-85, Noida</h4>
                              <p>Factory Available for Rent</p>
                            </div>
                            <ul class="property-info eve-list industrial-listing">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Plot Size :</strong>3900 SqMt</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Located On:</strong>24 Mtr. Wide Road</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floors :</strong>BSMT+GF+FF+SF+3rd+4th</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props d-show">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>6</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Covered Area :</strong>1.50.000 SqFt</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props s-show">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Parking :</strong>Available</p>
                              </li>
                            </ul>

                            <button class="readMoreBtn see-close industrial-btn">See more</button>

                          </div>
                        </div>
                        <div class="prize-detail-box industrial-button">
                          <div class="prize-book">
                            <div class="ind-price">
                              <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                                  Price</span></h4>
                            </div>
                            <div class="ind-query">
                              <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry7.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry8.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry9.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Factory For Rent</h3>
                            </div>

                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-85, Noida</h4>
                              <p>Factory Available for Rent</p>
                            </div>
                            <ul class="property-info industrial-listing">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Plot Size :</strong>3100 SqMt</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Located On:</strong>24 Mtr. Wide Road</p>
                              </li>
                              <li class="df-lex">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floors :</strong>Basement to 4<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>6</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Covered Area :</strong>1,25,000 SqFt</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Parking :</strong>Available</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Lift :</strong>1 Passanger & 1 Goods</p>
                              </li>
                            </ul>

                            <button class="readMoreBtn see-close industrial-btn">See more</button>

                          </div>
                        </div>
                        <div class="prize-detail-box industrial-button">
                          <div class="prize-book">
                            <div class="ind-price">
                              <h4><strong>Rs. 26/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                                  Price</span></h4>
                            </div>
                            <div class="ind-query">
                              <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry10.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry11.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry12.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Factory For Rent</h3>
                            </div>

                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-85, Noida</h4>
                              <p>Factory Available for Rent</p>
                            </div>
                            <ul class="property-info eve-list industrial-listing">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Plot Size :</strong>4000 SqMt</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Located On:</strong>24 Mtr. Wide Road</p>
                              </li>
                              <li class="df-lex">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floors :</strong>Basement to 2<sup>nd</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props d-show">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>5</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Covered Area :</strong>1,25,000 SqFt</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Parking :</strong>Available</p>
                              </li>
                            </ul>

                            <button class="readMoreBtn see-close industrial-btn">See more</button>

                          </div>
                        </div>
                        <div class="prize-detail-box industrial-button">
                          <div class="prize-book">
                            <div class="ind-price">
                              <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                                  Price</span></h4>
                            </div>
                            <div class="ind-query">
                              <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry13.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry14.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry15.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Factory For Rent</h3>
                            </div>

                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-85, Noida</h4>
                              <p>Factory Available for Rent</p>
                            </div>
                            <ul class="property-info eve-list industrial-listing">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Plot Size :</strong>4000 SqMt</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Located On:</strong>45 Mtr. Wide Road</p>
                              </li>
                              <li class="df-lex">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floors :</strong>Basement to 2<sup>nd</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props d-show">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>5</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Covered Area :</strong>1,25,000 SqFt</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Parking :</strong>Available</p>
                              </li>
                            </ul>

                            <button class="readMoreBtn see-close industrial-btn">See more</button>

                          </div>
                        </div>
                        <div class="prize-detail-box industrial-button">
                          <div class="prize-book">
                            <div class="ind-price">
                              <h4><strong>Rs. 26/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                                  Price</span></h4>
                            </div>
                            <div class="ind-query">
                              <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="tab2" class="tab-pane">
                <div class="container-fluid room-collection space-reduce">
                  <h2 class="tab-heading-locate"><i class="fa-solid fa-location-dot"></i>Sector 63 Noida</h2>
                  <div class="container space-reduce">
                    <div class="row">
                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry1.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Factory For Rent</h3>
                            </div>

                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-63, Noida</h4>
                              <p>Factory Available for Rent</p>
                            </div>
                            <ul class="property-info eve-list industrial-listing">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Plot Size :</strong>4000 SqMt</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                              </li>
                              <li class="df-lex">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floors :</strong>Basement to 3<sup>rd</sup> Floor</p>
                              </li>
                              <li class="d-show">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>5</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Covered Area :</strong>1,30,000 SqFt</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Parking :</strong>Available</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Lift :</strong>4 Lift Provision</p>
                              </li>
                            </ul>

                            <button class="readMoreBtn see-close industrial-btn">See more</button>

                          </div>
                        </div>
                        <div class="prize-detail-box industrial-button">
                          <div class="prize-book">
                            <div class="ind-price">
                              <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                                  Price</span></h4>
                            </div>
                            <div class="ind-query">
                              <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry10.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Factory For Rent</h3>
                            </div>

                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-63, Noida</h4>
                              <p>Factory Available for Rent</p>
                            </div>
                            <ul class="property-info industrial-listing">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Plot Size :</strong>4000 SqMt</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Facing :</strong>South Facing</p>
                              </li>
                              <li class="df-lex">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floors :</strong>Ground to 3<sup>rd</sup> Floor</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Washroom :</strong>4</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Covered Area :</strong>1,25,000 SqFt</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Parking :</strong>Available</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Location On :</strong>18 Mtr. wide road</p>
                              </li>
                            </ul>

                            <button class="readMoreBtn see-close industrial-btn">See more</button>

                          </div>
                        </div>
                        <div class="prize-detail-box industrial-button">
                          <div class="prize-book">
                            <div class="ind-price">
                              <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                                  Price</span></h4>
                            </div>
                            <div class="ind-query">
                              <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry11.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Factory For Rent</h3>
                            </div>

                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-63, Noida</h4>
                              <p>Factory Available for Rent</p>
                            </div>
                            <ul class="property-info eve-list  industrial-listing">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Plot Size :</strong>4000 SqMt</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                              </li>
                              <li class="df-lex">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floors :</strong>Ground to 4<sup>th</sup> Floor</p>
                              </li>
                              <li class="d-show">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Washroom :</strong>5</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Covered Area :</strong>35,000 SqFt</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Parking :</strong>Available</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Lift :</strong>2 Kone Passenger & Cargo Goods</p>
                              </li>
                            </ul>

                            <button class="readMoreBtn see-close industrial-btn">See more</button>

                          </div>
                        </div>
                        <div class="prize-detail-box industrial-button">
                          <div class="prize-book">
                            <div class="ind-price">
                              <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                                  Price</span></h4>
                            </div>
                            <div class="ind-query">
                              <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry1.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Factory For Rent</h3>
                            </div>

                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-63, Noida</h4>
                              <p>Factory Available for Rent</p>
                            </div>
                            <ul class="property-info eve-list industrial-listing">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Plot Size :</strong>3200 SqMt</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Facing :</strong>South-West</p>
                              </li>
                              <li class="df-lex">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floors :</strong>Basement to 3<sup>rd</sup> Floor</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props d-show">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Covered Area :</strong>100000 SqFt</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Parking :</strong>Available</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Electricity Load :</strong>750 kva</p>
                              </li>
                            </ul>

                            <button class="readMoreBtn see-close industrial-btn">See more</button>

                          </div>
                        </div>
                        <div class="prize-detail-box industrial-button">
                          <div class="prize-book">
                            <div class="ind-price">
                              <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                                  Price</span></h4>
                            </div>
                            <div class="ind-query">
                              <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="tab3" class="tab-pane">
                <div class="container-fluid room-collection space-reduce">
                  <h2 class="tab-heading-locate"><i class="fa-solid fa-location-dot"></i>Sector PH II Noida</h2>
                  <div class="container space-reduce">
                    <div class="row">
                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry1.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Factory For Rent</h3>
                            </div>

                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-PH II , Noida</h4>
                              <p>Factory Available for Rent</p>
                            </div>
                            <ul class="property-info eve-list industrial-listing long-parameter">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Plot Size :</strong>2335 SqMt</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Facing :</strong>North-West</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                              </li>
                              <li class="df-lex">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floors :</strong>Basement to 3<sup>rd</sup> Floor</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props d-show">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Parking :</strong>Available</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Covered Area :</strong>14,000 SqFt</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Located On :</strong>60 Mtr. Wider Road</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Electricity Load :</strong>100 kva</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Lift :</strong>1 Passenger</p>
                              </li>
                            </ul>

                            <button class="readMoreBtn see-close industrial-btn">See more</button>

                          </div>
                        </div>
                        <div class="prize-detail-box industrial-button">
                          <div class="prize-book">
                            <div class="ind-price">
                              <h4><strong>Rs. 28/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                                  Price</span></h4>
                            </div>
                            <div class="ind-query">
                              <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="tab4" class="tab-pane">
                <div class="container-fluid room-collection space-reduce">
                  <h2 class="tab-heading-locate"><i class="fa-solid fa-location-dot"></i>Sector HC Noida</h2>
                  <div class="container space-reduce">
                    <div class="row">
                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry9.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Factory For Rent</h3>
                            </div>

                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-HC, Noida</h4>
                              <p>Factory Available for Rent</p>
                            </div>
                            <ul class="property-info industrial-listing">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Plot Size :</strong>1950 SqMt</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Facing :</strong>East</p>
                              </li>

                              <li class="df-lex">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floors :</strong>Basement to 2<sup>nd</sup> Floor</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Covered Area :</strong>52,000 SqFt</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Located On :</strong>30 Mtr. Wide Road</p>
                              </li>

                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Washroom :</strong>4</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Parking :</strong>Available</p>
                              </li>
                            </ul>

                            <button class="readMoreBtn see-close industrial-btn">See more</button>

                          </div>
                        </div>
                        <div class="prize-detail-box industrial-button">
                          <div class="prize-book">
                            <div class="ind-price">
                              <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                                  Price</span></h4>
                            </div>
                            <div class="ind-query">
                              <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                Now</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Property tab End -->

    <!-- All Properties Start -->
    <section class="section-to-hide">
      <div class="container-fluid room-collection space-reduce">
        <div class="container space-reduce">
          <div class="row">

          <div class="col-md-12 porel">
            <div class="bg-ww">
              <div class="page">
                <div class="row">
                  <div class="swiper round-border">

                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry1.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                  </div>
                </div>
                <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                  <h3>Factory For Rent</h3>
                </div>

              </div>
              <div class="seperate">
                <div class="room-name">
                  <h4><i class="fa-solid fa-location-dot"></i>Sector-85, Noida</h4>
                  <p>Factory Available for Rent</p>
                </div>
                <ul class="property-info industrial-listing">
                  <li>
                    <i class="fa-solid fa-chart-area"></i>
                    <p><strong>Plot Size :</strong>3800 SqMt</p>
                  </li>

                  <li>
                    <i class="fa-solid fa-star"></i>
                    <p><strong>Facing :</strong>North facing</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-toilet"></i>
                    <p><strong>Washroom :</strong>5</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Floors :</strong>BSMT+GF+FF+SF+3rd+4th</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Covered Area :</strong>1,25,000 SqFt</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-table"></i>
                    <p><strong>Located On:</strong>24 Mtr. Wide Road</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Parking :</strong>Available</p>
                  </li>
                </ul>

                <button class="readMoreBtn see-close industrial-btn">See more</button>

              </div>
            </div>
            <div class="prize-detail-box industrial-button">
              <div class="prize-book">
                <div class="ind-price">
                  <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                      Price</span></h4>
                </div>
                <div class="ind-query">
                  <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                    Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 porel">
            <div class="bg-ww">
              <div class="page">
                <div class="row">
                  <div class="swiper round-border">

                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry4.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry5.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry6.jpg" alt="Factory Space" style="width: 100%;">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                  </div>
                </div>
                <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                  <h3>Factory For Rent</h3>
                </div>

              </div>
              <div class="seperate">
                <div class="room-name">
                  <h4><i class="fa-solid fa-location-dot"></i>Sector-85, Noida</h4>
                  <p>Factory Available for Rent</p>
                </div>
                <ul class="property-info eve-list industrial-listing">
                  <li>
                    <i class="fa-solid fa-chart-area"></i>
                    <p><strong>Plot Size :</strong>3900 SqMt</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-table"></i>
                    <p><strong>Located On:</strong>24 Mtr. Wide Road</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Floors :</strong>BSMT+GF+FF+SF+3rd+4th</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props d-show">
                    <i class="fa-solid fa-toilet"></i>
                    <p><strong>Washroom :</strong>6</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Covered Area :</strong>1.50.000 SqFt</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props s-show">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Parking :</strong>Available</p>
                  </li>
                </ul>

                <button class="readMoreBtn see-close industrial-btn">See more</button>

              </div>
            </div>
            <div class="prize-detail-box industrial-button">
              <div class="prize-book">
                <div class="ind-price">
                  <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                      Price</span></h4>
                </div>
                <div class="ind-query">
                  <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                    Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 porel">
            <div class="bg-ww">
              <div class="page">
                <div class="row">
                  <div class="swiper round-border">

                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry7.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry8.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry9.jpg" alt="Factory Space" style="width: 100%;">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                  </div>
                </div>
                <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                  <h3>Factory For Rent</h3>
                </div>

              </div>
              <div class="seperate">
                <div class="room-name">
                  <h4><i class="fa-solid fa-location-dot"></i>Sector-85, Noida</h4>
                  <p>Factory Available for Rent</p>
                </div>
                <ul class="property-info industrial-listing">
                  <li>
                    <i class="fa-solid fa-chart-area"></i>
                    <p><strong>Plot Size :</strong>3100 SqMt</p>
                  </li>

                  <li>
                    <i class="fa-solid fa-table"></i>
                    <p><strong>Located On:</strong>24 Mtr. Wide Road</p>
                  </li>
                  <li class="df-lex">
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Floors :</strong>Basement to 4<sup>th</sup> Floor</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-toilet"></i>
                    <p><strong>Washroom :</strong>6</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Covered Area :</strong>1,25,000 SqFt</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Parking :</strong>Available</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Lift :</strong>1 Passanger & 1 Goods</p>
                  </li>
                </ul>

                <button class="readMoreBtn see-close industrial-btn">See more</button>

              </div>
            </div>
            <div class="prize-detail-box industrial-button">
              <div class="prize-book">
                <div class="ind-price">
                  <h4><strong>Rs. 26/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                      Price</span></h4>
                </div>
                <div class="ind-query">
                  <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                    Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 porel">
            <div class="bg-ww">
              <div class="page">
                <div class="row">
                  <div class="swiper round-border">

                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry10.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry11.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry12.jpg" alt="Factory Space" style="width: 100%;">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                  </div>
                </div>
                <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                  <h3>Factory For Rent</h3>
                </div>

              </div>
              <div class="seperate">
                <div class="room-name">
                  <h4><i class="fa-solid fa-location-dot"></i>Sector-85, Noida</h4>
                  <p>Factory Available for Rent</p>
                </div>
                <ul class="property-info eve-list industrial-listing">
                  <li>
                    <i class="fa-solid fa-chart-area"></i>
                    <p><strong>Plot Size :</strong>4000 SqMt</p>
                  </li>

                  <li>
                    <i class="fa-solid fa-table"></i>
                    <p><strong>Located On:</strong>24 Mtr. Wide Road</p>
                  </li>
                  <li class="df-lex">
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Floors :</strong>Basement to 2<sup>nd</sup> Floor</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props d-show">
                    <i class="fa-solid fa-toilet"></i>
                    <p><strong>Washroom :</strong>5</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Covered Area :</strong>1,25,000 SqFt</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Parking :</strong>Available</p>
                  </li>
                </ul>

                <button class="readMoreBtn see-close industrial-btn">See more</button>

              </div>
            </div>
            <div class="prize-detail-box industrial-button">
              <div class="prize-book">
                <div class="ind-price">
                  <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                      Price</span></h4>
                </div>
                <div class="ind-query">
                  <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                    Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 porel">
            <div class="bg-ww">
              <div class="page">
                <div class="row">
                  <div class="swiper round-border">

                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry13.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry14.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry15.jpg" alt="Factory Space" style="width: 100%;">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                  </div>
                </div>
                <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                  <h3>Factory For Rent</h3>
                </div>

              </div>
              <div class="seperate">
                <div class="room-name">
                  <h4><i class="fa-solid fa-location-dot"></i>Sector-85, Noida</h4>
                  <p>Factory Available for Rent</p>
                </div>
                <ul class="property-info eve-list industrial-listing">
                  <li>
                    <i class="fa-solid fa-chart-area"></i>
                    <p><strong>Plot Size :</strong>4000 SqMt</p>
                  </li>

                  <li>
                    <i class="fa-solid fa-table"></i>
                    <p><strong>Located On:</strong>45 Mtr. Wide Road</p>
                  </li>
                  <li class="df-lex">
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Floors :</strong>Basement to 2<sup>nd</sup> Floor</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props d-show">
                    <i class="fa-solid fa-toilet"></i>
                    <p><strong>Washroom :</strong>5</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Covered Area :</strong>1,25,000 SqFt</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Parking :</strong>Available</p>
                  </li>
                </ul>

                <button class="readMoreBtn see-close industrial-btn">See more</button>

              </div>
            </div>
            <div class="prize-detail-box industrial-button">
              <div class="prize-book">
                <div class="ind-price">
                  <h4><strong>Rs. 26/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                      Price</span></h4>
                </div>
                <div class="ind-query">
                  <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                    Now</button>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-12 porel">
            <div class="bg-ww">
              <div class="page">
                <div class="row">
                  <div class="swiper round-border">

                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry1.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                  </div>
                </div>
                <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                  <h3>Factory For Rent</h3>
                </div>

              </div>
              <div class="seperate">
                <div class="room-name">
                  <h4><i class="fa-solid fa-location-dot"></i>Sector-63, Noida</h4>
                  <p>Factory Available for Rent</p>
                </div>
                <ul class="property-info eve-list industrial-listing">
                  <li>
                    <i class="fa-solid fa-chart-area"></i>
                    <p><strong>Plot Size :</strong>4000 SqMt</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                  </li>
                  <li class="df-lex">
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Floors :</strong>Basement to 3<sup>rd</sup> Floor</p>
                  </li>
                  <li class="d-show">
                    <i class="fa-solid fa-toilet"></i>
                    <p><strong>Washroom :</strong>5</p>
                  </li>

                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Covered Area :</strong>1,30,000 SqFt</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Parking :</strong>Available</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Lift :</strong>4 Lift Provision</p>
                  </li>
                </ul>

                <button class="readMoreBtn see-close industrial-btn">See more</button>

              </div>
            </div>
            <div class="prize-detail-box industrial-button">
              <div class="prize-book">
                <div class="ind-price">
                  <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                      Price</span></h4>
                </div>
                <div class="ind-query">
                  <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                    Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 porel">
            <div class="bg-ww">
              <div class="page">
                <div class="row">
                  <div class="swiper round-border">

                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry10.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                  </div>
                </div>
                <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                  <h3>Factory For Rent</h3>
                </div>

              </div>
              <div class="seperate">
                <div class="room-name">
                  <h4><i class="fa-solid fa-location-dot"></i>Sector-63, Noida</h4>
                  <p>Factory Available for Rent</p>
                </div>
                <ul class="property-info industrial-listing">
                  <li>
                    <i class="fa-solid fa-chart-area"></i>
                    <p><strong>Plot Size :</strong>4000 SqMt</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Facing :</strong>South Facing</p>
                  </li>
                  <li class="df-lex">
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Floors :</strong>Ground to 3<sup>rd</sup> Floor</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Washroom :</strong>4</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Covered Area :</strong>1,25,000 SqFt</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Parking :</strong>Available</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Location On :</strong>18 Mtr. wide road</p>
                  </li>
                </ul>

                <button class="readMoreBtn see-close industrial-btn">See more</button>

              </div>
            </div>
            <div class="prize-detail-box industrial-button">
              <div class="prize-book">
                <div class="ind-price">
                  <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                      Price</span></h4>
                </div>
                <div class="ind-query">
                  <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                    Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 porel">
            <div class="bg-ww">
              <div class="page">
                <div class="row">
                  <div class="swiper round-border">

                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry11.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                  </div>
                </div>
                <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                  <h3>Factory For Rent</h3>
                </div>

              </div>
              <div class="seperate">
                <div class="room-name">
                  <h4><i class="fa-solid fa-location-dot"></i>Sector-63, Noida</h4>
                  <p>Factory Available for Rent</p>
                </div>
                <ul class="property-info eve-list  industrial-listing">
                  <li>
                    <i class="fa-solid fa-chart-area"></i>
                    <p><strong>Plot Size :</strong>4000 SqMt</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                  </li>
                  <li class="df-lex">
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Floors :</strong>Ground to 4<sup>th</sup> Floor</p>
                  </li>
                  <li class="d-show">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Washroom :</strong>5</p>
                  </li>

                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Covered Area :</strong>35,000 SqFt</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Parking :</strong>Available</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Lift :</strong>2 Kone Passenger & Cargo Goods</p>
                  </li>
                </ul>

                <button class="readMoreBtn see-close industrial-btn">See more</button>

              </div>
            </div>
            <div class="prize-detail-box industrial-button">
              <div class="prize-book">
                <div class="ind-price">
                  <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                      Price</span></h4>
                </div>
                <div class="ind-query">
                  <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                    Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 porel">
            <div class="bg-ww">
              <div class="page">
                <div class="row">
                  <div class="swiper round-border">

                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry1.jpg" alt="Factory Space" style="width: 100%;">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                  </div>
                </div>
                <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                  <h3>Factory For Rent</h3>
                </div>

              </div>
              <div class="seperate">
                <div class="room-name">
                  <h4><i class="fa-solid fa-location-dot"></i>Sector-63, Noida</h4>
                  <p>Factory Available for Rent</p>
                </div>
                <ul class="property-info eve-list industrial-listing">
                  <li>
                    <i class="fa-solid fa-chart-area"></i>
                    <p><strong>Plot Size :</strong>3200 SqMt</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Facing :</strong>South-West</p>
                  </li>
                  <li class="df-lex">
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Floors :</strong>Basement to 3<sup>rd</sup> Floor</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props d-show">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Covered Area :</strong>100000 SqFt</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Parking :</strong>Available</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Electricity Load :</strong>750 kva</p>
                  </li>
                </ul>

                <button class="readMoreBtn see-close industrial-btn">See more</button>

              </div>
            </div>
            <div class="prize-detail-box industrial-button">
              <div class="prize-book">
                <div class="ind-price">
                  <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                      Price</span></h4>
                </div>
                <div class="ind-query">
                  <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                    Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 porel">
            <div class="bg-ww">
              <div class="page">
                <div class="row">
                  <div class="swiper round-border">

                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry1.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                  </div>
                </div>
                <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                  <h3>Factory For Rent</h3>
                </div>

              </div>
              <div class="seperate">
                <div class="room-name">
                  <h4><i class="fa-solid fa-location-dot"></i>Sector-PH II , Noida</h4>
                  <p>Factory Available for Rent</p>
                </div>
                <ul class="property-info eve-list industrial-listing long-parameter">
                  <li>
                    <i class="fa-solid fa-chart-area"></i>
                    <p><strong>Plot Size :</strong>2335 SqMt</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Facing :</strong>North-West</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                  </li>
                  <li class="df-lex">
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Floors :</strong>Basement to 3<sup>rd</sup> Floor</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props d-show">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Parking :</strong>Available</p>
                  </li>

                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Covered Area :</strong>14,000 SqFt</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Located On :</strong>60 Mtr. Wider Road</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Electricity Load :</strong>100 kva</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Lift :</strong>1 Passenger</p>
                  </li>
                </ul>

                <button class="readMoreBtn see-close industrial-btn">See more</button>

              </div>
            </div>
            <div class="prize-detail-box industrial-button">
              <div class="prize-book">
                <div class="ind-price">
                  <h4><strong>Rs. 28/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                      Price</span></h4>
                </div>
                <div class="ind-query">
                  <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                    Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 porel">
            <div class="bg-ww">
              <div class="page">
                <div class="row">
                  <div class="swiper round-border">

                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry9.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry2.jpg" alt="Factory Space" style="width: 100%;">
                      </div>
                      <div class="swiper-slide" style="width: 100%">
                        <img src="assets/images/industry3.jpg" alt="Factory Space" style="width: 100%;">
                      </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                  </div>
                </div>
                <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                  <h3>Factory For Rent</h3>
                </div>

              </div>
              <div class="seperate">
                <div class="room-name">
                  <h4><i class="fa-solid fa-location-dot"></i>Sector-HC, Noida</h4>
                  <p>Factory Available for Rent</p>
                </div>
                <ul class="property-info industrial-listing">
                  <li>
                    <i class="fa-solid fa-chart-area"></i>
                    <p><strong>Plot Size :</strong>1950 SqMt</p>
                  </li>
                  <li>
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Facing :</strong>East</p>
                  </li>

                  <li class="df-lex">
                    <i class="fa-solid fa-building"></i>
                    <p><strong>Floors :</strong>Basement to 2<sup>nd</sup> Floor</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Furnishing Type :</strong>Bare-Shell</p>
                  </li>

                  <li>
                    <i class="fa-solid fa-business-time"></i>
                    <p><strong>Covered Area :</strong>52,000 SqFt</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <p><strong>Located On :</strong>30 Mtr. Wide Road</p>
                  </li>

                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Washroom :</strong>4</p>
                  </li>
                  <li class="mobile-hide mb-hidden-props mb-hidden-props">
                    <i class="fa-solid fa-clipboard"></i>
                    <p><strong>Parking :</strong>Available</p>
                  </li>
                </ul>

                <button class="readMoreBtn see-close industrial-btn">See more</button>

              </div>
            </div>
            <div class="prize-detail-box industrial-button">
              <div class="prize-book">
                <div class="ind-price">
                  <h4><strong>Rs. 30/-</strong> per sqft<span class="negotiable-tag"> ~ Negotiable
                      Price</span></h4>
                </div>
                <div class="ind-query">
                  <a href="tel:91880050681"><i class="fa-solid fa-phone-volume"></i>Call Now</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                    Now</button>
                </div>
              </div>
            </div>
          </div>



          </div>
        </div>
      </div>
    </section>
    <!-- All Properties End -->

    <!-- Sticky Form Start -->
    <div class="container-fluid bottom-form-blue">

      <div class="left-form">
        <h2 class="desktop-view"><i class="fa-solid fa-clipboard"></i>Get In Touch With Our Agents</h2>
        <p>Fill Up the form and get an<strong>Expert Call</strong></p>
        <div class="btn-sec">

        </div>
      </div>
      <div class="form-section">
        <form id="contact-form" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" name="footerform" onsubmit="return validatefooterForm();">
          <input type="hidden" name="oid" value="00D90000000gJ1h">
          <input type="hidden" name="retURL" id="retURL" value="https://properties.buniyad.com/lease-noida/thank-you.php">
          <input type="hidden" name="00N90000004FeK4" id="00N90000004FeK4" value="PPC LANDING PAGE - Lease Industrial Factory in Noida">
          <input type="hidden" name="00N90000004FeK9" id="00N90000004FeK9" value="Noida">
          <input type="hidden" name="lead_source" id="lead_source" value="Mini-Query">
          <div class="row">
            <div class="col-lg-12">
              <fieldset>
                <label for="name">Full Name</label>
                <input id="first_name" class="form-control tpfrm" maxlength="20" name="first_name" size="20" type="text" placeholder="Name" autocomplete="off" />

              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <label for="phone">Mobile Number</label>
                <input id="phone" class="form-control tpfrm" maxlength="10" name="phone" placeholder="Mobile..." size="20" type="text" autocomplete="off" />
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <label for="email">Email Address</label>
                <input name="email" id="email" class="form-control tpfrm" type="email" placeholder="Email" autocomplete="off">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <label for="message">Message</label>
                <textarea name="description" class="form-control" id="description" placeholder="Message" autocomplete="off" rows="1" cols="50"></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="orange-button">Send Message</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>

    </div>
    <!-- Sticky Form End -->

    <!-- About Section Start -->
    <?php include 'about.php'; ?>
    <!-- About Section End -->

    <!-- FAQ & Contact Start  -->
    <?php include 'faq.php'; ?>
    <!-- FAQ & Contact End  -->

    <!-- Login Modal Start -->
    <div class="modal fade v-center" id="loginModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-md-6 modal-image">
                  <img src="assets/images/industrial-modal.jpg" alt="Office Space">
                </div>
                <div class="col-md-6 modal-form">
                  <div class="devide">
                    <div class="modal-logo">
                      <img src="assets/images/logo.svg" alt="flag">
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <h5><i class="fa-solid fa-clipboard"></i>Enquire Now</h5>
                  <p class="modal-para">Fill Up the form and get an <br> <strong>Expert Call</strong></p>

                  <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" name="onloadform" onsubmit="return validateFormload();">
                    <input type="hidden" name="oid" value="00D90000000gJ1h">
                    <input type="hidden" name="retURL" id="retURL" value="https://properties.buniyad.com/lease-noida/thank-you.php">
                    <input type="hidden" name="00N90000004FeK4" id="00N90000004FeK4" value="PPC LANDING PAGE - Lease Industrial Factory in Noida">
                    <input type="hidden" name="00N90000004FeK9" id="00N90000004FeK9" value="Noida">
                    <input type="hidden" name="lead_source" id="lead_source" value="Mini-Query"> <span class="pop-msg">
                      <div class="form-group">
                        <input id="first_name" class="form-control tpfrm" maxlength="20" name="first_name" size="20" type="text" placeholder="Enter your name" autocomplete="off" required />
                      </div>
                      <div class="form-group">
                        <input id="phone" class="form-control tpfrm" maxlength="10" name="phone" size="20" type="text" placeholder="Mobile Number" autocomplete="off" required />
                      </div>
                      <button type="submit" name="submit" value="Send Query" class="modal-btn frm-btn" id="btn-validate">Send Query</button>
                  </form>

                  <a class="call-btn" href="tel:+91-8800506481">+91 88005 06481</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Login Modal End -->

  </main>

  <!-- Footer Start -->
  <footer>
    <?php include 'footer.php'; ?>
  </footer>
  <!-- Footer End -->

  <script>
    const buttonToTabMap = {
      'Sector 85': 'tab1',
      'Sector 63': 'tab2',
      'Sector PH II': 'tab3',
      'Sector HC': 'tab4',
    };
  </script>

</body>

</html>