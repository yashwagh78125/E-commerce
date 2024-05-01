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
 

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Product Details - Default</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Product Details Default</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->


     
  
    <!-- Start Product Details Section -->
    <div class="product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                        <!-- Start Large Image -->
                        <div class="product-large-image product-large-image-horaizontal swiper-container">
                            <div class="swiper-wrapper">
                               
                                <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive" >
                                    <img src="{{asset("/image/$product->product_img")}}" alt="image not found" id="MainImg">
                                </div>
                            </div>
                        </div>
                        <!-- End Large Image -->
                        <!-- Start Thumbnail Image -->
                        @php
                            $proimg=json_decode($product->images);
                        @endphp
                        <div
                            class="product-image-thumb product-image-thumb-horizontal swiper-container pos-relative mt-5">
                            <div class="swiper-wrapper">
                            @foreach ( $proimg as $img )                          
                                <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid  small-img"   src="{{ asset("/images/$img") }}" alt="image not found">
                                </div>
                           @endforeach
                            </div>
                            <!-- Add Arrows -->
                            <div class="gallery-thumb-arrow swiper-button-next"></div>
                            <div class="gallery-thumb-arrow swiper-button-prev"></div>
                        </div>
                        <!-- End Thumbnail Image -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="product-details-content-area product-details--golden" data-aos="fade-up"
                        data-aos-delay="200">
                        <!-- Start  Product Details Text Area-->
                        <div class="product-details-text">
                            <h4 class="title">{{$product->title}}</h4>
                            <div class="d-flex align-items-center">
                                <ul class="review-star">
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="fill"><i class="ion-android-star"></i></li>
                                    <li class="empty"><i class="ion-android-star"></i></li>
                                </ul>
                                <a href="#" class="customer-review ml-2">(customer review )</a>
                            </div>
                            <div class="price">{{$product->offer_price}}</div>
                            <p>
                                {{$product->description}}

                            </p>
                        </div> <!-- End  Product Details Text Area-->
                        <!-- Start Product Variable Area -->
                        <div class="product-details-variable">
                           
                            <!-- Product Variable Single Item -->
                            <div class="variable-single-item">
                             @if ($product->status == 1)
                             @if ($product->qty != 0)
                             <div class="product-stock"> <span class="product-stock-in"><i class="ion-checkmark-circled"></i></span>{{$product->qty}} IN STOCK</div>
                             @else
                             <div class="product-stock"> <span class="product-stock-in"><i class="ion-close-circled  " style="color: red"></i></span>{{$product->qty}} OUT OF STOCK</div>
                             @endif
                             @else
                             <div class="product-stock"> <span class="product-stock-in"><i class="ion-close-circled  " style="color: red"></i></span> OUT OF STOCK</div>
                             @endif


                         </div>
                            <!-- Product Variable Single Item -->
                            <div class="d-flex align-items-center ">
                                <form action="{{route('updatecart')}}" method='POST'>
                                        @csrf
                                <div class="variable-single-item ">
                                    <span>Quantity</span>                                
                                    <div class="product-variable-quantity">
                                        <input type="text" name="pid" hidden value="{{$product->id}}">
                                        <input min="1" max="{{$product->qty}}" value="1" type="number" name="qty" id="qtyid">                                   
                                    </div>
                                </div>

                               <div class="product-add-to-cart-btn">
                                     @if ($product->status == 1)
                                     @if ($product->qty != 0 )
                                     <input type="hidden" class="modal-add-cart-product-cart-buttons" style="btn btn-primary btn-lg" value="{{$product->id}}" name="pid">

                                     <button input="submit" class="btn btn-block btn-lg btn-black-default-hover">+ Add To Cart</a>

                                     </button>

                                     @else
                                     <a href="#" class="btn btn-block btn-lg btn-black-default-hover disabled" onclick="" data-bs-target="#modalAddcart">+ Add To Cart</a>

                                     @endif
                                     @else
                                     <a href="#" class="btn btn-block btn-lg btn-black-default-hover disabled" onclick="" data-bs-target="#modalAddcart">+ Add To Cart</a>

                                     @endif


                                 </div>
                            </form>
                          
                            </div>
                            <!-- Start  Product Details Meta Area-->
                            <div class="product-details-meta mb-20">
                                <a href="{{route('addWishlist',$product->id)}}" class="icon-space-right"><i class="icon-heart"></i>Add to
                                    wishlist</a>
                                <a href="{{route('AddToCompare',$product->id)}}" class="icon-space-right"><i class="icon-refresh"></i>Compare</a>
                            </div> <!-- End  Product Details Meta Area-->
                        </div> <!-- End Product Variable Area -->

                        <!-- Start  Product Details Catagories Area-->
                        
                        <!-- Start  Product Details Social Area-->
                        <div class="product-details-social">
                            <span class="title">SHARE THIS PRODUCT:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> <!-- End  Product Details Social Area-->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Details Section -->

  

 

<script>
 var MainImg=document.getElementById('MainImg');
 var ModImg=document.getElementById('ModImg');
 var smallimg=document.getElementsByClassName('small-img');

 smallimg[0].onclick=function()
 {
    MainImg.src=smallimg[0].src
    ModImg.src=smallimg[0].src
 }
    
 smallimg[1].onclick=function()
 {
    MainImg.src=smallimg[1].src
      ModImg.src=smallimg[1].src
 }
 smallimg[2].onclick=function()
 {
    MainImg.src=smallimg[2].src
      ModImg.src=smallimg[2].src
 }
 smallimg[3].onclick=function()
 {
    MainImg.src=smallimg[3].src
    ModImg.src=smallimg[3].src
 }
 
</script>


     
        
@endsection