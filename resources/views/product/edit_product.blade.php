<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Shop :: Administrative Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/dropzone/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">

</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>					
            </ul>
            <div class="navbar-nav pl-2">
                <ol class="breadcrumb p-0 m-0 bg-white">
                    <li class="breadcrumb-item"><a href="categories.html">Categories</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ol>
            </div>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                        <img src="{{asset('admin/img/avatar5.png')}}" class='img-circle elevation-2' width="40" height="40" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                        <h4 class="h4 mb-0"><strong>Mohit Singh</strong></h4>
                        <div class="mb-3">example@example.com</div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-cog mr-2"></i> Settings								
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-lock mr-2"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
										  document.getElementById('logout-form').submit();">
							 {{ __('Logout') }}
						 </a>
						 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							 @csrf
						 </form>							
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{asset('admin/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

                <span class="brand-text font-weight-light">LARAVEL SHOP</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
             <nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a href="{{route('dashboard.index')}}" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Dashboard</p>
								</a>																
							</li>
							<li class="nav-item">
								<a href="{{route('category.index')}}" class="nav-link">
									<i class="nav-icon fas fa-file-alt"></i>
									<p>Category</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('subcategory.index')}}" class="nav-link">
									<i class="nav-icon fas fa-file-alt"></i>
									<p>Sub Category</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('brand.index')}}" class="nav-link">
									<svg class="h-6 nav-icon w-6 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
									  </svg>
									<p>Brands</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('product.create')}}" class="nav-link">
									<i class="nav-icon fas fa-tag"></i>
									<p>Products</p>
								</a>
							</li>
							
							<li class="nav-item">
								<a href="#" class="nav-link">
									<!-- <i class="nav-icon fas fa-tag"></i> -->
									<i class="fas fa-truck nav-icon"></i>
									<p>Shipping</p>
								</a>
							</li>							
							<li class="nav-item">
								<a href="{{route('showOrderToAdmin.index')}}" class="nav-link">
									<i class="nav-icon fas fa-shopping-bag"></i>
									<p>Orders</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('coupon.create')}}" class="nav-link">
									<i class="nav-icon  fa fa-percent" aria-hidden="true"></i>
									<p>Discount</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('users.index')}}" class="nav-link">
									<i class="nav-icon  fas fa-users"></i>
									<p>Users</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="pages.html" class="nav-link">
									<i class="nav-icon  far fa-file-alt"></i>
									<p>Pages</p>
								</a>
							</li>							
						</ul>
					</nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            {{-- <section class="content-header">
                @session
                @if (sucess)
                {{$message}}
            @endif

            @session --}}
            <div class="container-fluid my-2">
                <span class="text-light ">{{session('success')}}</span>
                
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create products</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{route('product.create')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            </section>

            {{-- @csrf
             @if ($message= Session::get('success'))
             <div class="alert alert-success alert-block">{{$message}}</div>

        @endif --}}

        <!-- Main content -->
        <section class="content">
            <span class="text-success">{{session('success')}}</span>
            <form action="{{route('product.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Default box -->
                <div class="container-fluid">
                    <div class="row">
                       
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" name="prodId" value="{{$products->id}}">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" class="form-control" value="{{$products->title}}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="title">Slug</label>
                                                <input type="text" name="slug" id="slug" readonly class="form-control" value="{{$products->slug}}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" cols="30" rows="10"  class="form-control" style="height: 200px"> {{$products->description}} </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="products_image">products Image</label><br>
                                        <input type="file"  class="border border-1 border-secondary"name="image" id="image" ><br>
                                        <img src="{{"/image/$products->product_img"}}" alt="" height="50px" width="50px">
                                    </div>  
                                    <div class="mb-3">
                                        <label for="image">Multiple Images</label><br>
                                        <input type="file"  class="border border-1 border-secondary" name="images[]" id="images" value="{{$products->images}}" multiple><br>
                                        @php
                                            $prodImages = json_decode($products->images);
                                        @endphp
                                        @foreach ($prodImages as $data )
                                         <img src="{{"/images/$data"}}" alt="" height="50px" width="50px">
                                        @endforeach
                                    </div>  
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Pricing</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="price">Price</label>
                                                <input type="text" name="price" id="price" class="form-control" value="{{$products->price}}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="price">Discount</label>
                                                <input type="text" name="discount" id="discount" class="form-control" value="{{$products->discount}}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="price">Offer Price</label>
                                                <input type="text" name="offerprice" id="offerPrice"  class="form-control" value="{{$products->offer_price}}" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="compare_price">Compare at Price</label>
                                                <input type="text" name="compare_price" id="compare_price" class="form-control" value="{{$products->compare_price}}">
                                                <p class="text-muted mt-3">
                                                    To show a reduced price, move the products’s original price into Compare at price. Enter a lower value into Price.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Inventory</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="sku">SKU (Stock Keeping Unit)</label>
                                                <input type="text" name="sku" id="sku" class="form-control"value="{{$products->sku}}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="barcode">Barcode</label>
                                                <input type="text" name="barcode" id="barcode" class="form-control"value="{{$products->barcode}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="hidden"  name="track_qty"  value="NO" >
                                                    <input class="custom-control-input" type="checkbox" id="track_qty" name="track_qty" value="{{$products->track_qty}}">
                                                    <label for="track_qty" class="custom-control-label">Track Quantity</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <input type="number" min="0" name="qty" id="qty" class="form-control" value="{{$products->qty}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">products status</h2>
                                    <div class="mb-3">
                                        <select name="status" id="status" class="form-control" value="{{$products->status}}">
                                            <option value="1">Active</option>
                                            <option value="2">Block</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div>

                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="h4  mb-3">products category</h2>
                                        <div class="mb-3">
                                            <label for="category">Category</label>
                                            <select name="category" id="category" class="form-control" required>
                                                <option>Select a Category</option>
                                                @foreach ($category as $data)     
                                                    <option value="{{ $data->id }}" {{ $data->id == $products->category_id ? 'selected' : '' }}>
														{{ $data->name }}
													</option>     
                                                @endforeach


                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="category">Sub category</label>
                                            <select name="sub_category" id="sub_category" class="form-control"  required>
                                                <option value="">Select a Subcategory</option>
                                                @foreach ($subcategory as $subcat)
                                                <option value="{{ $subcat->id }}" {{ $subcat->id == $products->subcat_id ? 'selected' : '' }}>
                                                    {{ $subcat->name }}
                                                </option>
        
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">products brand</h2>
                                        <div class="mb-3">
                                            <select name="brand" id="brand" class="form-control">
                                                @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}" {{ $brand->id == $products->brand_id ? 'selected' : '' }}>
                                                    {{ $brand->name }}
                                                </option>
        
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">New Arrival</h2>
                                        <div class="mb-3">
                                            <select name="new_arrival" id="new_arrival" class="form-control">
                                              <option value="1">Yes</option>
                                              <option value="2">NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Featured products</h2>
                                    <div class="mb-3">
                                        <select name="is_featured" id="is_featured" class="form-control" value="{{$products->is_featured}}" required>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>              
                  
                    </div>

                    <div class="pb-5 pt-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{route('product.create')}}" class="btn btn-outline-dark ml-3">Cancel</a>
                    </div>
                </div>
            </form>
            <!-- /.card -->
        </section>


        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">

        <strong>Copyright &copy; 2014-2022 AmazingShop All rights reserved.
    </footer>

    </div>
    <script>
        document.getElementById("title").addEventListener("input", function() {
            // Get the value from the first input box
            var nameValue = document.getElementById("title").value.toLowerCase();


            // Assign the value of the first input box to the second input box
            document.getElementById("slug").value = nameValue;
        });

    </script>

    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/js/demo.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('admin/js/demo.js')}}"></script>
    
    <script>
        document.getElementById("name").addEventListener("input", function() {
            // Get the value from the first input box
            var nameValue = document.getElementById("name").value.toLowerCase();
            document.getElementById("slug").value = nameValue;
        });

    </script>

<script>
   // Initialize Dropzon
        
        document.addEventListener('DOMContentLoaded', function() {
            let categorySelect = document.getElementById('category');
            let subcategorySelect = document.getElementById('sub_category');

            categorySelect.addEventListener('change', function() {
                let categoryId = this.value;

                fetch('/get-subcategories/' + categoryId)
                    .then(response => response.json())
                    .then(data => {
                        subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';
                        data.forEach(subcategory => {
                            let option = document.createElement('option');
                            option.value = subcategory.id;
                            option.textContent = subcategory.name;

                            subcategorySelect.appendChild(option);
                         


                        });
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
</script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let priceInput = document.getElementById('price');
            let discountInput = document.getElementById('discount');
            let offerPriceInput = document.getElementById('offerPrice');

            function calculateOfferPrice() {
                let price = parseFloat(priceInput.value);
                let discount = parseFloat(discountInput.value);

                if (!isNaN(price) && !isNaN(discount)) {
                    let offerPrice = price - (price * (discount / 100));
                    offerPriceInput.value = offerPrice.toFixed(2);
                } else {
                    offerPriceInput.value = '';
                }
            }

            priceInput.addEventListener('input', calculateOfferPrice);
            discountInput.addEventListener('input', calculateOfferPrice);
        });
    </script>
</body>
</html>



