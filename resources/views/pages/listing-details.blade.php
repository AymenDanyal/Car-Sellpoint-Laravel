@extends('layouts.master')

@section('title','Hotspot || Car Details')

@section('main-content')
<main id="mt-main">
    <div class="page-header-area-2 no-bottom gray">
        <div class="container">
           <div class="row">
              <div class="col-lg-12 no-padding  col-md-12 col-sm-12 col-xs-12">
                 <div class="small-breadcrumb">
                 <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class=" breadcrumb-link">
                       <ul>
                          <li><a href="index.html">Cars</a></li>
                          <li><a class="active" href="#"> Details</a></li>
                       </ul>
                    </div>
                  </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
    <div class="main-content-area clearfix">
        <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
        <section class="section-padding no-top gray ">
            <!-- Main Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div class="pricing-area">
                        <div class="col-md-9 col-xs-12 col-sm-8">
                            <div class="heading-zone">
                                <h1>{{ $carDeatils['title'] }}</h1>
                                <div class="short-history">
                                    <ul>
                                        <li><b>{{ $carDeatils['year'] }}</b></li>
                                        <li>Category: <b><a href="#">Land Rover </a></b></li>
                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Middle Content Area -->
                    <div class="col-md-8 col-xs-12 col-sm-12">
                        <!-- Single Ad -->
                        <div class="singlepage-detail ">
                            <div class="featured-ribbon">
                                <span>Featured</span>
                            </div>
                            <div id="single-slider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <a href="{{ asset('images/single-page/1.jpg') }}" data-fancybox="group">
                                            <img alt=""src="{{ asset('images/single-page/1.jpg') }}" />
                                        </a>
                                    </li>
                                    <li><a href="{{ asset('images/single-page/2.jpg') }}" data-fancybox="group"><img alt=""
                                                src="{{ asset('images/single-page/2.jpg') }}" /></a></li>
                                    <li><a href="{{ asset('images/single-page/3.jpg') }}" data-fancybox="group"><img alt=""
                                                src="{{ asset('images/single-page/3.jpg') }}" /></a></li>
                                    <li><a href="{{ asset('images/single-page/4.jpg') }}" data-fancybox="group"><img alt=""
                                                src="{{ asset('images/single-page/4.jpg') }}) }}" /></a></li>
                                    <li><a href="{{ asset('images/single-page/5.jpg') }}" data-fancybox="group"><img alt=""
                                                src="{{ asset('images/single-page/5.jpg') }}" /></a></li>
                                    <li><a href="{{ asset('images/single-page/6.jpg') }}" data-fancybox="group"><img alt=""
                                                src="{{ asset('images/single-page/6.jpg') }}" /></a></li>
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider">
                                <ul class="slides">
                                    <li><img alt="" src="{{ asset('images/single-page/1_thumb.jpg') }}"></li>
                                    <li><img alt="" src="{{ asset('images/single-page/2_thumb.jpg') }}"></li>
                                    <li><img alt="" src="{{ asset('images/single-page/3_thumb.jpg') }}"> </li>
                                    <li><img alt="" src="{{ asset('images/single-page/4_thumb.jpg') }}"></li>
                                    <li><img alt="" src="{{ asset('images/single-page/5_thumb.jpg') }}"></li>
                                    <li><img alt="" src="{{ asset('images/single-page/6_thumb.jpg') }}"></li>
                                </ul>
                            </div>
                            <div class="key-features">
                                <div class="boxicon">
                                    <i class="flaticon-gas-station-1 petrol"></i>
                                    <p>{{ $carDeatils['engineType'] }}</p>
                                </div>
            
                                <div class="boxicon">
                                    <i class="flaticon-tool engile-capacity"></i>
                                    <p>{{ $carDeatils['engineCapacity'] }}cc</p>
                                </div>
                                <div class="boxicon">
                                    <i class="flaticon-calendar reg-year"></i>
                                    <p>{{ $carDeatils['year'] }}</p>
                                </div>
                                <div class="boxicon">
                                    <i class="flaticon-gearshift transmission"></i>
                                    <p>{{ $carDeatils['transmission'] }}</p>
                                </div>
                                <div class="boxicon">
                                    <i class="flaticon-transport-1 body-type"></i>
                                    <p>Sedan</p>
                                </div>
                              
                            </div>
                            <div class="content-box-grid">
                                <!-- Heading Area -->
                                <div class="short-features">
                                    <!-- Heading Area -->
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left">
                                            Description
                                        </h3>
                                    </div>
                                    <p>
                                        Bank Leased 5 Year plan 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New
                                        Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well
                                        Maintained Insurance + tracker etc included Options: Sunroof
                                    </p>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Condition</strong> :</span> Used
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Brand</strong> :</span> Nokia
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Model</strong> :</span> Lumia 625
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Product Type</strong>:</span> Mobile
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Date</strong> :</span> 2014-10-06
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Price</strong> :</span> Rs. 22,000
                                    </div>
                                </div>
                                <!-- Short Features  -->
                                <div class="short-features">
                                    <!-- Ad Specifications -->
                                    <div class="specification">
                                        <!-- Heading Area -->
                                        <div class="heading-panel">
                                            <h3 class="main-title text-left">
                                                Specifications
                                            </h3>
                                        </div>
                                        <p>
                                            samsung galaxy note 2 new condition with handsfree and charger urgent sale.
                                            with book pouch original 4g lte. 16 gb condition 10/10 andriod kitkat4.4.2
                                        </p>
                                        <p>
                                            Bank Leased 5 Year plan 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic (
                                            New Shape ) Attractive Silver Color 1 year installments paid Lahore Reg
                                            number Well Maintained Insurance + tracker etc included Options: Sunroof
                                        </p>
                                        <p>
                                            Chilled AC Power Windows Power Steering ABS braking system ETC 15000 km
                                            carefully driven No SMS / Email , Serious Buyers Requested To Call .
                                        </p>

                                    </div>
                                    <!-- Related Image  -->
                                    <div class="ad-related-img">
                                        <img src="images/car-img1.png" alt="" class="img-responsive center-block">
                                    </div>
                                    <!-- Heading Area -->
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left">
                                            Car Features
                                        </h3>
                                    </div>
                                    <!-- Car Key Features  -->
                                    <ul class="car-feature-list ">
                                        <li><i class="flaticon-antenna"></i> AM/FM Radio</li>
                                        <li><i class="flaticon-air-conditioner-1"></i> Air Conditioning</li>
                                        <li><i class="flaticon-cd"></i> Cassette Player</li>
                                        <li><i class="flaticon-light-bulb"></i> Power Locks</li>
                                        <li><i class="flaticon-rearview-mirror"></i> Power Mirrors</li>
                                        <li><i class="flaticon-car-steering-wheel"></i> Power Steering</li>
                                        <li><i class="flaticon-car-door"></i> Power Windows</li>
                                        <li><i class="flaticon-disc-brake"></i> Anti-lock Braking</li>
                                        <li><i class="flaticon-rim"></i> 19 Inch Alloy Wheels</li>
                                        <li><i class="flaticon-message"></i> Cruise Control</li>
                                        <li><i class="flaticon-airbag"></i> Front Airbag Package</li>
                                        <li><i class="flaticon-photo-camera-1"></i> Reversing Camera</li>
                                    </ul>
                                </div>
                                <!-- Short Features  -->
                                <div class="clearfix"></div>
                            </div>

                            <div class="list-style-1 margin-top-20">
                                <div class="panel with-nav-tabs panel-default">
                                    <div class="panel-heading">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab3default" data-toggle="tab">Video</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane in active fade" id="tab3default">
                                                <<iframe width="560" height="315" src="https://www.youtube.com/embed/mS_qBKRPxV0?si=EYx6nkgXLjWSyLFj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Share Ad  -->
                        </div>
                        <!-- Single Ad End -->
                        <!-- Price Alert -->
                        <div class="alert-box-container margin-top-30">
                            <div class="well">
                                <h3>Create Alert</h3>
                                <p>Receive emails for the latest ads matching your search criteria</p>
                                <form>
                                    <div class="row">
                                        <div class="col-md-5 col-xs-12 col-sm-12">
                                            <input placeholder="Enter Your Email " type="text" class="form-control">
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12">
                                            <select class="alerts">
                                                <option value="1">Daily</option>
                                                <option value="7">Weekly</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-xs-12 col-sm-12">
                                            <input class="btn btn-theme btn-block" value="Submit" type="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Price Alert End -->
                    
                    </div>
                    <!-- Right Sidebar -->
                    <div class="col-md-4 col-xs-12 col-sm-12">
                        <!-- Sidebar Widgets -->
                        <div class="sidebar">
                            <!-- Price info block -->
                            <div class="category-list-icon">
                                <i class="green flaticon-mail-1"></i>
                                <div class="category-list-title">
                                    <h5><a href="#" data-toggle="modal" data-target=".price-quote">Contact Seller Via
                                            Email</a></h5>
                                </div>
                            </div>
                            <div class="category-list-icon">
                                <i class="purple flaticon-smartphone"></i>
                                <div class="category-list-title">
                                    <h5><a href="javascript:void(0)" class="number"
                                            data-last="111111X">0320<span>XXXXXXX</span></a></h5>
                                </div>
                            </div>


                            <!-- User Info -->
                            <div class="white-bg user-contact-info">
                                <div class="user-info-card">
                                    <div class="user-photo col-md-4 col-sm-3  col-xs-4">
                                        <img class="img-circle" src="images/users/3.jpg" alt="">
                                    </div>
                                    <div class="user-information  col-md-8 col-sm-9 col-xs-8">
                                        <span class="user-name"><a class="hover-color" href="profile.html">Sonu
                                                Monu</a></span>
                                        <div class="item-date">
                                            <span class="ad-pub">Published on: 10 Dec 2017</span><br>
                                            <a href="#" class="link">More Ads</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div id="itemMap"></div>

                            <!-- Recent Ads -->
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Recent Ads</a></h4>
                                </div>
                                <div class="widget-content recent-ads">
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="images/posting/thumb-1.jpg" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">2010 Audi A5 Auto Premium quattro MY10</a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 17,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="images/posting/thumb-2.jpg" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Honda Civic 2017 Sports Edition With Turbo</a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 66,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="images/posting/thumb-3.jpg" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Ford Mustang EcoBoost Premium Convertible</a>
                                                </h3>
                                                <ul class="recent-ads-list-location">
                                                    <li><a href="#">New York</a>,</li>
                                                    <li><a href="#">Brooklyn</a></li>
                                                </ul>
                                                <div class="recent-ads-list-price">
                                                    $ 37,000
                                                </div>
                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>

                                </div>
                            </div>
                            <!--  Financing calculator  -->
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Financing Calculator</a></h4>
                                </div>
                                <div class="widget-content ">
                                    <div class="finance-calculator">
                                        <form>
                                            <ul>
                                                <li>
                                                    <label>Vehicle price</label>
                                                    <select>
                                                        <option>$30,000</option>
                                                        <option>$35,000</option>
                                                        <option>$45,000</option>
                                                        <option>$55,000</option>
                                                    </select>
                                                </li>
                                                <li>
                                                    <label>Interest rate</label>
                                                    <select>
                                                        <option>30%</option>
                                                        <option>35%</option>
                                                        <option>45%</option>
                                                        <option>55%</option>
                                                    </select>
                                                </li>
                                                <li>
                                                    <label>Period (month</label>
                                                    <span class="price-slider-value"><span id="month-min"></span>
                                                        Months</span>
                                                    <div id="month-slider"></div>
                                                </li>
                                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="auto-field">
                                                        <label>Down Payment</label>
                                                        <input type="text" class="form-control" placeholder="$326,500">
                                                    </div>
                                                </li>
                                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="auto-field">
                                                        <input class="btn btn-theme btn-sm margin-bottom-20"
                                                            type="submit" value="Calculate">
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Saftey Tips  -->
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Safety tips for deal</a></h4>
                                </div>
                                <div class="widget-content saftey">
                                    <ol>
                                        <li>Use a safe location to meet seller</li>
                                        <li>Avoid cash transactions</li>
                                        <li>Beware of unrealistic offers</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Widgets End -->
                    </div>
                    <!-- Middle Content Area  End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </section>
        <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
   
    </div>
    <!-- Main Content Area End -->
    <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
    <div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabel">Email for Price</h3>
                </div>
                <div class="modal-body">
                    <div class="recent-ads">
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="images/single-page/4_thumb.jpg" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">New York</a>,</li>
                                        <li><a href="#">Brooklyn</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">
                                        $ 17,000
                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                    </div>
                    <!-- content goes here -->
                    <form>
                        <div class="form-group  col-md-6  col-sm-6">
                            <label>Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group  col-md-6  col-sm-6">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group  col-md-12  col-sm-12">
                            <label>Contact No</label>
                            <input type="text" class="form-control" placeholder="Contact No">
                        </div>
                        <div class="form-group  col-md-12  col-sm-12">
                            <label>Comments</label>
                            <textarea
                                placeholder="What is the price of the Honda Civic 2017 you have in your inventory?"
                                rows="3"
                                class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                        </div>
                        <div class="col-md-12  col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                            <button type="submit" class="btn btn-theme btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Share Modal =-=-=-=-=-=-= -->
    <div class="modal fade share-ad" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only">Close</span></button>
                    <h3 class="modal-title">Share</h3>
                </div>
                <div class="modal-body">
                    <div class="recent-ads">
                        <div class="recent-ads-list">
                            <div class="recent-ads-container">
                                <div class="recent-ads-list-image">
                                    <a href="#" class="recent-ads-list-image-inner">
                                        <img src="images/single-page/4_thumb.jpg" alt="">
                                    </a><!-- /.recent-ads-list-image-inner -->
                                </div>
                                <!-- /.recent-ads-list-image -->
                                <div class="recent-ads-list-content">
                                    <h3 class="recent-ads-list-title">
                                        <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                                    </h3>
                                    <ul class="recent-ads-list-location">
                                        <li><a href="#">New York</a>,</li>
                                        <li><a href="#">Brooklyn</a></li>
                                    </ul>
                                    <div class="recent-ads-list-price">
                                        $ 17,000
                                    </div>
                                    <!-- /.recent-ads-list-price -->
                                </div>
                                <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                        </div>
                    </div>
                    <h3>Key Features</h3>
                    <p>Alarm, Alloy Wheels, Anti-Lock Brakes, Automatic Air Conditioning, Bluetooth Interface Telephone
                        Equipment, Body Coloured Bumpers, Centre Console, Centre Rear Seat Belt, Cloth interior, Cruise
                        Control, Driver Information System</p>
                    <h3>Link</h3>
                    <p><a
                            href="https://themeforest.net/user/scriptsbundle/portfolio">https://themeforest.net/user/scriptsbundle/portfolio</a>
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-fb btn-md"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-twitter btn-md"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-gplus btn-md"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Report Ad Modal =-=-=-=-=-=-= -->
    <div class="modal fade report-quote" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only">Close</span></button>
                    <h3 class="modal-title">Why are you reporting this ad?</h3>
                </div>
                <div class="modal-body">
                    <!-- content goes here -->
                    <form>
                        <div class="skin-minimal">
                            <div class="form-group col-md-6 col-sm-6">
                                <ul class="list">
                                    <li>
                                        <input type="radio" id="spam" name="minimal-radio">
                                        <label for="spam">Spam</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="duplicated" name="minimal-radio">
                                        <label for="duplicated">Duplicated</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group  col-md-6 col-sm-6">
                                <ul class="list">
                                    <li>
                                        <input type="radio" id="offensive" name="minimal-radio">
                                        <label for="offensive">Offensive</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="expired" name="minimal-radio" checked>
                                        <label for="expired">Expired</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group  col-md-12 col-sm-12">
                            <label>Comments</label>
                            <textarea placeholder="This ad not belong to me" rows="3"
                                class="form-control">This ad not belong to me</textarea>
                        </div>
                        <div class="col-md-12 col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive">
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                            <button type="submit" class="btn btn-theme btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Back To Top -->
    <a href="#0" class="cd-top">Top</a>
</main>
@endsection

@push('scripts')
    <script type="text/javascript">
        (function($) {
          	"use strict";
         /* ======= Show Number ======= */
               $('.number').click(function() {
               	$(this).find('span').text( $(this).data('last') );
               });
         
         /* ======= Ad Location ======= */
         	   var  map ="";
               var latlng = new google.maps.LatLng(47.550259, -122.264847);
               var myOptions = {
                   zoom: 13,
                   center: latlng,
         			scrollwheel: false,
                   mapTypeId: google.maps.MapTypeId.ROADMAP,
                   size: new google.maps.Size(480,240)
               }
               map = new google.maps.Map(document.getElementById("itemMap"), myOptions);
               var marker = new google.maps.Marker({
                   map: map,
                   position: latlng
               });
         })(jQuery);
    </script>
@endpush