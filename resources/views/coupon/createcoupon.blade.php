<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel Shop :: Administrative Panel</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/custom.css')}}">
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
						<li class="breadcrumb-item active">Create</li>
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
							<img src="img/avatar5.png" class='img-circle elevation-2' width="40" height="40" alt="">
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
								<a href="{{route('product.index')}}" class="nav-link">
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
				<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Create Coupon</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{route('coupon.create')}}" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<span style="color: green">{{session('success')}}</span>
					<div class="container-fluid">
						<div class="card">
							<div class="card-body">	
                                <form action="{{route('coupon.store')}}" method="POST">
                                         @csrf							
								<div class="row">
                                    
									<div class="col-lg-6">
										<div class="mb-3">
											<label for="name">Code</label>
											<input type="text" name="code" id="code" class="form-control" >	
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="slug">Name</label>
											<input type="text" name="name" id="name" class="form-control"  >
										</div>
									</div>	
                                    <div class="col-md-6">
										<div class="mb-3">
											<label for="slug">Max Uses</label>
											<input type="text" name="max_uses" id="max_uses" class="form-control" >
										</div>
									</div>	
                                    <div class="col-md-6">
										<div class="mb-3">
											<label for="slug">Max Uses User</label>
											<input type="text" name="max_uses_user" id="max_uses_user" class="form-control"  >
										</div>
									</div>	
									<div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status">Type</label>
                                            <select name="type" id="type" class="form-control">
                                            <option value="percent">Percent</option> 
											 <option value="amount">Amount</option> 
                                            </select>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
										<div class="mb-3">
											<label for="slug">Discount Amount/Percent</label>
											<input type="text" name="discount_amount" id="discount_amount" class="form-control" >
										</div>
									</div>	
                                     <div class="col-md-6">
										<div class="mb-3">
											<label for="slug">Minimum Amount/Percent</label>
											<input type="text" name="minimum_amount" id="minimum_amount" class="form-control" >
										</div>
									</div>	
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                          <option value="1">Active</option>
                                          <option value="2">Block</option>
                                        </select>
                                    </div>
                                    </div>
                                     <div class="col-md-6">
										<div class="mb-3">
											<label for="slug">Expire At </label>
											<input type="date" name="starts_at" id="starts_at" class="form-control" >
										</div>
									</div>	
                                     <div class="col-md-6">
										<div class="mb-3">
											<label for="slug">Expire At </label>
											<input type="date" name="expire_at" id="expire_at" class="form-control" >
										</div>
									</div>	
                                     <div class="col-md-6">
										<div class="mb-3">
											<label for="slug">Discription</label>
											<textarea name="Discription" id="Discription" class="form-control" ></textarea>
										</div>
									</div>	
                                    @error('success')
                                    <div>
                                        <span>{{$message}}</span>
                                    <div>       
                                    @enderror
									</div>	
                                    <div class="col-md-12">
										<div class="mb-3">
											<button type="submit" class="btn btn-primary">Create</button>
							                <a href="brands.html" class="btn btn-outline-dark ml-3">Cancel</a>
										</div>
									</div>						
								</div>
							</div>	
                                </form>						
						</div>
					</div>
					<!-- /.card -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<footer class="main-footer">
				
				<strong>Copyright &copy; 2014-2022 AmazingShop All rights reservedy.
			</footer>
			
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		
		<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- AdminLTE App -->
		<script src="{{asset('admin/js/adminlte.min.js')}}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{asset('admin/js/demo.js')}}"></script>
	</body>
</html>