   <!-- =-=-=-=-=-=-=  Header =-=-=-=-=-=-= -->
   <div class="colored-header">
    <!-- Top Bar -->
    <div class="header-top">
       <div class="container">
          <div class="row">
             <!-- Header Top Left -->
             <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                <ul class="listnone">
                   <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                         aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i> Language <span
                            class="caret"></span></a>
                      <ul class="dropdown-menu">
                         <li><a href="#">English</a></li>
                         <li><a href="#">Arabic</a></li>
                      </ul>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
    <!-- Top Bar End -->
    <!-- Navigation Menu -->
    <div class="clearfix"></div>
    <!-- menu start -->
    <nav id="menu-1" class="mega-menu">
       <!-- menu list items container -->
       <section class="menu-list-items">
          <div class="container">
             <div class="row">
                <div class="col-lg-12 col-md-12">
                   <!-- menu logo -->
                   <ul class="menu-logo">
                      <li>
                         <a href="index.html"><img src="{{asset('images/hotspot-logo.png')}}" alt="logo"> </a>
                      </li>
                   </ul>
                   <!-- menu links -->
                   <ul class="menu-links">
                      <!-- active class -->
                      <li>
                         <a href="/">Home <i class="fa fa-indicator"></i></a>
                         <!-- drop down multilevel  -->
                      </li>
                      <li>
                         <a href="javascript:void(0)"> Cars <i class="fa fa-angle-down fa-indicator"></i></a>
                         <div class="drop-down grid-col-12">
                            <!--grid row-->
                            <div class="grid-row">
                               <!--grid column 3-->
                             
                               <div class="grid-col-6">
                                  <h3>Brands</h3>
                                  <ul class="by-make list-inline">
                                    @php
                                    $brands=DB::table('brands')->limit(9)->get()->toArray();
                                    // dd($sub_cat_info);
                                    @endphp
                                    @foreach ($brands as $brand)
                                    <li>
                                       <a href="{{ route('listing', ['brandId' => $brand->id, 'bodyTypeId' =>0]) }}">
                                          <img src="{{ asset($brand->image) }}" class="img-responsive" alt="Brand Image">
                                       </a>
                                    </li>
                                    @endforeach
                                     
                                  </ul>
                               </div>
                               <div class="grid-col-6">
                                  <h3>Body Type</h3>
                                  <ul class="list-inline by-category ">
                                    @php
                                    $body=DB::table('body_type')->limit(9)->get()->toArray();
                                    // dd($sub_cat_info);
                                    @endphp
                                    @foreach ($body as $obj)
                                     <li>
                                        <a href="{{ route('listing', ['brandId' => 0, 'bodyTypeId' => $obj->id]) }}">
                                           <img alt="{{ $obj->image }}" src="{{ asset($obj->image) }}">
                                           {{ $obj->name }}
                                        </a>
                                     </li>
                                     @endforeach
                                    
                                     
                                  </ul>
                               </div>
                            </div>
                         </div>
                      </li>
                      {{-- <li>
                         <a href="javascript:void(0)">Service <i class="fa  fa-indicator"></i></a>
                      </li>
                      <li>
                         <a href="javascript:void(0)">Offers <i class="fa fa-indicator"></i></a>
                     
                      </li>
                      <li>
                         <a href="javascript:void(0)">Corporate <i class="fa  fa-indicator"></i></a>
                      </li>
                      <li>
                         <a href="javascript:void(0)">FAQ <i class="fa  fa-indicator"></i></a>
                      </li>
                      <li>
                         <a href="javascript:void(0)">Contact Us <i class="fa fa-indicator"></i></a>
                      
                      </li> --}}
                   </ul>
                  
                </div>
             </div>
          </div>
       </section>
    </nav>
    <!-- menu end -->
 </div>
 <div class="clearfix"></div>
 <!-- =-=-=-=-=-=-= Primary Header End =-=-=-=-=-=-= -->