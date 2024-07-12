@extends('layouts.master')
@section('title', 'Hotspot || HOME PAGE')
@section('main-content')
<!-- Master Slider -->
<div class="master-slider ms-skin-default" id="masterslider">
   <!-- slide 1 -->
   <div class="ms-slide slide-1" data-delay="150">
      <!-- slide background -->
      <img src="js/masterslider/style/blank.gif" data-src="{{ asset('images/banner-img.PNG') }}" alt="Slide1 background"
         style="width:100!important;height:auto!important;" />
      <!-- slide thumbnail Image -->
      <div class="ms-overlay-layers"></div>
      <h3 class="ms-layer title4 font-white font-uppercase font-thin-xs" style="left:120px; top:150px;" data-type="text"
         data-delay="2000" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)">Find Your Dream
         Car</h3>
      <h3 class="ms-layer title4 font-white font-thin-xs" style="left:120px; top:210px;" data-type="text"
         data-delay="2500" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)"><span
            class="font-color font-thin-xs heading-color">Thousand Of Cars Of Your Choice</span></h3>
      <h5 class="ms-layer text1 font-white" style="left: 120px; top: 280px;" data-type="text" data-effect="bottom(45)"
         data-duration="2500" data-delay="3000" data-ease="easeOutExpo">Lorem Ipsum is simply dummy text of the printing
         typesetting<br>
         industry is proident sunt in culpa officia deserunt mollit.
      </h5>
      <a class="ms-layer btn3 uppercase" style="left:120px; top: 390px;" data-type="text" data-delay="3500"
         data-ease="easeOutExpo" data-duration="2000" data-effect="scale(1.5,1.6)">Search Cars</a>
   </div>
   <!-- end of slide -->
   <!-- slide 2 -->
   <div class="ms-slide slide-3" data-delay="150">
      <!-- slide background -->
      <div class="ms-overlay-layers"></div>
      <img src="js/masterslider/style/blank.gif"
         data-src="{{ asset('images/banner-img.PNG') }}" alt="Slide1 background" />
      <h3 class="ms-layer title4 font-white font-uppercase font-thin-xs" style="left:120px; top:150px;" data-type="text"
         data-delay="2000" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)">Welcome to Carspot
      </h3>
      <h3 class="ms-layer title4 font-white font-thin-xs" style="left:120px; top:210px;" data-type="text"
         data-delay="2500" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)"><span
            class="font-color font-thin-xs heading-color">Find Your Dream Car</span></h3>
      <h5 class="ms-layer text1 font-white" style="left: 120px; top: 280px;" data-type="text" data-effect="bottom(45)"
         data-duration="2500" data-delay="3000" data-ease="easeOutExpo">Lorem Ipsum is simply dummy text of the printing
         typesetting<br>
         industry is proident sunt in culpa officia deserunt mollit.
      </h5>
      <a class="ms-layer btn3 uppercase" style="left:120px; top: 390px;" data-type="text" data-delay="3500"
         data-ease="easeOutExpo" data-duration="2000" data-effect="scale(1.5,1.6)"> View All Cars</a>
   </div>
   <!-- end of slide -->
   <div class="ms-slide slide-2" data-delay="150">
      <div class="ms-overlay-layers"></div>
      <!-- slide background -->
      <img src="js/masterslider/style/blank.gif"
         data-src="{{ asset('images/banner-img.PNG') }}" alt="Slide1 background" />
      <h3 class="ms-layer title4 font-white font-uppercase font-thin-xs" style="left:120px; top:150px;" data-type="text"
         data-delay="2000" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)">Welcome to Carspot
      </h3>
      <h3 class="ms-layer title4 font-white font-thin-xs" style="left:120px; top:210px;" data-type="text"
         data-delay="2500" data-duration="2000" data-ease="easeOutExpo" data-effect="skewleft(30,80)"><span
            class="font-color font-thin-xs heading-color">Find Your Dream Car</span></h3>
      <h5 class="ms-layer text1 font-white" style="left: 120px; top: 280px;" data-type="text" data-effect="bottom(45)"
         data-duration="2500" data-delay="3000" data-ease="easeOutExpo">Lorem Ipsum is simply dummy text of the printing
         typesetting<br>
         industry is proident sunt in culpa officia deserunt mollit.
      </h5>
      <a class="ms-layer btn3 uppercase" style="left:120px; top: 390px;" data-type="text" data-delay="3500"
         data-ease="easeOutExpo" data-duration="2000" data-effect="scale(1.5,1.6)"> View All Cars</a>
   </div>
   <!-- slide 2 -->
   <!-- end of slide -->
</div>
<!-- end Master Slider -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
   <!-- =-=-=-=-=-=-= Search Bar =-=-=-=-=-=-= -->
   <div class="search-bar">
      <div class="section-search search-style-2">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                  <div class="clearfix">
                     <form id="search-form" method="POST" action="{{ route('searchForm') }}">
                        @csrf
                        <div class="search-form pull-left">
                           <div class="search-form-inner pull-left">
                              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                 <div class="form-group">
                                    <label>Brands</label>
                                    <input type="text" id="brand" class="form-control search" placeholder="Type to search...">
                                    <input name="brand_id" type="hidden" id="brand_id" value="">
                                    <ul class="list-group suggestions"></ul>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                 <div class="form-group">
                                     <label>Model</label>
                                     <select class="form-control search" name="model_id" id="model" aria-label="Default select example">
                                     </select>
                                 </div>
                             </div>
                             <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                 <div class="form-group">
                                     <label>Variant</label>
                                     <select class="form-control search" name="variant_id" id="variant" aria-label="Default select example">
                                         
                                     </select>
                                 </div>
                             </div>

                           </div>
                           <div class="form-group pull-right">
                              <button id="search-submit" type="submit" value="submit" class="btn btn-lg btn-theme">Search Now</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--================================../SEARCH STYLE 2================================-->
   </div>
   <!-- =-=-=-=-=-=-= Search Bar End =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Ads Archieve =-=-=-=-=-=-= -->
   <section class="custom-padding">
      <!-- Main Container -->
      <div class="container">
         <!-- Row -->
         <div class="row">
            <div class="clearfix"></div>
            <!-- Heading Area -->
            <div class="heading-panel">
               <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                  <!-- Main Title -->
                  <h1>Featured <span class="heading-color"> Car</span> Deals</h1>
                  <!-- Short Description -->
                  <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his
                     dico ut debet consectetuer.</p>
               </div>
            </div>
            <!-- Middle Content Box -->
            <div class="row">
               <div class="col-md-12 col-xs-12 col-sm-12">
                  <div class="posts-masonry">
                     @foreach ($featured as $car )
                     <div class="col-md-4 col-xs-12 col-sm-6">
                        <!-- Ad Box -->
                        <div class="category-grid-box">
                           <!-- Ad Img -->
                           <div class="category-grid-img">
                              <img class="img-responsive" alt="" src="{{ asset($car->image) }}">
                              <!-- Ad Status -->

                              <!-- View Details --><a href="{{ route('listingDetails', $car->id) }}"
                                 class="view-details">View Details</a>
                              <!-- Additional Info -->
                              <div class="additional-information">
                                 <p>Transmission : {{ $car->transmission }}</p>
                                 <p>Engine Capacity : {{ $car->engineCapacity }} cc</p>
                                 <p>Engine Type : {{ $car->engineType }}</p>
                              </div>
                              <!-- Additional Info End-->
                           </div>
                           <!-- Ad Img End -->
                           <div class="short-description">
                              {{--
                              <!-- Ad Category -->
                              <div class="category-title"> <span><a href="#">{{ $car->title }}</a></span> </div>
                              <!-- Ad Title --> --}}
                              <h3><a title="" href="single-page-listing.html">{{ $car->title }} </a></h3>
                              <!-- Price -->
                              <div class="price">SA {{ $car->price }} </div>
                           </div>
                           <!-- Addition Info -->
                           <div class="ad-info">
                              <ul>
                                 <li><i class="flaticon-fuel-1"></i>{{ $car->engineType }}</li>

                                 <li><i class="flaticon-engine-2"></i> {{ $car->engineCapacity }} cc</li>
                              </ul>
                           </div>
                        </div>
                        <!-- Ad Box End -->
                     </div>
                     @endforeach


                  </div>
               </div>
            </div>
            <!-- Middle Content Box End -->
            <img alt="" class="block-content wow zoomIn " data-wow-delay="0ms" data-wow-duration="3500ms"
               src="images/cars.png">
         </div>
         <!-- Row End -->
      </div>
      <!-- Main Container End -->
   </section>
   <!-- =-=-=-=-=-=-= Ads Archieve End =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Statistics Counter =-=-=-=-=-=-= -->
   <div class="funfacts custom-padding parallex">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
               <div class="icons">
                  <i class="flaticon-vehicle"></i>
               </div>
               <div class="number"><span class="timer" data-from="0" data-to="1238" data-speed="1500"
                     data-refresh-interval="5">0</span>+</div>
               <h4>Total <span>Cars</span></h4>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
               <div class="icons">
                  <i class="flaticon-security"></i>
               </div>
               <div class="number"><span class="timer" data-from="0" data-to="820" data-speed="1500"
                     data-refresh-interval="5">0</span>+</div>
               <h4>Verified <span>Dealers</span></h4>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
               <div class="icons">
                  <i class="flaticon-like-1"></i>
               </div>
               <div class="number"><span class="timer" data-from="0" data-to="1042" data-speed="1500"
                     data-refresh-interval="5">0</span>+</div>
               <h4>Active <span>Users</span></h4>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
               <div class="icons">
                  <i class="flaticon-cup"></i>
               </div>
               <div class="number"><span class="timer" data-from="0" data-to="34" data-speed="1500"
                     data-refresh-interval="5">0</span>+</div>
               <h4>Featured <span>Ads</span></h4>
            </div>
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </div>
   <!-- =-=-=-=-=-=-= Statistics Counter End =-=-=-=-=-=-= -->

   <!-- =-=-=-=-=-=-= Services Section  =-=-=-=-=-=-= -->
   <section class="custom-padding services-2">
      <div class="absolute-img"><img alt="" src="images/car.png" class="img-responsive wow slideInLeft"
            data-wow-delay="0ms" data-wow-duration="2000ms"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7 col-sm-12 col-xs-12 ">
               <div class="choose-title">
                  <h3>Services We Offer</h3>
                  <h2>We are expert in</h2>
                  <p>Ut consequat velit a metus accumsan, vel tempor nulla blandit. Integer euismod magna vel mi congue
                     suscipit. Praesent quis facilisis neque. Donec scelerisque nibh vitae sapien ornare efficitur.</p>
               </div>
               <div class="choose-services">
                  <ul class="choose-list">
                     <!-- feature -->
                     <li class="col-md-6 col-xs-12 col-sm-6">
                        <div class="services-grid">
                           <div class="icons"><i class="flaticon-key"></i></div>
                           <h4>Dealership</h4>
                           <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                     </li>
                     <!-- feature -->
                     <li class="col-md-6 col-xs-12 col-sm-6">
                        <div class="services-grid">
                           <div class="icons"><i class="flaticon-engine-2"></i></div>
                           <h4> Engine Upgrades</h4>
                           <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                     </li>
                     <!-- feature -->
                     <li class="col-md-6 col-xs-12 col-sm-6">
                        <div class="services-grid">
                           <div class="icons"><i class="flaticon-security"></i></div>
                           <h4> Security Inspections</h4>
                           <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                     </li>
                     <!-- feature -->
                     <li class="col-md-6 col-xs-12 col-sm-6">
                        <div class="services-grid">
                           <div class="icons"><i class="flaticon-disc-brake-1"></i></div>
                           <h4>Break Checkup</h4>
                           <p>We have the right caring, experience and dedicated professional for you.</p>
                        </div>
                     </li>
                  </ul>
                  <!-- end choose-list -->
               </div>
            </div>
            <!-- /.col-lg-6 -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </section>
   <!-- =-=-=-=-=-=-= Services Section End =-=-=-=-=-=-= -->


   <!-- =-=-=-=-=-=-= App Download Section =-=-=-=-=-=-= -->
   <div class="app-download-section style-2">
      <!-- app-download-section-wrapper -->
      <div class="app-download-section-wrapper">
         <!-- app-download-section-container -->
         <div class="app-download-section-container">
            <!-- container -->
            <div class="container">
               <!-- row -->
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <div class="mobile-image-content"> <img src="images/hand.png" alt=""> </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="app-text-section">
                        <h5>Download our app</h5>
                        <h3>Get Our App For Your Mobile</h3>
                        <ul>
                           <li>Find nearby cars in your network with Scholar</li>
                           <li>Browse real hirers reviews to know why choose Scholar</li>
                           <li>Rent a car so easy with a tap !</li>
                           <li>Rent a car so easy with a tap !</li>
                        </ul>
                        <div class="app-download-btn">
                           <div class="row">
                              <div class="col-md-6 col-sm-6">
                                 <!-- Windows Store -->
                                 <a href="#" title="Windows Store" class="btn app-download-button">
                                    <span class="app-store-btn">
                                       <i class="fa fa-windows"></i>
                                       <span>
                                          <span>Download From</span>
                                          <span>Windows Store </span>
                                       </span>
                                    </span>
                                 </a>
                                 <!-- /Windows Store -->
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <!-- Windows Store -->
                                 <a href="#" title="Windows Store" class="btn app-download-button"> <span
                                       class="app-store-btn">
                                       <i class="fa fa-apple"></i>
                                       <span>
                                          <span>Download From</span> <span>Apple Store </span> </span>
                                    </span>
                                 </a>
                                 <!-- /Windows Store -->
                              </div>
                              <!-- Windows Store -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /row -->
            </div>
            <!-- /container -->
         </div>
         <!-- /app-download-section-container -->
      </div>
      <!-- /download-section-wrapper -->
   </div>
   <!-- =-=-=-=-=-=-= App Download Section End =-=-=-=-=-=-= -->
   <!-- =-=-=-=-=-=-= Feedback Section =-=-=-=-=-=-= -->
   <section class="news section-padding">
      <div class="container">
         <div class="row">
            <div class="heading-panel">
               <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                  <!-- Main Title -->
                  <h1>Clients <span class="heading-color"> Reviews</span> Feedback</h1>
                  <!-- Short Description -->
                  <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his
                     dico ut debet consectetuer.</p>
               </div>
            </div>
            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
               <div class="row">
                  <div class="owl-testimonial-1">
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Just fabulous</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
                              veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/1.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Jhon Emily Copper </h3>
                              <p> Developer</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Awesome ! Loving It</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
                              veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/2.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Hania Sheikh </h3>
                              <p> CEO Pvt. Inc.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Very quick and Fast</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
                              veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/3.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Jaccica Albana </h3>
                              <p> CTO Albana Inc.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Done in 3 Months! Awesome</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
                              veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/4.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Humayun Sarfraz </h3>
                              <p> CTO Glixen Technologies.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Find It Quit Professional</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
                              veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/4.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Massica O'Brain </h3>
                              <p> Audit Officer </p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Just fabulous</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
                              veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/1.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Jhon Emily Copper </h3>
                              <p> Developer</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Awesome ! Loving It</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
                              veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/2.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Hania Sheikh </h3>
                              <p> CEO Pvt. Inc.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Very quick and Fast</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
                              veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/3.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Jaccica Albana </h3>
                              <p> CTO Albana Inc.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Done in 3 Months! Awesome</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
                              veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/4.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Humayun Sarfraz </h3>
                              <p> CTO Glixen Tech.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Find It Quit Professional</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
                              veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/4.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Massica O'Brain </h3>
                              <p> Audit Officer </p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
            <!-- Middle Content Box End -->
         </div>
         <div class="clearfix"></div>
      </div>
   </section>
   <!-- =-=-=-=-=-=-= Feedback Section End =-=-=-=-=-=-= -->

   <!-- =-=-=-=-=-=-= Clients  =-=-=-=-=-=-= -->
   <div class="happy-clients-area gray">
      <div class="container">
         <div class="row clients-space">
            <div class="col-md-12 col-xs-12 col-sm-12">
               <div class="client-brand-list">
                  @foreach ($brands as $brand )
                  <div class="sigle-clients-brand">
                     <a href="#"><img src="{{ asset($brand->image) }}" alt=""></a>
                  </div>
                  @endforeach


               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- =-=-=-=-=-=-= Clients  End =-=-=-=-=-=-= -->
</div>

@endsection

@push('styles')
<style>

</style>
@endpush

@push('scripts')

<script>
   $(document).ready(function() {

    $('.search').on('keyup', function() {
        let query = $(this).val();
      
        if (query.length > 2) { // Trigger AJAX if input length is more than 2
            $.ajax({
                url: '/searchHome',
                type: 'GET',
                data: { 
                  query: query,
                },
                success: function(data) {
                  console.log(data)
                  
                  $('.suggestions').empty();
                  if (data.brands.length > 0) {
                     $.each(data.brands, function(key, value) {
                           $('.suggestions').append('<li class="list-group-item" data-id="' + value.id + '">' + value.name + '</li>');
                     });
                  } else {
                     $('.suggestions').append('<li class="list-group-item">No suggestions found</li>');
                  }


                  var modelSelect = $('#model');
                  modelSelect.empty();
                  modelSelect.append('<option selected>Type to search...</option>');
                  $.each(data.models, function(index, model) {
                     modelSelect.append($('<option>', {
                           value: model.id,
                           text: model.name
                     }));
                  });

                  // Populate variants
                  var variantSelect = $('#variant');
                  variantSelect.empty();
                  variantSelect.append('<option selected>Type to search...</option>');
                  $.each(data.variants, function(index, variant) {
                     variantSelect.append($('<option>', {
                           value: variant.id,
                           text: variant.name
                     }));
                  });

               }

            });
        } else {
            $('.suggestions').empty();
        }
    });

    $(document).on('click', '.list-group-item', function() {
        $('#brand').val($(this).text());
        var id = $(this).attr('data-id');
        $('#brand_id').val(id);
        console.log(id);
        $('.suggestions').empty();
    });

});
</script>
@endpush