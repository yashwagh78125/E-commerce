@extends('website.layouts.main')
@section('content')

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
                    <h3 class="breadcrumb-title">Compare</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                <li class="active" aria-current="page">Compare</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->
{{-- <div class="card">
    <div class="card-body">
        <h2 class="h4  mb-3">Products</h2>
        <div class="mb-3">
            <label for="category">Products</label>
            <select name="category_id" id="category" class="form-control" required>
                <option>Select Produts</option>

                @foreach ($allproduct as $data)
                @if ($data->category_id==$products->category_id)


                <option value="{{$data->id}}" onclick="getByProduct(this.value)">{{$data->title}}</option>


                @endif

                @endforeach


            </select>


        </div>
        // {{-- <div class="mb-3">
            {{-- <label for="category">Sub category</label>
            <select name="sub_category" id="sub_category" class="form-control" required>
                <option value="">Select a Subcategory</option>

            </select>
        </div> 
    </div>
</div> --}}


<!-- ...:::: Start Compare Section:::... -->
<div class="compare-section">
    <!-- Start Cart Table -->
    <div class="compare-table-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                   @foreach($products as $prod)
                <div class="col-6">
                    
                    <div class="table_desc">
                        <div class="table_page table-responsive compare-table">
                            <table class="table mb-0">
                               
                                <tbody>
                                
                                    <tr>
                                        
                                        <td class="first-column">Product</td>
                                        <td class="product-image-title">
                                            <a href="product-details-default.html" class="image"><img src="{{ asset('image/' .$prod->product_img) }}" alt="Compare Product"></a>


                                            <a href="shop-grid-sidebar-left.html" class="category">{{$prod->category}}</a>
                                            <a href="product-details-default.html" class="title">{{$prod->title}}</a>
                                        </td>
                                      
                                    </tr>
                                    <tr>
                                        <td class="first-column">Description</td>
                                        <td class="pro-desc">
                                            <p>{{$prod->description}}</p>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td class="first-column">Price</td>
                                        <td class="pro-price">{{$prod->offer_price}}</td>
                                       
                                    </tr>
                                  
                                    <tr>
                                        <td class="first-column">Stock</td>
                                        @if ($prod->status==1)
                                        <td class="pro-stock" style=" color: green">In stock</td>
                                        @else
                                        <td class="pro-stock" style="color: red">Out Of stock</td>
                                        @endif

                                      
                                    </tr>
                                    <tr>
                                       
                                        <td class="first-column">Add to cart</td>
                                        <td class="pro-addtocart"><button type="submit" class="btn btn-md btn-golden" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"  onclick="getProductData('{{$prod->id}}')" ><span>ADD TO CART</span>                               
                                    </tr>
                                    <tr>
                                        <td class="first-column">Delete</td>
                                        <td class="pro-remove"><a href="{{route('deleteFromCompare',$prod->id)}}"><i class="fa fa-trash-o  text-danger"></i></a></td>
                                       
                                    </tr>
                                    <tr>
                                        <td class="first-column">Rating</td>
                                        <td class="pro-ratting">
                                            <div class="product-review">
                                                <span class="review-fill"><i class="fa fa-star"></i></span>
                                                <span class="review-fill"><i class="fa fa-star"></i></span>
                                                <span class="review-fill"><i class="fa fa-star"></i></span>
                                                <span class="review-fill"><i class="fa fa-star"></i></span>
                                                <span class="review-empty"><i class="fa fa-star"></i></span>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                   
                                    
                                </tbody>
                                 
                            </table>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        
        </div>
    </div><!-- End Cart Table -->
</div>

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
    function getByProducts(product) {
        var url = "http://127.0.0.1:8000/sortbyproducts/" + encodeURIComponent(product);

        window.location.href = url;
    }

</script>
<script>
    var product = @json($products);
   
function getProductData(id) { 
        //    console.log(id);
           document.getElementById('prodId').value = id;
        var matchingProducts = product.map(function(prod) {
        if (prod.id == id) {
            document.getElementById('prodImg').src = "{{ asset('image/') }}" + '/' + prod.product_img;
        } 
            
        
        // let url = "{{ route('addtocart', ':id') }}";
        // url = url.replace(':id', id);
        // document.location.href = url;
     
           
    });

    }
</script>

@endsection