@extends('website.layouts.main')
 @section('content')
@if ($message= Session::get('error'))
 <div class="alert alert-success alert-block">
     <h4>{{$message}}</h4>
          <meta http-equiv="refresh" content="1">

 </div>


 @endif
 @if ($message= Session::get('success'))
 <div class="alert alert-success alert-block">
     <h4>{{$message}}</h4>
          <meta http-equiv="refresh" content="1">

 </div>


 @endif
 @if ($message= Session::get('error1'))
 <div class="alert alert-success alert-block">
     <h4>{{$message}}</h4>
          <meta http-equiv="refresh" content="1">

 </div>


 @endif
 @if ($message= Session::get('error2'))
 <div class="alert alert-success alert-block">
     <h4>{{$message}}</h4>
          <meta http-equiv="refresh" content="1">

 </div>
 @endif
 <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Shop - Grid Left Sidebar</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Shop Grid Left Sidebar</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Shop Section:::... -->
    <div class="shop-section">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <!-- Start Sidebar Area -->
                    <div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">CATEGORIES</h6>
                            <div class="sidebar-content">
                                <ul class="sidebar-menu">
                                    <li>
                                        <ul class="sidebar-menu-collapse">
                                            <!-- Start Single Menu Collapse List -->
                                            <li class="sidebar-menu-collapse-list">
                                                <div class="accordion">
                                                    @foreach ($category as $cat)

                                                    <a href="#" class="accordion-title collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#men-fashion"
                                                        aria-expanded="false">{{$cat->name}}<i
                                                            class="ion-ios-arrow-right"></i></a>
                                                    <div id="men-fashion" class="collapse">
                                                        @foreach ( $subcategory as $sub)
                                                        <ul class="accordion-category-list">
                                                         @if ($sub->cat_id==$cat->id)
                                                              <li><a href="{{route('filterpage.filter',$sub->id)}}">{{$sub->name}}</a></li>
                                                         @endif                                                               
                                                        </ul>
                                                        @endforeach                                                          
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                             <!-- End Single Menu Collapse List -->
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                          <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Price</h6>
                            <div class="sidebar-content">
                                <div class="filter-type-select">
                                    <ul>    
                                        <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="radio" id="radio1" value="1" name="brand" onclick="getByPrice(this.value)">
                                                <span>Rs. 1 - Rs. 999</span>
                                            </label>
                                        </li>                                                                        
                                        <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="radio" id="radio1" value="2" name="brand" onclick="getByPrice(this.value)">
                                                <span>Rs. 1000 - Rs. 1999</span>
                                            </label>
                                        </li>
                                         <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="radio" id="radio1" value="3" name="brand" onclick="getByPrice(this.value)">
                                                <span>Rs. 2000 - Rs. 3999</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="radio" id="radio1" value="4" name="brand" onclick="getByPrice(this.value)">
                                                <span>Rs. 4000 & above</span>
                                            </label>
                                        </li>                                                                 
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->


                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Brands</h6>
                            <div class="sidebar-content">
                                <div class="filter-type-select">
                                    <ul>
                                        @foreach ($brands as $brand )                                          
                                        <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="radio" id="{{ $brand->name}}" value="{{$brand->id}}" name="brand" onclick="getByBrand(this.value)">
                                                <span>{{ $brand->name}}</span>
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                         <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Discount</h6>
                            <div class="sidebar-content">
                                <div class="filter-type-select">
                                    <ul>    
                                        <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="radio" id="radio2" value="1" name="discount" onclick="getByDiscount(this.value)">
                                                <span>50% or More</span>
                                            </label>
                                        </li>                                                                        
                                        <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="radio" id="radio2" value="2" name="discount" onclick="getByDiscount(this.value)">
                                                <span>40% or More</span>
                                            </label>
                                        </li>
                                         <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="radio" id="radio2" value="3" name="bdiscountrand" onclick="getByDiscount(this.value)">
                                                <span>30% or More</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="radio" id="radio2" value="4" name="discount" onclick="getByDiscount(this.value)">
                                                <span>20% or More</span>
                                            </label>
                                        </li>   
                                         <li>
                                            <label class="checkbox-default" for="tommyHilfiger">
                                                <input type="radio" id="radio2" value="5" name="discount" onclick="getByDiscount(this.value)">
                                                <span>10% or More</span>
                                            </label>
                                        </li>                                                                 
                                    </ul>
                                </div>
                            </div>
                        </div>

                       
                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Tag products</h6>
                            <div class="sidebar-content">
                                <div class="tag-link">
                                    <a href="#">asian</a>
                                    <a href="#">brown</a>
                                    <a href="#">euro</a>
                                    <a href="#">fashion</a>
                                    <a href="#">hat</a>
                                    <a href="#">t-shirt</a>
                                    <a href="#">teen</a>
                                    <a href="#">travel</a>
                                    <a href="#">white</a>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <div class="sidebar-content">
                                <a href="product-details-default.html" class="sidebar-banner img-hover-zoom">
                                  <img class="img-fluid" src="{{asset('website/images/banner/side-banner.jpg')}}" alt="">
                                </a>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                    </div> <!-- End Sidebar Area -->
                </div>
                <div class="col-lg-9">
                    <!-- Start Shop Product Sorting Section -->
                    <div class="shop-sort-section">
                        <div class="container">
                            <div class="row">
                                <!-- Start Sort Wrapper Box -->
                                <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                    data-aos="fade-up" data-aos-delay="0">
                                    <!-- Start Sort tab Button -->
                                    <div class="sort-tablist d-flex align-items-center">
                                        <ul class="tablist nav sort-tab-btn">
                                            <li><a class="nav-link active" data-bs-toggle="tab"
                                                    href="#layout-3-grid"><img src="{{asset('website/images/icons/bkg_grid.png')}}"
                                                        alt=""></a></li>
                                            <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                        src="{{asset('website/images/icons/bkg_list.png')}}" alt=""></a></li>
                                        </ul>

                                        <!-- Start Page Amount -->
                                        <div class="page-amount ml-2">
                                            <span>Showing 1–9 of 21 results</span>
                                        </div> <!-- End Page Amount -->
                                    </div> <!-- End Sort tab Button -->

                                    <!-- Start Sort Select Option -->
                                    <div class="sort-select-list d-flex align-items-center">
                                        <label class="mr-2">Sort By:</label>
                                        <form action="#">
                                            <fieldset>
                                                <select name="speed" id="speed" onchange="sortBy(this.value)">
                                                
                                                    <option value="1">Sort by price: low to high</option>
                                                    <option value="2">Sort by price: high to low</option>
                                                    <option selected="selected" value="3">Product Name:A to Z</option>
                                                     <option  value="4">Product Name:Z to A</option>
                                                </select>
                                            </fieldset>
                                        </form> 
                                     </div> <!-- End Sort Select Option -->



                                </div> <!-- Start Sort Wrapper Box -->
                            </div>
                        </div>
                    </div> <!-- End Section Content -->

                    <!-- Start Tab Wrapper -->
                    <div class="sort-product-tab-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content tab-animate-zoom">
                                        <!-- Start Grid View Product -->
                                        <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                                            <div class="row">
                                                @foreach ($products as $prod)                                         
                                                <div class="col-xl-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                        data-aos="fade-up" data-aos-delay="0">
                                                        <div class="image-box" style="height: 300px">
                                                            <a href="{{route('productdetail.index',$prod->id)}}" class="image-link">
                                                                <img src="{{("/image/$prod->product_img")}}" alt="image not found" height="200px" >                                                          
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                <a href="#"  onclick="getProductData('{{$prod->id}}')" 
                                                                    data-bs-toggle="modal" data-bs-target="#modalAddcart">Add to Cart</a>
                                                                </div>
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="{{route('addWishlist',$prod->id)}}"><i
                                                                            class="icon-heart"></i></a>
                                                                    <a href="compare.html"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="product-details-default.html">{{$prod->title}}
                                                        </a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                                <div class="content-right">
                                                    <strike class="price" >Price:{{$prod->price}}</strike><br>
                                                     <span class="price">Discount:{{$prod->discount}}%</span><br>
                                                    <span class="price">Offer Price:{{$prod->offer_price}}</span>
                                                </div>
                                            </div>
                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                  @endforeach                                                               
                                            </div>
                                        </div> <!-- End Grid View Product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Tab Wrapper -->

                    <!-- Start Pagination -->
                    <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
                       {{$productData->links('pagination::bootstrap-5')}}; 
                    </div> <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Shop Section:>

     <!-- Start Modal Add cart -->
<div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-right">
                            <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="modal-add-cart-product-img">
                                        <img class="img-fluid"
                                            src="" alt="" id="prodImg" >
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart
                                        successfully!</div>
                                    <div class="modal-add-cart-product-cart-buttons">
                                        <a href="{{route('showcart')}}">View Cart</a>
                                       
                                        <form action="{{route('addtocart')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="prodId" id="prodId">
                                            <button type="submit" class="btn-sm text-light mt-5 " style="background-color:#b19361" >Add to Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 modal-border">
                            <ul class="modal-add-cart-product-shipping-info">
                                <li> <strong><i class="icon-shopping-cart"></i> There Are 5 Items In Your
                                        Cart.</strong></li>
                                <li> <strong>TOTAL PRICE: </strong> <span>$187.00</span></li>
                                <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">CONTINUE
                                        SHOPPING</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Add cart -->


<script>
    var product = @json($products);
   console.log(product);
function getProductData(id) { 
        //    console.log(id);
           document.getElementById('prodId').value = id;
        var matchingProducts = product.map(function(prod) {
        if (prod.id == id) {
            document.getElementById('prodImg').src = "{{ asset('image/') }}" + '/' + prod.product_img;
        } 
           
    });

    }  
 </script>


<script>
function sortBy(value) {
    var url = '';

    switch(value) {
        case '1':
            url = "{{ route('filterpage.sortBy', 1) }}";
            break;
        case '2':
            url = "{{ route('filterpage.sortBy', 2) }}";
            break;
        case '3':
            url = "{{ route('filterpage.sortBy', 3) }}";
            break;
        case '4':
            url = "{{ route('filterpage.sortBy', 4) }}";
            break;
        default:
            break;
    }

    window.location.href = url;
}
</script>
<script>
    function getByBrand(brand) {        
        var url = "http://127.0.0.1:8000/sortbyBrand/" + encodeURIComponent(brand);
        window.location.href = url;
    }
</script>

<script>
    function getByPrice(price) {        
        var url = "http://127.0.0.1:8000/sortbyPrice/" + encodeURIComponent(price);
        window.location.href = url;
    }
</script>

<script>
    function getByDiscount(discount) {        
        var url = "http://127.0.0.1:8000/sortbyDiscount/" + encodeURIComponent(discount);
        window.location.href = url;
    }
</script>
  
@endsection
