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
                          <li><a href="#">Cars</a></li>
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
                                <h1>{{ $carDetails['title'] }}</h1>
                                <div class="short-history">
                                    <ul>
                                        <li><b>{{ $carDetails['year'] }}</b></li>
                                        <li>Category: <b><a href="#">{{ $carDetails->brand['name'] }} </a></b></li>
                                    
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
                                    @foreach ($carDetails->images as $image )
                                        <li>
                                            <a href="{{ asset($image->url) }}" data-fancybox="group">
                                                <img alt=""src="{{ asset($image->url) }}" />
                                            </a>
                                        </li>    
                                    @endforeach
                                    
                            
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider">
                                <ul class="slides">
                                    @foreach ($carDetails->images as $image )
                                        <li><img alt="" src="{{ asset($image->url) }}"></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="key-features">
                                <div class="boxicon">
                                    <i class="flaticon-gas-station-1 petrol"></i>
                                    <p>{{ $carDetails['engineType'] }}</p>
                                </div>
            
                                <div class="boxicon">
                                    <i class="flaticon-tool engile-capacity"></i>
                                    <p>{{ $carDetails['engineCapacity'] }}cc</p>
                                </div>
                                <div class="boxicon">
                                    <i class="flaticon-calendar reg-year"></i>
                                    <p>{{ $carDetails['year'] }}</p>
                                </div>
                                <div class="boxicon">
                                    <i class="flaticon-gearshift transmission"></i>
                                    <p>{{ $carDetails['transmission'] }}</p>
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
                                        {{ $carDetails['description'] }}
                                    </p>
                                    
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Title </strong> :</span> {{ $carDetails->brand['name'] }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Brand</strong> :</span> {{ $carDetails->brand['name'] }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Engine Capacity</strong>:</span> {{ $carDetails['engineCapacity'] }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>transmission</strong> :</span>{{ $carDetails['transmission'] }}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Engine Type</strong> :</span> {{ $carDetails['engineType'] }}
                                    </div>
                                </div>
                             
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
                                                <iframe width="560" height="315" src="{{ $carDetails['video_url'] }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Share Ad  -->
                        </div>
                        <!-- Single Ad End -->
          
                    
                    </div>
                    <!-- Right Sidebar -->
                    <div class="col-md-4 col-xs-12 col-sm-12">
                        <!-- Sidebar Widgets -->
                        <div class="sidebar">
                            <!-- Price info block -->
                            
                            <!-- User Info -->
                            <div class="white-bg user-contact-info">
                                <div class="user-info-card">
                                    <div class="user-photo col-md-4 col-sm-3  col-xs-4">
                                        <img class="img-circle" src="{{ $carDetails->dealer['image'] }}" alt="">
                                    </div>
                                    <div class="user-information  col-md-8 col-sm-9 col-xs-8">
                                        <span class="user-name"><a class="hover-color" href="profile.html">{{ $carDetails->dealer['name'] }}</a></span>
                     
                                    </div>
                                   
                                    <div class="clearfix"></div>
                                </div>
                                <div class="category-list-icon">
                                    <i class="green flaticon-mail-1"></i>
                                    <div class="category-list-title">
                                        <h5><a href="{{ $carDetails->dealer['email'] }}" data-toggle="modal" data-target=".price-quote">Contact Seller </a></h5>
                                    </div>
                                </div>
                                <div class="category-list-icon">
                                    <i class="purple flaticon-smartphone"></i>
                                    <div class="category-list-title">
                                        <h5>
                                            <a href="tel:{{ $carDetails->dealer['phone'] }}" class="number" data-last="{{ $carDetails->dealer['phone'] }}">
                                                +92<span>XXXXXXX</span>
                                            </a>
                                        </h5>
                                    </div>
                                    
                                </div> 
                            </div>

                            <!-- Recent Ads -->
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Recent Ads</a></h4>
                                </div>
                                <div class="widget-content recent-ads">
                                    @foreach ($recentCars as $car )                                        
                                        <!-- Ads -->
                                        <div class="recent-ads-list">
                                            <div class="recent-ads-container">
                                                <div class="recent-ads-list-image">
                                                    <a href="/listingDetails/{{ $car->id }}" class="recent-ads-list-image-inner">
                                                        <img src="{{ asset($car->image) }}" alt="">
                                                    </a><!-- /.recent-ads-list-image-inner -->
                                                </div>
                                                <!-- /.recent-ads-list-image -->
                                                <div class="recent-ads-list-content">
                                                    <div class="recent-ads-list-price">
                                                        <a href="/listingDetails/{{ $car->id }}"> {{$car->title}}</a>
                                                    </div>
                                                    <h3 class="recent-ads-list-title">
                                                        <a href="/listingDetails/{{ $car->id }}">{{$car->description}}</a>
                                                    </h3>
                                                    
                                                    <!-- /.recent-ads-list-price -->
                                                </div>
                                                <!-- /.recent-ads-list-content -->
                                            </div>
                                            <!-- /.recent-ads-container -->
                                        </div>
                                    @endforeach
                                

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
                           <!-- Dealer Authorization Tips -->
                        <div class="widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>Tips for Verifying Car Dealers</a></h4>
                            </div>
                            <div class="widget-content saftey">
                                <ol>
                                    <li>Ensure the dealer is registered with local authorities</li>
                                    <li>Request and verify the dealer's business license</li>
                                    <li>Check for dealer accreditation from industry associations</li>
                                    <li>Read customer reviews and testimonials</li>
                                    <li>Ask for references from previous customers</li>
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
                    <h3 class="modal-title" id="lineModalLabel">Contact</h3>
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