@extends('website.layouts.main')
 @section('content')

 <!-- Start Offcanvas Mobile Menu Section -->
 <div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
     <!-- Start Offcanvas Header -->
     <div class="offcanvas-header text-right">
         <button class="offcanvas-close"><i class="ion-android-close"></i></button>
     </div> <!-- End Offcanvas Header -->
     <!-- Start Offcanvas Mobile Menu Wrapper -->
     <!-- Start Mobile contact Info -->
     <div class="mobile-contact-info">
         <div class="logo">
             <a href="index.html"><img src="{{asset('website/images/logo/logo_white.png')}}" alt=""></a>
         </div>

         <address class="address">
             <span>Address: Your address goes here.</span>
             <span>Call Us: 0123456789, 0123456789</span>
             <span>Email: demo@example.com</span>
         </address>

         <ul class="social-link">
             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             <li><a href="#"><i class="fa fa-instagram"></i></a></li>
             <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
         </ul>

         <ul class="user-link">
             <li><a href="wishlist.html">Wishlist</a></li>
             <li><a href="cart.html">Cart</a></li>
             <li><a href="checkout.html">Checkout</a></li>
         </ul>
     </div>
     <!-- End Mobile contact Info -->
 </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

 <!-- Start Offcanvas Addcart Section -->
 <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
     <!-- Start Offcanvas Header -->
     <div class="offcanvas-header text-right">
         <button class="offcanvas-close"><i class="ion-android-close"></i></button>
     </div> <!-- End Offcanvas Header -->

     
 </div> <!-- End  Offcanvas Addcart Section -->

 <!-- Start Offcanvas Mobile Menu Section -->


 <!-- Start Offcanvas Search Bar Section -->
 <div id="search" class="search-modal">
     <button type="button" class="close">×</button>
     <form>
         <input type="search" placeholder="type keyword(s) here" />
         <button type="submit" class="btn btn-lg btn-golden">Search</button>
     </form>
 </div>
 <!-- End Offcanvas Search Bar Section -->

 <!-- Offcanvas Overlay -->
 <div class="offcanvas-overlay"></div>

 <!-- ...:::: Start Breadcrumb Section:::... -->
 <div class="breadcrumb-section breadcrumb-bg-color--golden">
     <div class="breadcrumb-wrapper">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <h3 class="breadcrumb-title">Cart</h3>
                     <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                         <nav aria-label="breadcrumb">
                             <ul>
                                 <li><a href="index.html">Home</a></li>
                                 <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                 <li class="active" aria-current="page">Cart</li>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div> <!-- ...:::: End Breadcrumb Section:::... -->

 <!-- ...:::: Start Cart Section:::... -->
 <div class="cart-section">
     <!-- Start Cart Table -->
     <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="table_desc">
                         <div class="table_page table-responsive">
                             <table>
                                 <!-- Start Cart Table Head -->
                                 <thead>
                                     <tr>
                                        
                                         <th class="product_thumb">Image</th>
                                         <th class="product_name">Product</th>
                                         <th class="product-price">Price</th>
                                         <th class="product_quantity">Quantity</th>
                                         <th class="product_total">Total</th>
                                         <th class="product_remove">Delete</th>
                                         <th class="product_remove">update</th>
                                     </tr>
                                 </thead> <!-- End Cart Table Head -->
                                 <tbody>
                                     <!-- Start Cart Single Item-->
                                     @php
                                         $total=0;
                                     @endphp
                                    
                                   @foreach ($carts as $index=>$cart)
                                        <tr>
                                            <form action="{{ route('updateFromCartTable') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="cartId" value="{{ $cart->id }}">
                                                <td class="product_thumb">
                                                    <a href="{{route('productdetail.index',$cart['products']['id'])}}"><img src="{{ asset('/image/'. $cart['products']['product_img']) }}" alt=""></a>
                                                </td>

                                                <td class="product_name">
                                                    <a href="{{route('productdetail.index',$cart['products']['id'])}}">{{ $cart['products']['title'] }}
                                                    </a>
                                               </td>
                                                <td class="product_price" >₹ {{ $cart['products']['price'] }}</td>
                                            {{-- <td class="product_quantity">
                                                <label>Quantity</label>
                                                <input type="number" name="updateqty" value="{{ $cart->quantity }}" min="1" max="{{ $cart['products']['qty'] }}" oninput="getProductPrice(this.value, '{{ $cart['products']['price'] }}', {{ $loop->index }})">
                                            </td> --}}
                                              <td class="product_quantity">
                                                <label>Quantity</label>
                                                <input type="number" name="updateqty" value="{{ $cart->quantity }}" min="1" max="{{ $cart['products']['qty'] }}" >
                                            </td>

                                                 <td class="product_total" id="gettotal">₹{{ $cart['quantity'] * $cart['products']['price'] }}
                                                </td>
                                                <td class="product_remove"><a href="{{ route('deletefromcart', $cart->id) }}"><i class=" text-danger fa fa-trash-o"></i></a></td>
                                                <td class="product_remove"><button type="submit"><i class="fa fa-check-square" style="font-size:30px;color:green"></i></button></td>
                                            </form>
                                        </tr>
                                        @php
                                            $total+= $cart['products']['price'] *$cart->quantity;
                                        @endphp
                                        @endforeach


                                 </tbody>
                             </table>
                         </div>
                         {{-- <div class="cart_submit">
                            <form method="POST" action="{{route('updateFromCartTable')}}">
                                @csrf
                              <input type="text" name="qtyupdate" id="qtyupdate" hidden>
                             <button class="btn btn-md btn-golden" type="submit">update cart</button>
                             <form>
                         </div> --}}
                     </div>
                 </div>
             </div>
         </div>
     </div> <!-- End Cart Table -->

     <!-- Start Coupon Start -->
     <div class="coupon_area">
         <div class="container">
             <div class="row">
                 
                 <div class="col-lg-6 col-md-6">
                     <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                         <h3>Cart Totals</h3>
                         <div class="coupon_inner">
                             <div class="cart_subtotal">
                                 <p>Subtotal</p>
                                 <p class="cart_amount">₹{{$total}}</p>
                             </div>
                             <div class="cart_subtotal ">
                                 <p>Shipping</p>
                                 <p class="cart_amount"><span>Flat Rate:</span>₹{{$total *0.01}}</p>
                             </div>
                             <a href="#">Calculate shipping</a>

                             <div class="cart_subtotal">
                                 <p>Total</p>
                                 <p class="cart_amount">₹{{$total+$total *0.01}}</p>
                             </div>
                             <div class="checkout_btn">
                                @if($total==0)
                                  <a href="" class="btn btn-md btn-golden" >Proceed to Checkout</a></button>
                                @else
                                    <a href="{{route('order.store')}}" class="btn btn-md btn-golden">Proceed to Checkout</a>
                                @endif
                                 
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div> <!-- End Coupon Start -->
 </div> <!-- ...:::: End Cart Section:::... -->

 

 <!-- material-scrolltop button -->
 <button class="material-scrolltop" type="button"></button>

 <!-- Start Modal Add cart -->
 <div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col text-right">
                             <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                             </button>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-7">
                             <div class="row">
                                 <div class="col-md-4">
                                     <div class="modal-add-cart-product-img">
                                         <img class="img-fluid" src="{{asset('website/images/product/default/home-1/default-1.jpg')}}" alt="">
                                     </div>
                                 </div>
                                 <div class="col-md-8">
                                     <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart
                                         successfully!</div>
                                     <div class="modal-add-cart-product-cart-buttons">
                                         <a href="cart.html">View Cart</a>
                                        
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

 <!-- Start Modal Quickview cart -->
 <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog  modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col text-right">
                             <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                             </button>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="product-details-gallery-area mb-7">
                                 <!-- Start Large Image -->
                                 <div class="product-large-image modal-product-image-large swiper-container">
                                     <div class="swiper-wrapper">
                                         <div class="product-image-large-image swiper-slide img-responsive">
                                             <img src="{{asset('website/images/product/default/home-1/default-1.jpg')}}" alt="">
                                         </div>
                                         <div class="product-image-large-image swiper-slide img-responsive">
                                              <img src="{{asset('website/images/product/default/home-1/default-2.jpg')}}" alt="">
                                         </div>
                                         <div class="product-image-large-image swiper-slide img-responsive">
                                             <img src="{{asset('website/images/product/default/home-1/default-3.jpg')}}" alt="">
                                         </div>
                                         <div class="product-image-large-image swiper-slide img-responsive">
                                             <img src="{{asset('website/images/product/default/home-1/default-4.jpg')}}" alt="">
                                         </div>
                                         <div class="product-image-large-image swiper-slide img-responsive">
                                             <img src="{{asset('website/images/product/default/home-1/default-5.jpg')}}" alt="">
                                         </div>
                                         <div class="product-image-large-image swiper-slide img-responsive">
                                             <img src="{{asset('website/images/product/default/home-1/default-6.jpg')}}" alt="">
                                         </div>
                                     </div>
                                 </div>
                                 <!-- End Large Image -->
                                 <!-- Start Thumbnail Image -->
                                 <div class="product-image-thumb modal-product-image-thumb swiper-container pos-relative mt-5">
                                     <div class="swiper-wrapper">
                                         <div class="product-image-thumb-single swiper-slide">
                                             <img class="img-fluid" src="{{asset('website/images/product/default/home-1/default-1.jpg')}}" alt="">
                                         </div>
                                         <div class="product-image-thumb-single swiper-slide">
                                            <img class="img-fluid" src="{{asset('website/images/product/default/home-1/default-2.jpg')}}" alt="">
                                         </div>
                                         <div class="product-image-thumb-single swiper-slide">
                                             <img class="img-fluid" src="{{asset('website/images/product/default/home-1/default-3.jpg')}}" alt="">
                                         </div>
                                         <div class="product-image-thumb-single swiper-slide">
                                             <img class="img-fluid" src="{{asset('website/images/product/default/home-1/default-4.jpg')}}" alt="">
                                         </div>
                                         <div class="product-image-thumb-single swiper-slide">
                                            <img class="img-fluid" src="{{asset('website/images/product/default/home-1/default-5.jpg')}}" alt="">
                                         </div>
                                         <div class="product-image-thumb-single swiper-slide">
                                             <img class="img-fluid" src="{{asset('website/images/product/default/home-1/default-6.jpg')}}" alt="">
                                         </div>
                                     </div>
                                     <!-- Add Arrows -->
                                     <div class="gallery-thumb-arrow swiper-button-next"></div>
                                     <div class="gallery-thumb-arrow swiper-button-prev"></div>
                                 </div>
                                 <!-- End Thumbnail Image -->
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="modal-product-details-content-area">
                                 <!-- Start  Product Details Text Area-->
                                 <div class="product-details-text">
                                     <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                     <div class="price"><del>$70.00</del>$80.00</div>
                                 </div> <!-- End  Product Details Text Area-->
                                 <!-- Start Product Variable Area -->
                                 <div class="product-details-variable">
                                     <!-- Product Variable Single Item -->
                                     <div class="variable-single-item">
                                         <span>Color</span>
                                         <div class="product-variable-color">
                                             <label for="modal-product-color-red">
                                                 <input name="modal-product-color" id="modal-product-color-red" class="color-select" type="radio" checked>
                                                 <span class="product-color-red"></span>
                                             </label>
                                             <label for="modal-product-color-tomato">
                                                 <input name="modal-product-color" id="modal-product-color-tomato" class="color-select" type="radio">
                                                 <span class="product-color-tomato"></span>
                                             </label>
                                             <label for="modal-product-color-green">
                                                 <input name="modal-product-color" id="modal-product-color-green" class="color-select" type="radio">
                                                 <span class="product-color-green"></span>
                                             </label>
                                             <label for="modal-product-color-light-green">
                                                 <input name="modal-product-color" id="modal-product-color-light-green" class="color-select" type="radio">
                                                 <span class="product-color-light-green"></span>
                                             </label>
                                             <label for="modal-product-color-blue">
                                                 <input name="modal-product-color" id="modal-product-color-blue" class="color-select" type="radio">
                                                 <span class="product-color-blue"></span>
                                             </label>
                                             <label for="modal-product-color-light-blue">
                                                 <input name="modal-product-color" id="modal-product-color-light-blue" class="color-select" type="radio">
                                                 <span class="product-color-light-blue"></span>
                                             </label>
                                         </div>
                                     </div>
                                     <!-- Product Variable Single Item -->
                                     <div class="d-flex align-items-center flex-wrap">
                                         <div class="variable-single-item ">
                                             <span>Quantity</span>
                                             <div class="product-variable-quantity">
                                                 <input min="1" max="100" value="1" type="number">
                                             </div>
                                         </div>

                                         <div class="product-add-to-cart-btn">
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                 Cart</a>
                                         </div>
                                     </div>
                                 </div> <!-- End Product Variable Area -->
                                 <div class="modal-product-about-text">
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                         laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                         in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                         recusandae</p>
                                 </div>
                                 <!-- Start  Product Details Social Area-->
                                 <div class="modal-product-details-social">
                                     <span class="title">SHARE THIS PRODUCT</span>
                                     <ul>
                                         <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                         <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                         <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                         <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                         </li>
                                         <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                     </ul>

                                 </div> <!-- End  Product Details Social Area-->
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div> <!-- End Modal Quickview cart -->

 {{-- <script>
     function getProductPrice(qty,price){
        var total = qty* price;
          document.getElementById('gettotal').innerText = total;
    }
 </script> --}}
 @endsection