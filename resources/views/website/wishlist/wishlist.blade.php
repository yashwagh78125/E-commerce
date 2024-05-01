@extends('website.layouts.main')
 @section('content')

 {{-- <!-- Start Offcanvas Mobile Menu Section -->
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

     <!-- Start  Offcanvas Addcart Wrapper -->
     <div class="offcanvas-add-cart-wrapper">
         <h4 class="offcanvas-title">Shopping Cart</h4>
         <ul class="offcanvas-cart">
             <li class="offcanvas-cart-item-single">
                 <div class="offcanvas-cart-item-block">
                     <a href="#" class="offcanvas-cart-item-image-link">
                         <img src="{{asset('website/images/product/default/home-1/default-1.jpg')}}" alt="" class="offcanvas-cart-image">
                     </a>
                     <div class="offcanvas-cart-item-content">
                         <a href="#" class="offcanvas-cart-item-link">Car Wheel</a>
                         <div class="offcanvas-cart-item-details">
                             <span class="offcanvas-cart-item-details-quantity">1 x </span>
                             <span class="offcanvas-cart-item-details-price">$49.00</span>
                         </div>
                     </div>
                 </div>
                 <div class="offcanvas-cart-item-delete text-right">
                     <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                 </div>
             </li>
             <li class="offcanvas-cart-item-single">
                 <div class="offcanvas-cart-item-block">
                     <a href="#" class="offcanvas-cart-item-image-link">
                         <img src="{{asset('website/images/product/default/home-2/default-1.jpg')}}" alt="" class="offcanvas-cart-image">
                     </a>
                     <div class="offcanvas-cart-item-content">
                         <a href="#" class="offcanvas-cart-item-link">Car Vails</a>
                         <div class="offcanvas-cart-item-details">
                             <span class="offcanvas-cart-item-details-quantity">3 x </span>
                             <span class="offcanvas-cart-item-details-price">$500.00</span>
                         </div>
                     </div>
                 </div>
                 <div class="offcanvas-cart-item-delete text-right">
                     <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                 </div>
             </li>
             <li class="offcanvas-cart-item-single">
                 <div class="offcanvas-cart-item-block">
                     <a href="#" class="offcanvas-cart-item-image-link">
                         <img src="{{asset('website/images/product/default/home-3/default-1.jpg')}}" alt="" class="offcanvas-cart-image">
                     </a>
                     <div class="offcanvas-cart-item-content">
                         <a href="#" class="offcanvas-cart-item-link">Shock Absorber</a>
                         <div class="offcanvas-cart-item-details">
                             <span class="offcanvas-cart-item-details-quantity">1 x </span>
                             <span class="offcanvas-cart-item-details-price">$350.00</span>
                         </div>
                     </div>
                 </div>
                 <div class="offcanvas-cart-item-delete text-right">
                     <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                 </div>
             </li>
         </ul>
         <div class="offcanvas-cart-total-price">
             <span class="offcanvas-cart-total-price-text">Subtotal:</span>
             <span class="offcanvas-cart-total-price-value">$170.00</span>
         </div>
         <ul class="offcanvas-cart-action-button">
             <li><a href="cart.html" class="btn btn-block btn-golden">View Cart</a></li>
             <li><a href="compare.html" class=" btn btn-block btn-golden mt-5">Checkout</a></li>
         </ul>
     </div> <!-- End  Offcanvas Addcart Wrapper -->

 </div> <!-- End  Offcanvas Addcart Section -->

 <!-- Start Offcanvas Mobile Menu Section -->
 <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
     <!-- Start Offcanvas Header -->
     <div class="offcanvas-header text-right">
         <button class="offcanvas-close"><i class="ion-android-close"></i></button>
     </div> <!-- ENd Offcanvas Header -->

     <!-- Start Offcanvas Mobile Menu Wrapper -->
     
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
                     <h3 class="breadcrumb-title">Wishlist</h3>
                     <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                         <nav aria-label="breadcrumb">
                             <ul>
                                 <li><a href="index.html">Home</a></li>
                                 <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                 <li class="active" aria-current="page">Wishlist</li>
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
                                         <th class="product_total">Stock Status</th>
                                         <th class="product_remove">Delete</th>
                                         <th class="product_remove">Add To Cart</th>
                                     </tr>
                                 </thead> <!-- End Cart Table Head -->
                                 <tbody>
                                     <!-- Start Cart Single Item-->
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
                                    
                                               
                                                <td class="product_remove"><a href="{{ route('deletefromcart', $cart->id) }}"><i class=" text-danger fa fa-trash-o"></i></a></td>
                                                
                                                <td class="product_addcart"><a href="#" class="btn btn-md btn-golden"
                                                    data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                    Cart</a></td>
                                            </form>
                                        </tr>
                                       @endforeach

                                 </tbody>
                             </table>
                         </div>
                        
                     </div>
                 </div>
             </div>
         </div>
     </div> <!-- End Cart Table -->

    
 </div> <!-- ...:::: End Cart Section:::... -->

 

 <!-- material-scrolltop button -->
 <button class="material-scrolltop" type="button"></button> --}}

 
 <!-- Start Modal Quickview cart -->
 
  <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Wishlist</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Wishlist</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Wishlist Section:::... -->
    <div class="wishlist-section">
        <!-- Start Cart Table -->
        <div class="wishlish-table-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Wishlist Table Head -->
                                    <thead>
                                        <tr>
                                           
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_stock">Stock Status</th>
                                             <th class="product_remove">Delete</th>
                                            <th class="product_addcart">Add To Cart</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                      <tbody>
                                     <!-- Start Cart Single Item-->
                                   @foreach ($carts as $index=>$cart)
                                        <tr>
                                            <form action="{{ route('updateFromCartTable') }}" method="POST" enctype="multipart/form-data">
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

                                                <td class="product_stock" >
                                                    @if($cart->products->status==1)
                                                    <span style="color: green">In Stock</span>
                                                    @else
                                                    <span style="color: red">Out of Stock</span>
                                                    @endif
                                                </td>
                                    
                                               
                                                <td class="product_remove"><a href="{{ route('deleteFromWishList', $cart->products->id) }}"><i class=" text-danger fa fa-trash-o"></i></a></td>
                                                
                                                <td class="product_addcart"><a href="#" class="btn btn-md btn-golden"
                                                    data-bs-toggle="modal"onClick="getProductData('{{$cart->products->id}}')"  data-bs-target="#modalAddcart">Add To
                                                    Cart</a></td>
                                            </form>
                                        </tr>
                                       @endforeach

                                 </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->
    </div> <!-- ...:::: End Wishlist Section:::... -->

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
                                        <a href="checkout.html">Checkout</a>
                                        <form action="{{route('deleteFromWishListWithAddCart1')}}" method="post">
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
        console.log(id);
        document.getElementById('prodId').value = id;

        var matchingProducts = product.map(function(prod) {
            if (prod.id == id) {
                document.getElementById('prodImg').src = "{{asset('/image') }}" + '/' + prod.product_img;
            }
        });

    }

</script>


 @endsection