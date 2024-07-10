@extends('layouts.master')

@section('title','Hotspot || Car Listing')

@section('main-content')
<main id="mt-main">
    <!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
    <div class="page-header-area-2 gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="small-breadcrumb">
                        <div class=" breadcrumb-link">
                            <ul>
                                <li><a href="index.html">Home Page</a></li>
                                <li><a class="active" href="#">Listing</a></li>
                            </ul>
                        </div>
                        <div class="header-page">
                            <h1>Toyota</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
    <div class="main-content-area clearfix">
        <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
        <section class="section-padding no-top gray">
            <!-- Main Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <!-- Middle Content Area -->
                    <div class="col-md-8 col-md-push-4 col-lg-8 col-sx-12">
                        <!-- Row -->
                        <div class="row">
                            <!-- Sorting Filters -->
                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                <div class="clearfix"></div>
                                <div class="listingTopFilterBar">
                                    <div class="col-md-7 col-xs-12 col-sm-7 no-padding">

                                    </div>
                                    <div class="col-md-5 col-xs-12 c ol-sm-5 no-padding">
                                        <div class="header-listing">
                                            <h6>Sort by :</h6>
                                            <div class="custom-select-box">
                                                <select name="order" class="custom-select">
                                                    <option value="0">Most popular</option>
                                                    <option value="1">The latest</option>
                                                    <option value="2">The best rating</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sorting Filters End-->
                            <div class="clearfix"></div>
                            <!-- Ads Archive -->
                            <div class="grid-style-4">
                                <div class="posts-masonry">

                                </div>
                            </div>
                            <!-- Ads Archive End -->
                            <div class="clearfix"></div>
                            <!-- Pagination -->
                            <div class="text-center margin-top-30">
                                <ul class="pagination ">
                                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                   
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- Pagination End -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Middle Content Area  End -->
                    <!-- Left Sidebar -->
                    <div class="col-md-4 col-md-pull-8 col-sx-12">
                        <!-- Sidebar Widgets -->
                        <div class="sidebar">
                            <!-- Panel group -->
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <!-- Brands Panel -->
                                <div class="panel panel-default">
                                    <!-- Heading -->
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                Brands
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- Content -->
                                    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <!-- Search -->
                                            <div class="search-widget">
                                                <input id="searchInput" placeholder="Search by Car Name" type="text">
                                                <button type="submit" id="search"><i class="fa fa-search"></i></button>
                                            </div>
                                            <!-- Brands List -->
                                            <div class="skin-minimal">
                                                <ul class="list">
                                                    @foreach ($brands as $brand)
                                                    <li>
                                                        <input type="checkbox" class="brand-checkbox inputBox"
                                                            data-id="{{ $brand->id }}"
                                                            id="brand-checkbox-{{ $brand->id }}">
                                                        <label for="brand-checkbox-{{ $brand->id }}">{{ $brand->name
                                                            }}</label>
                                                    </li>
                                                    @endforeach


                                                </ul>
                                                <a href=".html" data-toggle="modal" class="pull-right"><strong>View
                                                        All</strong></a>
                                            </div>
                                            <!-- Brands List End -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Brands Panel End -->
                                <!-- Condition Panel -->
                                <div class="panel panel-default">
                                    <!-- Heading -->
                                    <div class="panel-heading" role="tab" id="heading9">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapse9" aria-expanded="false"
                                                aria-controls="collapse9">
                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                Transmission
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- Content -->
                                    <div id="collapse9" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="heading9">
                                        <div class="panel-body">
                                            <div class="skin-minimal">
                                                <ul class="list">
                                                    <li>
                                                        <input tabindex="7" class="transmission inputBox" type="radio"
                                                            data-id="auto" name="minimal-radio" checked>
                                                        <label for="automatic">Automatic</label>
                                                    </li>
                                                    <li>
                                                        <input tabindex="8" class="transmission inputBox" type="radio"
                                                            data-id="manual" name="minimal-radio">
                                                        <label for="manual">Manual</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Condition Panel End -->
                                <!-- Body Type Panel -->
                                <div class="panel panel-default">
                                    <!-- Heading -->
                                    <div class="panel-heading" role="tab" id="heading7">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapse7" aria-expanded="false"
                                                aria-controls="collapse7">
                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                Body Type
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- Content -->
                                    <div id="collapse7" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="heading7">
                                        <div class="panel-body">
                                            <div class="skin-minimal">
                                                <ul class="list">
                                                    @foreach ($bodyType as $type)
                                                    <li>
                                                        <input class="inputBox" type="radio" id="{{ $type->id }}"
                                                            name="body-type-radio">
                                                        <label for="{{ $type->id }}">{{ $type->name }}</label>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Condition Panel End -->
                                <!-- Latest Ads Panel -->
                                <div class="panel panel-default">
                                    <!-- Heading -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a>
                                                Recent Ads
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- Content -->
                                    <div class="panel-collapse">
                                        <div class="panel-body recent-ads">
                                            <!-- Ads -->
                                            <div class="recent-ads-list">
                                                <div class="recent-ads-container">
                                                    <div class="recent-ads-list-image">
                                                        <a href="#" class="recent-ads-list-image-inner">
                                                            <img src="{{ asset('images/posting/thumb-1.jpg') }}" alt="">
                                                        </a><!-- /.recent-ads-list-image-inner -->
                                                    </div>
                                                    <!-- /.recent-ads-list-image -->
                                                    <div class="recent-ads-list-content">
                                                        <h3 class="recent-ads-list-title">
                                                            <a href="#">Audi Q5 2.0T quattro Premium </a>
                                                        </h3>
                                                        <ul class="recent-ads-list-location">
                                                            <li><a href="#">New York</a>,</li>
                                                            <li><a href="#">Brooklyn</a></li>
                                                        </ul>
                                                        <div class="recent-ads-list-price">
                                                            SAR 17,000
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
                                                            <img src="{{ asset('images/posting/thumb-2.jpg') }}" alt="">
                                                        </a><!-- /.recent-ads-list-image-inner -->
                                                    </div>
                                                    <!-- /.recent-ads-list-image -->
                                                    <div class="recent-ads-list-content">
                                                        <h3 class="recent-ads-list-title">
                                                            <a href="#">Honda Civic 2017 Sports Edition</a>
                                                        </h3>
                                                        <ul class="recent-ads-list-location">
                                                            <li><a href="#">New York</a>,</li>
                                                            <li><a href="#">Brooklyn</a></li>
                                                        </ul>
                                                        <div class="recent-ads-list-price">
                                                            SAR 66,000
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
                                                            <img src="{{ asset('images/posting/thumb-3.jpg') }}" alt="">
                                                        </a><!-- /.recent-ads-list-image-inner -->
                                                    </div>
                                                    <!-- /.recent-ads-list-image -->
                                                    <div class="recent-ads-list-content">
                                                        <h3 class="recent-ads-list-title">
                                                            <a href="#">2014 Ford Shelby GT500 Coupe</a>
                                                        </h3>
                                                        <ul class="recent-ads-list-location">
                                                            <li><a href="#">New York</a>,</li>
                                                            <li><a href="#">Brooklyn</a></li>
                                                        </ul>
                                                        <div class="recent-ads-list-price">
                                                            SAR 37,000
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
                                                            <img src="{{ asset('images/posting/thumb-4.jpg') }}" alt="">
                                                        </a><!-- /.recent-ads-list-image-inner -->
                                                    </div>
                                                    <!-- /.recent-ads-list-image -->
                                                    <div class="recent-ads-list-content">
                                                        <h3 class="recent-ads-list-title">
                                                            <a href="#">Lamborghini Gallardo 5.0 V10 2dr</a>
                                                        </h3>
                                                        <ul class="recent-ads-list-location">
                                                            <li><a href="#">New York</a>,</li>
                                                            <li><a href="#">Brooklyn</a></li>
                                                        </ul>
                                                        <div class="recent-ads-list-price">
                                                            SAR 11,000
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
                                                            <img src="{{ asset('images/posting/thumb-5.jpg') }}" alt="">
                                                        </a><!-- /.recent-ads-list-image-inner -->
                                                    </div>
                                                    <!-- /.recent-ads-list-image -->
                                                    <div class="recent-ads-list-content">
                                                        <h3 class="recent-ads-list-title">
                                                            <a href="#">Porsche 911 Carrera 2017 </a>
                                                        </h3>
                                                        <ul class="recent-ads-list-location">
                                                            <li><a href="#">New York</a>,</li>
                                                            <li><a href="#">Brooklyn</a></li>
                                                        </ul>
                                                        <div class="recent-ads-list-price">
                                                            SAR 20,000
                                                        </div>
                                                        <!-- /.recent-ads-list-price -->
                                                    </div>
                                                    <!-- /.recent-ads-list-content -->
                                                </div>
                                                <!-- /.recent-ads-container -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Latest Ads Panel End -->
                            </div>
                            <!-- panel-group end -->
                        </div>
                        <!-- Sidebar Widgets End -->
                    </div>
                    <!-- Left Sidebar End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </section>
        <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->

    </div>
    <!-- Main Content Area End -->

    <!-- =-=-=-=-=-=-= More Brands Modal =-=-=-=-=-=-= -->
    <div class="search-modal modal fade cat_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only">Close</span></button>
                    <h3 class="modal-title text-center"> Select Make </h3>
                </div>
                <div class="modal-body">
                    <!-- content goes here -->
                    <div class="search-block">
                        <div class="row">
                            <div class="col-md-12 col-xs-12 col-sm-12 popular-search">
                                <label>Select Brands</label>
                                <!-- Brands List -->
                                <div class="skin-minimal">
                                    <ul class="list">
                                        <li class="col-sm-4 col-xs-6">
                                            <input type="checkbox" id="r1">
                                            <label for="r1">All Brands</label>
                                        </li>
                                        <li class="col-sm-4 col-xs-6">
                                            <input type="checkbox" id="r2">
                                            <label for="r1">Audi </label>
                                        </li>
                                        <li class="col-sm-4 col-xs-6">
                                            <input type="checkbox" id="r3">
                                            <label for="r3">BMW </label>
                                        </li>
                                        <li class="col-sm-4 col-xs-6">
                                            <input type="checkbox" id="r4">
                                            <label for="r4">Mercedes </label>
                                        </li>
                                        <li class="col-sm-4 col-xs-6">
                                            <input type="checkbox" id="r5">
                                            <label for="r5">Lamborghini </label>
                                        </li>
                                        <li class="col-sm-4 col-xs-6">
                                            <input type="checkbox" id="r6">
                                            <label for="r6">Honda</label>
                                        </li>
                                        <li class="col-sm-4 col-xs-6">
                                            <input type="checkbox" id="r7">
                                            <label for="r7">Bugatti </label>
                                        </li>
                                        <li class="col-sm-4 col-xs-6">
                                            <input type="checkbox" id="r8">
                                            <label for="r8">Acura </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Brands List End -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-block btn-block">Search</button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
    var brandId = {{ $brandId }};
    var trans = null;
    var bodyType = {{ $bodyTypeId }};;
    var search = null;
    
    //console.log(brandId,trans,bodyType);
    $(document).ready(function() {
        function getProducts(brandIds,trans,bodyType,price) {
            var brandIds = []; 
                $('.brand-checkbox:checked').each(function() {
                    brandIds.push($(this).data('id')); 
                });
                
                trans =  $('.transmission:checked').data('id');
                bodyType = $('input[name="body-type-radio"]:checked').attr('id');
            $.ajax({
                type: 'POST',
                url: '/search',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "trans": trans,
                    "bodyType":bodyType,
                    "brandIds":brandIds,
                    "search":search,
                    },
        
                success: function (response) {
                    // Handle success response
                    $('.posts-masonry').empty();
                    
                    createGrid(response);
                
                },
                error: function (xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                    // You can show an error message to the user
                }
            });        
        }

        function createGrid(response) {
            products = response.data;
          // console.log(response);
            products.forEach(product => {
                var grid = `
                    <div class="col-md-6 col-xs-12 col-sm-6">
                        <!-- Ad Box -->
                        <div class="category-grid-box">
                            <!-- Ad Img -->
                            <div class="category-grid-img">
                                <img class="img-responsive" alt="" src="${product.image}">
                                <!-- Ad Status -->
                                
                                <!-- View Details --><a href="{{ route('listingDetails', ['carId' =>'__carId__']) }}" class="view-details">View Details</a>
                                <!-- Additional Info -->
                                <div class="additional-information">
                                    <p>Transmission : ${product.transmission}</p>
                                    <p>Engine Capacity : ${product.engineCapacity}</p>
                                    <p>Engine Type : ${product.engineType}</p>
                                </div>
                                <!-- Additional Info End-->
                            </div>
                            <!-- Ad Img End -->
                            <div class="short-description">
                                <!-- Ad Category -->
                                <div class="category-title"> <span><a href="#">${product.description}</a></span> </div>
                                <!-- Ad Title -->
                                <h3><a title="" href="single-page-listing.html">${product.title}</a></h3>
                                <!-- Price -->
                                <div class="price">
                                    SAR ${product.price}
                                </div>
                            </div>
                            <!-- Addition Info -->
                            <div class="ad-info">
                                <ul>
                                    <li><i class="flaticon-fuel-1"></i>${product.engineType}</li>
                                    <li><i class="flaticon-engine-2"></i>${product.engineCapacity}cc</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Ad Box End -->
                    </div>`;
                    grid = grid.replace('__carId__', product.id);
                
                $(grid).appendTo('.posts-masonry');
            });
        }
    

        $('.inputBox').on('ifChanged', function(event){
            search = $('#search').val('');
          //  console.log(search);
            getProducts();
        });

        $('#searchInput').on('change', function(event){
            search = $('#searchInput').val();
            console.log(search);
        });
            getProducts();
        });
</script>
@endpush