@extends('layouts.master')

@section('title', 'Hotspot || Car Listing')

@section('main-content')

<main id="mt-main">

    <!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->

    <div class="page-header-area-2 gray">
        
        <div class="container">
              {{-- <div class="header-page d-flex justify-content-center">
                <img src="{{ asset('/images/brands/6.png') }}" alt="Brand 6" class="mx-2">
                <img src="{{ asset('/images/brands/2.png') }}" alt="Brand 2" class="mx-2">
                <img src="{{ asset('/images/brands/3.png') }}" alt="Brand 3" class="mx-2">
                <img src="{{ asset('/images/brands/5.png') }}" alt="Brand 5" class="mx-2">
                <img src="{{ asset('/images/brands/4.png') }}" alt="Brand 4" class="mx-2">
            </div> --}}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="small-breadcrumb">
                        <div class="breadcrumb-link">
                            <ul>
                                <li><a href="index.html">Home Page</a></li>
                                <li><a class="active" href="#">Listing</a></li>
                            </ul>
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



                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- Sorting Filters End-->

                            <div class="clearfix"></div>

                            <!-- Ads Archive -->

                            <div class="grid-style-4">

                                <div class="posts-masonry">
                                    @if(isset($cars) && $cars->isNotEmpty())
                                    @foreach($cars as $car)
                                    <div class="col-md-6 col-xs-12 col-sm-6">
                                        <!-- Ad Box -->
                                        <div class="category-grid-box">

                                            <!-- Ad Img -->
                                            <div class="category-grid-img">
                                                <img class="img-responsive" alt="" src="{{ $car->image }}">

                                                <!-- View Details -->
                                                <a href="{{ route('listingDetails', ['carId' => $car->id]) }}"
                                                    class="view-details">View Details</a>

                                                <!-- Additional Info -->
                                                <div class="additional-information">
                                                    <p>Transmission: {{ $car->transmission }}</p>
                                                    <p>Engine Capacity: {{ $car->engineCapacity }}</p>
                                                    <p>Engine Type: {{ $car->engineType }}</p>
                                                </div>
                                            </div>
                                            <!-- Ad Img End -->

                                            <div class="short-description">
                                                <!-- Ad Category -->
                                                <div class="category-title"><span><a href="#">{{ $car->description
                                                            }}</a></span></div>

                                                <!-- Ad Title -->
                                                <h3><a title="" href="single-page-listing.html">{{ $car->title }}</a>
                                                </h3>

                                                <!-- Price -->
                                                <div class="price">
                                                    SAR {{ $car->price }}
                                                </div>
                                            </div>

                                            <!-- Addition Info -->
                                            <div class="ad-info">
                                                <ul>
                                                    <li><i class="flaticon-fuel-1"></i>{{ $car->engineType }}</li>
                                                    <li><i class="flaticon-engine-2"></i>{{ $car->engineCapacity }} cc
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Ad Box End -->
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-md-12">
                                        <p>No products found.</p>
                                    </div>
                                    @endif


                                </div>

                            </div>

                            <!-- Ads Archive End -->

                            <div class="clearfix"></div>

                            <!-- Pagination -->
                            <div class="text-center margin-top-30">
                                <ul class="pagination ">

                                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
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

                                <!-- Models Panel -->

                                <div class="panel panel-default">

                                    <!-- Heading -->
                                    <div class="SelectedFilter">
                                        <div class="modals">
                                            <!-- Search -->
                                            <p class="customSelectedFilter">Search:</p>
                                            <div class="search-widget mt-5" style="margin-top: 9px;">

                                                <input id="searchInput" placeholder="Search.." type="text">

                                                <button type="submit" id="search"><i class="fa fa-search"></i></button>

                                            </div>
                                            <p class="customSelectedFilter">Selected Filters:</p>
                                            <ul class="selectedModels" id="selectedModels"></ul>
                                            <ul class="selectedModels" id="selectedTransmition">
                                                <li class="customListItem" id="customTransition"> Automatic </li>
                                            </ul>
                                            <ul class="selectedModels" id="bodyType">

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-heading" role="tab" id="headingTwo">

                                        <h4 class="panel-title">

                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">

                                                <i class="more-less glyphicon glyphicon-plus"></i>

                                                Models

                                            </a>

                                        </h4>

                                    </div>

                                    <!-- Content -->

                                    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                                        aria-labelledby="headingTwo">

                                        <div class="panel-body">

                                            <!-- Models List -->

                                            <div class="skin-minimal">

                                                <ul class="list">

                                                    @foreach ($models as $model)

                                                    <li>
                                                        <input type="checkbox" class="model-checkbox inputBox"
                                                            data-id="{{ $model->id }}" data-value="{{ $model->name }}"
                                                            id="model-checkbox-{{ $model->id }}">

                                                        <label for="model-checkbox-{{ $model->id }}">{{
                                                            $model->brand->name }} {{ $model->name }} </label>
                                                    </li>

                                                    @endforeach





                                                </ul>

                                                <a href=".html" data-toggle="modal" class="pull-right"><strong>View

                                                        All</strong></a>

                                            </div>

                                            <!-- Models List End -->

                                        </div>

                                    </div>

                                </div>

                                <!-- Models Panel End -->

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

                                                        <input tabindex="7" class="transmission inputRadio" type="radio"
                                                            value="Automatic" data-id="auto" name="minimal-radio"
                                                            checked>

                                                        <label for="automatic">Automatic</label>

                                                    </li>

                                                    <li>

                                                        <input tabindex="8" class="transmission inputRadio" type="radio"
                                                            value="Manual" data-id="manual" name="minimal-radio">

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

                                                    @foreach ($bodyTypes as $type)

                                                    <li>

                                                        <input class="inputRadio" type="radio" id="{{ $type->id }}"
                                                            value="{{ $type->name }}" name="body-type-radio">

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

                                            @foreach ($recentCars as $recent)

                                            <!-- Ads -->

                                            <div class="recent-ads-list">

                                                <div class="recent-ads-container">

                                                    <div class="recent-ads-list-image">

                                                        <a href="{{ route('listingDetails', $recent->id) }}" class="recent-ads-list-image-inner">

                                                            <img src="{{ asset($recent->image) }}" alt="">

                                                        </a><!-- /.recent-ads-list-image-inner -->

                                                    </div>

                                                    <!-- /.recent-ads-list-image -->

                                                    <div class="recent-ads-list-content">

                                                        <h3 class="recent-ads-list-title">

                                                            <a href="{{ route('listingDetails', $recent->id) }}">{{ $recent->title }} </a>

                                                        </h3>

                                                        <ul class="recent-ads-list-location">

                                                            <li><a href="{{ route('listingDetails', $recent->id) }}">{{ $recent->description }}</a>,</li>

                                                            <li><a href="{{ route('listingDetails', $recent->id) }}">{{ $recent->year }}</a></li>

                                                        </ul>

                                                        <div class="recent-ads-list-price">

                                                            {{ $recent->price }}SA

                                                        </div>

                                                        <!-- /.recent-ads-list-price -->

                                                    </div>

                                                    <!-- /.recent-ads-list-content -->

                                                </div>

                                                <!-- /.recent-ads-container -->

                                            </div>

                                            @endforeach





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



    <!-- =-=-=-=-=-=-= More Models Modal =-=-=-=-=-=-= -->

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

                                <label>Select Models</label>

                                <!-- Models List -->

                                <div class="skin-minimal">

                                    <ul class="list">

                                        <li class="col-sm-4 col-xs-6">

                                            <input type="checkbox" id="r1">

                                            <label for="r1">All Models</label>

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

                                <!-- Models List End -->

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
    $(document).ready(function() {
        var modelId = {!! json_encode($modelId ?? null) !!};
        var brandId = {!! json_encode($brandId ?? null) !!};
        var variantId = {!! json_encode($variantId ?? null) !!};

        console.log(brandId,variantId,modelId,);
        var trans = null;
        var bodyTypeId =  {{ isset($bodyTypeId) ? $bodyTypeId : 'null' }};
        var search = null;
        var page = null;

        // console.log(brandId,variantId,modelId,bodyType);

        function getProducts(modelIds,trans,bodyType,price) {
            var modelIds = []; 
                $('.model-checkbox:checked').each(function() {
                    modelIds.push($(this).data('id')); 
                });
                
                trans =  $('.transmission:checked').data('id');
                bodyType = $('input[name="body-type-radio"]:checked').attr('id');
                $.ajax({
                    type: 'POST',
                    url: '/search',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "brandId":brandId,
                        "modelIds":modelIds,
                        "modelId":modelId,
                        "variantId":variantId,
                        "trans": trans,
                        "bodyType":bodyType,
                        "bodyTypeId":bodyTypeId,
                        "search":search,
                        "page":page,
                        },
            
                    success: function (response) {
                        // Handle success response
                        $('.posts-masonry').empty();
                        
                        createGrid(response);
                        createPagination(response);
                    
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
            //console.log(response);
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
                                    <p>Brand : ${product.brand.name}</p>
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
                                     <li><i class="flaticon-car-2"></i>${product.brand.name}</li>
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

        function createPagination(data) {
            let paginationUl = $('ul.pagination');
            paginationUl.empty();

            if (data.last_page > 1) {
                // Previous button
                if (data.current_page > 1) {
                    paginationUl.append('<li><a href="#" onclick="changePage(' + (data.current_page - 1) + ')"><i class="fa fa-chevron-left"></i></a></li>');
                }

                // Page numbers
                for (let i = 1; i <= data.last_page; i++) {
                    if (i === data.current_page) {
                        paginationUl.append('<li class="active"><a href="#">' + i + '</a></li>');
                    } else {
                        paginationUl.append('<li><a href="#" class="page-link" data-page="' + i + '">' + i + '</a></li>');
                    }
                }

                // Next button
                if (data.current_page < data.last_page) {
                    paginationUl.append('<li><a href="#" class="page-link" data-page="' + (data.current_page + 1) + '"><i class="fa fa-chevron-right"></i></a></li>');
                }
            }
        }
        $(document).on('click', '.page-link', function() {
            page = $(this).data('page');
            console.log(page);
            getProducts();
        });
        if(modelId){
               console.log('#model-checkbox-' + modelId);
             $('#model-checkbox-' + modelId).iCheck('toggle');
            }

        $('.inputBox').on('ifChanged', function(event){
             search = $('#search').val();
            getProducts();


            selectedModelsDiv.empty()
            let value = $(this).data('value');
            
            if ($(this).is(':checked')) {
                selectedModels.push(value);

            } else {
                selectedModels = selectedModels.filter(function (item) {
                    return item !== value;
                });
            }
            const listItems = selectedModels.map(function (item, index) {
                return `<li class="customListItem">  ${item}  </li>`;
            });

            selectedModelsDiv.append(listItems.join(''));

        })
        $('.inputRadio').on('ifChecked', function(event){
             search = $('#search').val();
            getProducts();
           
        });

        $('#search').on('click', function(event){
            search = $('#searchInput').val();
            bodyTypeId=null;
            variantId=null;
            modelId=null;
            brandId=null;
            getProducts();
            console.log(search);
        });
        
          
        getProducts();
            
        });




        let selectedModels = [];
        $('.icheckbox_minimal input').iCheck({
            checkboxClass: 'icheckbox_minimal'
        });

        const selectedModelsDiv = $('#selectedModels');
        const selectedTransmitionDiv = $('#selectedTransmition');
        const bodyTypeDIv = $('#bodyType');

        $('input[type=radio][name=minimal-radio]').on('ifChecked', function (event) {
            console.log(this.value)
            $('#customTransition').html(this.value)
        });

        $('input[type=radio][name=body-type-radio]').on('ifChecked', function (event) {
            console.log(this.value)
            $('#customType').html(this.value)
        });
</script>
@endpush