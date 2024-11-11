<!DOCTYPE html>
<html lang="en">

<head>
  <?php  
  $pageTitle = "Lease Commercial Office Space in Noida";
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
                  <input type="hidden" name="00N90000004FeK4" id="00N90000004FeK4" value="PPC LANDING PAGE - Commercial Office Space Noida">
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
    <section class="pos-sticky">
      <div class="container-fluid dk-blue">
        <div class="bg-darkb">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle all-btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-industry"></i> Commercial Properties
            </button>

            <ul class="list-paramerter" aria-labelledby="dropdownMenuButton1">

              <li><button class="dropdown-item clickable" onclick="addFilter('Sector 62')">Sector 62</button></li>

              <li><button class="dropdown-item clickable" onclick="addFilter('Sector 63')">Sector 63</button></li>

              <li><button class="dropdown-item clickable" onclick="addFilter('Sector 16')">Sector 16</button></li>

              <li><button class="dropdown-item clickable" onclick="addFilter('Sector 11')">Sector 11</button></li>
              <li><button class="dropdown-item clickable" onclick="addFilter('Sector 57')">Sector 57</button></li>
              <li><button class="dropdown-item clickable" onclick="addFilter('All')">View All</button></li>
            </ul>

          </div>

        </div>
        <div class="container-fluid lt-blue">
          <div class="container">
            <div id="filters"></div>
            <div class="tab-content">

              <div id="tab1" class="tab-pane">
                <!-- Property list Start -->
                <div class="container-fluid room-collection space-reduce">
                  <h2 class="tab-heading-locate"><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h2>
                  <div class="container space-reduce">
                    <div class="row">
                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity4.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity5.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity6.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>15 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>7000 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>3</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>3</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>4<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>54</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>15 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 65/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity7.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity8.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity9.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>5400 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>5</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>4<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>66</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 57/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity10.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity11.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity12.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>5500 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>2</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>5<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>70</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 70/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity19.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity20.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity21.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>18.90 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>4500 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>3</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>3<sup>rd</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>50</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>18.90 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 75/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- Property list End -->
              </div>
              <div id="tab2" class="tab-pane">
                <div class="container-fluid room-collection space-reduce">
                  <h2 class="tab-heading-locate"><i class="fa-solid fa-location-dot"></i>Sector-63 Noida</h2>
                  <div class="container space-reduce">
                    <div class="row">

                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity13.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity14.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity15.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-63 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>5000 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>2</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>5<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>70</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 55/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity22.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity23.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity24.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-63 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>7500 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>3</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>1<sup>st</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>114</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 60/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                  <h2 class="tab-heading-locate"><i class="fa-solid fa-location-dot"></i>Sector-16 Noida</h2>
                  <div class="container space-reduce">
                    <div class="row">

                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity1.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity2.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity3.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>18 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector 16A, Film City Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>22000 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>3</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>4</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>4<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>200</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>18 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 90/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                  Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity25.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity26.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity27.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>21 Rs per sqft (including chillar Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-16 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>11500 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>4</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>10<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>105</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>21 Rs per sqft (including chillar Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 110/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                  <h2 class="tab-heading-locate"><i class="fa-solid fa-location-dot"></i>Sector-11 Noida</h2>
                  <div class="container space-reduce">
                    <div class="row">

                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity16.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity17.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity18.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-11 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>5000 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>3</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>5</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>2<sup>nd</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>130</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 50/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div id="tab5" class="tab-pane">
                <div class="container-fluid room-collection space-reduce">
                  <h2 class="tab-heading-locate"><i class="fa-solid fa-location-dot"></i>Sector-57 Noida</h2>
                  <div class="container space-reduce">
                    <div class="row">

                      <div class="col-md-12 porel">
                        <div class="bg-ww">
                          <div class="page">
                            <div class="row">
                              <div class="swiper round-border">

                                <div class="swiper-wrapper">

                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity28.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity29.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity30.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-57 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>22000 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>6</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>6-7</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>10<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>450</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 45/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div id="tab6" class="tab-pane">
                <!-- Property list Start -->

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
                                    <img src="assets/images/filmcity1.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity2.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity3.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>18 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector 16A, Film City Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>22000 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>3</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>4</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>4<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>200</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>18 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 90/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                                  Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity4.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity5.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity6.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>15 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>7000 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>3</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>3</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>4<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>54</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>15 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 65/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity7.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity8.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity9.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>5400 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>5</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>4<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>66</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 57/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity10.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity11.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity12.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>5500 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>2</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>5<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>70</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 70/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity13.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity14.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity15.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-63 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>5000 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>2</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>5<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>70</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 55/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity16.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity17.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity18.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-11 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>5000 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>3</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>5</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>2<sup>nd</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>130</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 50/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity19.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity20.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity21.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>18.90 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>4500 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>3</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>3<sup>rd</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>50</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>18.90 Rs per sqft (including chiller Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 50/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity22.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity23.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity24.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-63 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>7500 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>3</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>1<sup>st</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>114</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 60/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity25.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity26.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity27.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>21 Rs per sqft (including chillar Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-16 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>11500 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>2</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>4</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>10<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>105</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>21 Rs per sqft (including chillar Cost)</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 110/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
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
                                    <img src="assets/images/filmcity28.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity29.jpg" alt="Office Space" style="width: 100%;">
                                  </div>
                                  <div class="swiper-slide" style="width: 100%">
                                    <img src="assets/images/filmcity30.jpg" alt="Office Space" style="width: 100%;">
                                  </div>

                                </div>
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                              </div>
                            </div>
                            <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                              <h3>Brand New Office</h3>
                            </div>
                            <div class="prize-detail-box maint-box">
                              <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                          </div>
                          <div class="seperate">
                            <div class="room-name">
                              <h4><i class="fa-solid fa-location-dot"></i>Sector-57 Noida</h4>
                              <p>Office Available For Rent</p>
                            </div>
                            <ul class="property-info">
                              <li>
                                <i class="fa-solid fa-chart-area"></i>
                                <p><strong>Area :</strong>22000 Sqft</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-business-time"></i>
                                <p><strong>Meeting room :</strong>6</p>
                              </li>

                              <li>
                                <i class="fa-solid fa-star"></i>
                                <p><strong>Conference Room :</strong>1</p>
                              </li>
                              <li>
                                <i class="fa-solid fa-table"></i>
                                <p><strong>Cabin :</strong>6-7</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-building"></i>
                                <p><strong>Floor :</strong>10<sup>th</sup> Floor</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <p><strong>Workstations :</strong>450</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-toilet"></i>
                                <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                              </li>
                              <li class="mobile-hide mb-hidden-props">
                                <i class="fa-solid fa-clipboard"></i>
                                <p><strong>Reception with waiting area :</strong>1</p>
                              </li>
                            </ul>

                            <div class="prize-detail-box maint-box desk-show">
                              <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                              <button class="readMoreBtn see-close">See more</button>
                              <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                            </div>
                            <div class="prize-detail-box">

                              <div class="prize-book">
                                <h4><strong>Rs. 45/-</strong> per sqft</h4>

                                <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <!-- Property list End -->
              </div>
              <!-- Add more tab content here -->
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
                          <img src="assets/images/filmcity1.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity2.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity3.jpg" alt="Office Space" style="width: 100%;">
                        </div>

                      </div>
                      <div class="swiper-pagination"></div>

                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                    </div>
                  </div>
                  <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                    <h3>Brand New Office</h3>
                  </div>
                  <div class="prize-detail-box maint-box">
                    <p><strong>Maintenance - </strong>18 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                </div>
                <div class="seperate">
                  <div class="room-name">
                    <h4><i class="fa-solid fa-location-dot"></i>Sector 16A, Film City Noida</h4>
                    <p>Office Available For Rent</p>
                  </div>
                  <ul class="property-info">
                    <li>
                      <i class="fa-solid fa-chart-area"></i>
                      <p><strong>Area :</strong>22000 Sqft</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-business-time"></i>
                      <p><strong>Meeting room :</strong>3</p>
                    </li>

                    <li>
                      <i class="fa-solid fa-star"></i>
                      <p><strong>Conference Room :</strong>1</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-table"></i>
                      <p><strong>Cabin :</strong>4</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props mb-hidden-props">
                      <i class="fa-solid fa-building"></i>
                      <p><strong>Floor :</strong>4<sup>th</sup> Floor</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props mb-hidden-props">
                      <i class="fa-solid fa-boxes-stacked"></i>
                      <p><strong>Workstations :</strong>200</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props mb-hidden-props">
                      <i class="fa-solid fa-toilet"></i>
                      <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props mb-hidden-props">
                      <i class="fa-solid fa-clipboard"></i>
                      <p><strong>Reception with waiting area :</strong>1</p>
                    </li>
                  </ul>

                  <div class="prize-detail-box maint-box desk-show">
                    <p><strong>Maintenance - </strong>18 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                  <div class="prize-detail-box">

                    <div class="prize-book">
                      <h4><strong>Rs. 90/-</strong> per sqft</h4>

                      <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire
                        Now</button>
                    </div>
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
                          <img src="assets/images/filmcity4.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity5.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity6.jpg" alt="Office Space" style="width: 100%;">
                        </div>

                      </div>
                      <div class="swiper-pagination"></div>

                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                    </div>
                  </div>
                  <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                    <h3>Brand New Office</h3>
                  </div>
                  <div class="prize-detail-box maint-box">
                    <p><strong>Maintenance - </strong>15 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                </div>
                <div class="seperate">
                  <div class="room-name">
                    <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                    <p>Office Available For Rent</p>
                  </div>
                  <ul class="property-info">
                    <li>
                      <i class="fa-solid fa-chart-area"></i>
                      <p><strong>Area :</strong>7000 Sqft</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-business-time"></i>
                      <p><strong>Meeting room :</strong>3</p>
                    </li>

                    <li>
                      <i class="fa-solid fa-star"></i>
                      <p><strong>Conference Room :</strong>1</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-table"></i>
                      <p><strong>Cabin :</strong>3</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-building"></i>
                      <p><strong>Floor :</strong>4<sup>th</sup> Floor</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-boxes-stacked"></i>
                      <p><strong>Workstations :</strong>54</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-toilet"></i>
                      <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-clipboard"></i>
                      <p><strong>Reception with waiting area :</strong>1</p>
                    </li>
                  </ul>

                  <div class="prize-detail-box maint-box desk-show">
                    <p><strong>Maintenance - </strong>15 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                  <div class="prize-detail-box">

                    <div class="prize-book">
                      <h4><strong>Rs. 65/-</strong> per sqft</h4>

                      <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                    </div>
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
                          <img src="assets/images/filmcity7.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity8.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity9.jpg" alt="Office Space" style="width: 100%;">
                        </div>

                      </div>
                      <div class="swiper-pagination"></div>

                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                    </div>
                  </div>
                  <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                    <h3>Brand New Office</h3>
                  </div>
                  <div class="prize-detail-box maint-box">
                    <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                </div>
                <div class="seperate">
                  <div class="room-name">
                    <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                    <p>Office Available For Rent</p>
                  </div>
                  <ul class="property-info">
                    <li>
                      <i class="fa-solid fa-chart-area"></i>
                      <p><strong>Area :</strong>5400 Sqft</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-business-time"></i>
                      <p><strong>Meeting room :</strong>2</p>
                    </li>

                    <li>
                      <i class="fa-solid fa-star"></i>
                      <p><strong>Conference Room :</strong>1</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-table"></i>
                      <p><strong>Cabin :</strong>5</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-building"></i>
                      <p><strong>Floor :</strong>4<sup>th</sup> Floor</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-boxes-stacked"></i>
                      <p><strong>Workstations :</strong>66</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-toilet"></i>
                      <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-clipboard"></i>
                      <p><strong>Reception with waiting area :</strong>1</p>
                    </li>
                  </ul>

                  <div class="prize-detail-box maint-box desk-show">
                    <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                  <div class="prize-detail-box">

                    <div class="prize-book">
                      <h4><strong>Rs. 57/-</strong> per sqft</h4>

                      <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                    </div>
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
                          <img src="assets/images/filmcity10.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity11.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity12.jpg" alt="Office Space" style="width: 100%;">
                        </div>

                      </div>
                      <div class="swiper-pagination"></div>

                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                    </div>
                  </div>
                  <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                    <h3>Brand New Office</h3>
                  </div>
                  <div class="prize-detail-box maint-box">
                    <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                </div>
                <div class="seperate">
                  <div class="room-name">
                    <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                    <p>Office Available For Rent</p>
                  </div>
                  <ul class="property-info">
                    <li>
                      <i class="fa-solid fa-chart-area"></i>
                      <p><strong>Area :</strong>5500 Sqft</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-business-time"></i>
                      <p><strong>Meeting room :</strong>2</p>
                    </li>

                    <li>
                      <i class="fa-solid fa-star"></i>
                      <p><strong>Conference Room :</strong>1</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-table"></i>
                      <p><strong>Cabin :</strong>2</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-building"></i>
                      <p><strong>Floor :</strong>5<sup>th</sup> Floor</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-boxes-stacked"></i>
                      <p><strong>Workstations :</strong>70</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-toilet"></i>
                      <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-clipboard"></i>
                      <p><strong>Reception with waiting area :</strong>1</p>
                    </li>
                  </ul>

                  <div class="prize-detail-box maint-box desk-show">
                    <p><strong>Maintenance - </strong>10 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                  <div class="prize-detail-box">

                    <div class="prize-book">
                      <h4><strong>Rs. 70/-</strong> per sqft</h4>

                      <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                    </div>
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
                          <img src="assets/images/filmcity13.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity14.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity15.jpg" alt="Office Space" style="width: 100%;">
                        </div>

                      </div>
                      <div class="swiper-pagination"></div>

                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                    </div>
                  </div>
                  <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                    <h3>Brand New Office</h3>
                  </div>
                  <div class="prize-detail-box maint-box">
                    <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                </div>
                <div class="seperate">
                  <div class="room-name">
                    <h4><i class="fa-solid fa-location-dot"></i>Sector-63 Noida</h4>
                    <p>Office Available For Rent</p>
                  </div>
                  <ul class="property-info">
                    <li>
                      <i class="fa-solid fa-chart-area"></i>
                      <p><strong>Area :</strong>5000 Sqft</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-business-time"></i>
                      <p><strong>Meeting room :</strong>2</p>
                    </li>

                    <li>
                      <i class="fa-solid fa-star"></i>
                      <p><strong>Conference Room :</strong>1</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-table"></i>
                      <p><strong>Cabin :</strong>2</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-building"></i>
                      <p><strong>Floor :</strong>5<sup>th</sup> Floor</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-boxes-stacked"></i>
                      <p><strong>Workstations :</strong>70</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-toilet"></i>
                      <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-clipboard"></i>
                      <p><strong>Reception with waiting area :</strong>1</p>
                    </li>
                  </ul>

                  <div class="prize-detail-box maint-box desk-show">
                    <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                  <div class="prize-detail-box">

                    <div class="prize-book">
                      <h4><strong>Rs. 55/-</strong> per sqft</h4>

                      <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                    </div>
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
                          <img src="assets/images/filmcity16.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity17.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity18.jpg" alt="Office Space" style="width: 100%;">
                        </div>

                      </div>
                      <div class="swiper-pagination"></div>

                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                    </div>
                  </div>
                  <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                    <h3>Brand New Office</h3>
                  </div>
                  <div class="prize-detail-box maint-box">
                    <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                </div>
                <div class="seperate">
                  <div class="room-name">
                    <h4><i class="fa-solid fa-location-dot"></i>Sector-11 Noida</h4>
                    <p>Office Available For Rent</p>
                  </div>
                  <ul class="property-info">
                    <li>
                      <i class="fa-solid fa-chart-area"></i>
                      <p><strong>Area :</strong>5000 Sqft</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-business-time"></i>
                      <p><strong>Meeting room :</strong>3</p>
                    </li>

                    <li>
                      <i class="fa-solid fa-star"></i>
                      <p><strong>Conference Room :</strong>1</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-table"></i>
                      <p><strong>Cabin :</strong>5</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-building"></i>
                      <p><strong>Floor :</strong>2<sup>nd</sup> Floor</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-boxes-stacked"></i>
                      <p><strong>Workstations :</strong>130</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-toilet"></i>
                      <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-clipboard"></i>
                      <p><strong>Reception with waiting area :</strong>1</p>
                    </li>
                  </ul>

                  <div class="prize-detail-box maint-box desk-show">
                    <p><strong>Maintenance - </strong>05 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                  <div class="prize-detail-box">

                    <div class="prize-book">
                      <h4><strong>Rs. 50/-</strong> per sqft</h4>

                      <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                    </div>
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
                          <img src="assets/images/filmcity19.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity20.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity21.jpg" alt="Office Space" style="width: 100%;">
                        </div>

                      </div>
                      <div class="swiper-pagination"></div>

                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                    </div>
                  </div>
                  <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                    <h3>Brand New Office</h3>
                  </div>
                  <div class="prize-detail-box maint-box">
                    <p><strong>Maintenance - </strong>18.90 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                </div>
                <div class="seperate">
                  <div class="room-name">
                    <h4><i class="fa-solid fa-location-dot"></i>Sector-62 Noida</h4>
                    <p>Office Available For Rent</p>
                  </div>
                  <ul class="property-info">
                    <li>
                      <i class="fa-solid fa-chart-area"></i>
                      <p><strong>Area :</strong>4500 Sqft</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-business-time"></i>
                      <p><strong>Meeting room :</strong>2</p>
                    </li>

                    <li>
                      <i class="fa-solid fa-star"></i>
                      <p><strong>Conference Room :</strong>1</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-table"></i>
                      <p><strong>Cabin :</strong>3</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-building"></i>
                      <p><strong>Floor :</strong>3<sup>rd</sup> Floor</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-boxes-stacked"></i>
                      <p><strong>Workstations :</strong>50</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-toilet"></i>
                      <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-clipboard"></i>
                      <p><strong>Reception with waiting area :</strong>1</p>
                    </li>
                  </ul>

                  <div class="prize-detail-box maint-box desk-show">
                    <p><strong>Maintenance - </strong>18.90 Rs per sqft (including chiller Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                  <div class="prize-detail-box">

                    <div class="prize-book">
                      <h4><strong>Rs. 50/-</strong> per sqft</h4>

                      <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                    </div>
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
                          <img src="assets/images/filmcity22.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity23.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity24.jpg" alt="Office Space" style="width: 100%;">
                        </div>

                      </div>
                      <div class="swiper-pagination"></div>

                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                    </div>
                  </div>
                  <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                    <h3>Brand New Office</h3>
                  </div>
                  <div class="prize-detail-box maint-box">
                    <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                </div>
                <div class="seperate">
                  <div class="room-name">
                    <h4><i class="fa-solid fa-location-dot"></i>Sector-63 Noida</h4>
                    <p>Office Available For Rent</p>
                  </div>
                  <ul class="property-info">
                    <li>
                      <i class="fa-solid fa-chart-area"></i>
                      <p><strong>Area :</strong>7500 Sqft</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-business-time"></i>
                      <p><strong>Meeting room :</strong>2</p>
                    </li>

                    <li>
                      <i class="fa-solid fa-star"></i>
                      <p><strong>Conference Room :</strong>1</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-table"></i>
                      <p><strong>Cabin :</strong>3</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-building"></i>
                      <p><strong>Floor :</strong>1<sup>st</sup> Floor</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-boxes-stacked"></i>
                      <p><strong>Workstations :</strong>114</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-toilet"></i>
                      <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-clipboard"></i>
                      <p><strong>Reception with waiting area :</strong>1</p>
                    </li>
                  </ul>

                  <div class="prize-detail-box maint-box desk-show">
                    <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                  <div class="prize-detail-box">

                    <div class="prize-book">
                      <h4><strong>Rs. 60/-</strong> per sqft</h4>

                      <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                    </div>
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
                          <img src="assets/images/filmcity25.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity26.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity27.jpg" alt="Office Space" style="width: 100%;">
                        </div>

                      </div>
                      <div class="swiper-pagination"></div>

                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                    </div>
                  </div>
                  <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                    <h3>Brand New Office</h3>
                  </div>
                  <div class="prize-detail-box maint-box">
                    <p><strong>Maintenance - </strong>21 Rs per sqft (including chillar Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                </div>
                <div class="seperate">
                  <div class="room-name">
                    <h4><i class="fa-solid fa-location-dot"></i>Sector-16 Noida</h4>
                    <p>Office Available For Rent</p>
                  </div>
                  <ul class="property-info">
                    <li>
                      <i class="fa-solid fa-chart-area"></i>
                      <p><strong>Area :</strong>11500 Sqft</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-business-time"></i>
                      <p><strong>Meeting room :</strong>2</p>
                    </li>

                    <li>
                      <i class="fa-solid fa-star"></i>
                      <p><strong>Conference Room :</strong>1</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-table"></i>
                      <p><strong>Cabin :</strong>4</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-building"></i>
                      <p><strong>Floor :</strong>10<sup>th</sup> Floor</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-boxes-stacked"></i>
                      <p><strong>Workstations :</strong>105</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-toilet"></i>
                      <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-clipboard"></i>
                      <p><strong>Reception with waiting area :</strong>1</p>
                    </li>
                  </ul>

                  <div class="prize-detail-box maint-box desk-show">
                    <p><strong>Maintenance - </strong>21 Rs per sqft (including chillar Cost)</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                  <div class="prize-detail-box">

                    <div class="prize-book">
                      <h4><strong>Rs. 110/-</strong> per sqft</h4>

                      <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                    </div>
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
                          <img src="assets/images/filmcity28.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity29.jpg" alt="Office Space" style="width: 100%;">
                        </div>
                        <div class="swiper-slide" style="width: 100%">
                          <img src="assets/images/filmcity30.jpg" alt="Office Space" style="width: 100%;">
                        </div>

                      </div>
                      <div class="swiper-pagination"></div>

                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                    </div>
                  </div>
                  <div class="new-officetag"><i class="fa-solid fa-gift"></i>
                    <h3>Brand New Office</h3>
                  </div>
                  <div class="prize-detail-box maint-box">
                    <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                </div>
                <div class="seperate">
                  <div class="room-name">
                    <h4><i class="fa-solid fa-location-dot"></i>Sector-57 Noida</h4>
                    <p>Office Available For Rent</p>
                  </div>
                  <ul class="property-info">
                    <li>
                      <i class="fa-solid fa-chart-area"></i>
                      <p><strong>Area :</strong>22000 Sqft</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-business-time"></i>
                      <p><strong>Meeting room :</strong>6</p>
                    </li>

                    <li>
                      <i class="fa-solid fa-star"></i>
                      <p><strong>Conference Room :</strong>1</p>
                    </li>
                    <li>
                      <i class="fa-solid fa-table"></i>
                      <p><strong>Cabin :</strong>6-7</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-building"></i>
                      <p><strong>Floor :</strong>10<sup>th</sup> Floor</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-boxes-stacked"></i>
                      <p><strong>Workstations :</strong>450</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-toilet"></i>
                      <p><strong>Washroom :</strong>2 ( Male & Female )</p>
                    </li>
                    <li class="mobile-hide mb-hidden-props">
                      <i class="fa-solid fa-clipboard"></i>
                      <p><strong>Reception with waiting area :</strong>1</p>
                    </li>
                  </ul>

                  <div class="prize-detail-box maint-box desk-show">
                    <p><strong>Maintenance - </strong>5 Rs per sqft</p>
                    <button class="readMoreBtn see-close">See more</button>
                    <a href="tel:91880050681"><i class="fa-solid fa-phone"></i>Call Now</a>
                  </div>
                  <div class="prize-detail-box">

                    <div class="prize-book">
                      <h4><strong>Rs. 45/-</strong> per sqft</h4>

                      <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" title="Request Call Back"><i class="fa-solid fa-headset"></i>Enquire Now</button>
                    </div>
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
          <input type="hidden" name="00N90000004FeK4" id="00N90000004FeK4" value="PPC LANDING PAGE - Commercial Office Space Noida">
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
                  <img src="assets/images/lease-modal.jpg" alt="Office Space">
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
                    <input type="hidden" name="00N90000004FeK4" id="00N90000004FeK4" value="PPC LANDING PAGE - Commercial Office Space Noida">
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
      'Sector 62': 'tab1',
      'Sector 63': 'tab2',
      'Sector 16': 'tab3',
      'Sector 11': 'tab4',
      'Sector 57': 'tab5',
      'All': 'tab6',
    };
  </script>

</body>

</html>