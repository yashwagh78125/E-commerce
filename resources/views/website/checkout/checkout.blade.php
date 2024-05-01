@extends('website.layouts.main')
 @section('content')
 @if ($message= Session::get('error'))
 <div class="alert alert-success alert-block">
     <h4>{{$message}}</h4>
 </div>
 @endif
@if ($message= Session::get('success'))
 <div class="alert alert-success alert-block">
     <h4>{{$message}}</h4>
 </div>
 @endif

<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Checkout</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                <li class="active" aria-current="page">Checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="checkout-section">
        <div class="container">
            <div class="row">
                <!-- User Quick Action Form -->
                <div class="col-12">
                   
                    <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="200">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon"
                                aria-expanded="true">Click here to enter your code</a>

                        </h3>
                        <div id="checkout_coupon" class="collapse checkout_coupon" data-parent="#checkout_coupon">
                            <div class="checkout_info">
                              <form method="POST" action="{{route('order.getCouponCode')}}">
                                @csrf
                                    <input placeholder="Coupon code" type="text" name="code">
                                    <button class="btn btn-md btn-black-default-hover" type="submit" >Apply
                                        coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Quick Action Form -->
            </div>
            <!-- Start User Details Checkout Form -->
            <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="{{route('bill.store')}}"  method="POST" id="myForm">
                            @csrf
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>First Name <span>*</span></label>
                                        <input type="text" name='fname' required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>Last Name <span>*</span></label>
                                        <input type="text" name="lname" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>Company Name</label>
                                        <input type="text" name='company' required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label for="country">country <span>*</span></label>
                                        <select class="country_option nice-select wide" name="country" id="country" required>
                                            <option value="India">India</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>Street address <span>*</span></label>
                                        <input placeholder="House number and street name" type="text" name="street" required> 
                                         <input type="text" name="order_id" value="{{$order->id}}" required hidden>
                                    </div>
                                </div>
                
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>Town / City <span>*</span></label>
                                        <input type="text" name="city" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>State / County <span>*</span></label>
                                        <input type="text" name="state" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>Phone<span>*</span></label>
                                        <input type="text" name="mobno" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label> Email Address <span>*</span></label>
                                        <input type="email" name="email" required >
                                    </div>
                                </div>
                             
                                <div class="col-12 mt-3">
                                    <div class="order-notes">
                                        <label for="order_note">Order Notes</label>
                                        <textarea id="order_note"
                                            placeholder="Notes about your order, e.g. special notes for delivery." name="order_note"></textarea>
                                    </div>
                                      <div class="order_button pt-3">
                                    
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orderitem as $item )  
                                        <tr>
                                            <td>
                                            @foreach ($products as $product)
                                                @if ($item->product_id == $product->id)
                                                    <strong>{{ $product->title }}</strong> × {{ $item->qty }}
                                                @endif
                                            @endforeach
                                     <td>₹{{$item->subtotal}}</td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                    <tfoot>                                    
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>₹{{$order->total}}</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td><strong>₹{{$order->shipping}}</strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>₹{{$order->order_total}}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment_method">
                                <div class="panel-default">
                                    <label class="checkbox-default" for="currencyCod" data-bs-toggle="collapse"
                                        data-bs-target="#methodCod">
                                        <input type="checkbox" id="currencyCod">
                                        <span>Cash on Delivery</span>
                                    </label>

                                    <div id="methodCod" class="collapse" data-parent="#methodCod">
                                        <div class="card-body1">
                                            <p>1.Before Proceed to pay fill the Billing Details</p>
                                            <p>2.Please send a check to Store Name, Store Street, Store Town, Store State
                                                / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-default">
                                    <label class="checkbox-default" for="currencyPaypal" data-bs-toggle="collapse"
                                        data-bs-target="#methodPaypal">
                                        <input type="checkbox" id="currencyPaypal">
                                        <span>PayPal</span>
                                    </label>
                                    <div id="methodPaypal" class="collapse " data-parent="#methodPaypal">
                                        <div class="card-body1">
                                            <p>1.Before Proceed to pay fill the Billing Details</p>
                                            <p>2.Pay via PayPal; you can pay with your credit card if you don’t have a
                                                PayPal account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="order_button pt-3">
                                    <button class="btn btn-md btn-black-default-hover" type="submit" id="submitButton">Proceed to
                                        Pay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- Start User Details Checkout Form -->
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    var submitButton = document.getElementById("submitButton");
    var form = document.getElementById("myForm");

    submitButton.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default button behavior

        // Manually validate the form
        if (form.checkValidity()) {
            // If form is valid, submit it
            form.submit();
        } else {
            // If form is not valid, display error messages or handle validation
            // For example, you can display an alert or add custom error messages
            // This example shows an alert, but you can customize it as needed
            alert("Please fill out all required fields.");
        }
    });
});

    </script>



 @endsection
 