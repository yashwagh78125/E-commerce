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
<div class="breadcrumb-section breadcrumb-bg-color--golden ">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Coupons</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                <li class="active" aria-current="page">Coupons</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>


.wrapper{

  height: 55vh;
}

.card{
    
    position: relative;
    background-color: #f79844;
    padding: 10px;
    width: 400px;
    border:none;
   

}

.content{

  z-index: 10;
}

.logo{

  margin-bottom: 50px;
}


.off{

      line-height: 0px;
}

.off h1{

  font-size: 80px;
}

.off span{

  margin-right: 111px;
}


.plus{
  font-size: 23px;
}

.code{

  text-transform: uppercase;
  padding: 10px;
  background-color: #fff;
  color: red;
  font-size: 20px;
}

.cross-bg{

  height: 100%;
  width: 100%;
  position: absolute;

  background-color: #fcf801;

  left: 0px;
    top: 0px;
    opacity: 0.4;
    clip-path: polygon(50% 0%, 90% 20%, 100% 60%, 75% 100%, 25% 100%, 0% 60%, 10% 20%);
    z-index:1;
}
.cardmargin{
    margin-top: 0px;
}
</style>
<div class="container">
    <div class="row">
        @foreach ($coupons as $coupon )
        <div class="col-lg-3">
                <div class="wrapper d-flex justify-content-center align-items-center"> 
            <div class="card  cardmargin" >
                <div class="cross-bg">  
                </div>
                <div class="content">
                <div class="logo text-right">
                <img src="https://i.imgur.com/w68MQc4.png" width="80">
                </div>
                <div class="text-center text-uppercase text-white off">
                <span>On</span>
                <h1 class="mt-1" style="font-size: 25px">{{$coupon->min_amount}}₹ Purchase</h1> 
                </div>
            <div class="text-center text-white">
                <span class="plus">Get</span>  
                </div>
                @if ($coupon->type=="amount")
                    
               <div class="text-center text-uppercase text-white">    
                <h3 class="m-0">{{$coupon->discount_amount}}₹ OFF</h3>       
                </div>
                <div class="px-5 mb-3">   
                <div class="code text-center mt-4">
                <span>Use code : {{$coupon->code}}</span>
                </div>
                </div>
                 @endif
                  @if ($coupon->type=="percent")
                    
               <div class="text-center text-uppercase text-white">    
                <h3 class="m-0">{{$coupon->discount_amount}}%OFF</h3>       
                </div>
                <div class="px-5 mb-3">   
                <div class="code text-center mt-4">
                <span>Use code : {{$coupon->code}}</span>
                </div>
                </div>
                 @endif
            </div>   
            </div> 
            </div>
        </div> 
         @endforeach 
    </div>
</div>


@endsection