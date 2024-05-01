@extends('website.layouts.main')
@section('content')
<!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">My Account</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">My Account</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->
<!-- ...:::: Start Account Dashboard Section:::... -->
    <div class="account-dashboard">
        <div class="container">
            <div class="row">                                  
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Order Item</th>
                                            <th>Title</th>                                                 <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                      
                                         @foreach ($orderItems as $Items)
                                        
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                             <td>{{$Items->products[0]->title}}</td>
                                            <td><span class="success">{{$Items->price}}</span></td>
                                            <td>{{$Items->qty}}</td>
                                              <td>{{$Items->subtotal}}</td>
                                               
                                        </tr>
                                        @endforeach
                                       
                                        
                                        
                                    </tbody>
                                </table>
                            </div>    
            </div>
        </div>
    </div> <!-- ...:::: End Account Dashboard Section:::... -->


@endsection