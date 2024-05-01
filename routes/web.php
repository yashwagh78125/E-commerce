<?php

use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductDetail;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProductFilterController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\OrderController;
/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/adminsignin', function () {
    return view('adminsignin');
});
// Route::get('/',[HomeController::class,'index'])->name('home.index');
//add to cart
Route::post('addtocart', [HomeController::class, 'addCart'])->name('addtocart');
Route::get('showcart', [HomeController::class, 'showcart'])->name('showcart');
Route::get('deletefromcart/{id}', [HomeController::class, 'deletefromcart'])->name('deletefromcart');
Route::post('updateCartTable', [HomeController::class, 'updateFromCartTable'])->name('updateFromCartTable');

//deleteFromWishList_AddCart_btn

Route::get('addtowishlist/{id}', [WishlistController::class, 'addWishlist'])->name('addWishlist');
Route::get('showwishlist', [WishlistController::class, 'showWishlist'])->name('showWishlist');
Route::post('delete_product_AddCart_btn', [WishlistController::class, 'addanddestroy'])->name('deleteFromWishListWithAddCart1');
Route::get('delete_from_wishlist/{id}', [WishlistController::class, 'deleteFromWishlist'])->name('deleteFromWishList');


//description page
Route::post('updatetcart', [HomeController::class, 'updatetocart'])->name('updatecart');
Route::get('productdetails/{id}', [ProductDetail::class, 'index'])->name('productdetail.index');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/cartmodel/{id}', [HomeController::class, 'cartmodel'])->name('product.cartmodel');



//filterpage
Route::get('/filterpage/{id?}', [ProductFilterController::class, 'getFilter'])->name('filterpage.filter');
Route::get('/sortby/{id?}', [ProductFilterController::class, 'sortBy'])->name('filterpage.sortBy');
Route::get('/sortbyBrand/{id?}', [ProductFilterController::class, 'sortByBrand'])->name('filterpage.sortByBrand');
Route::get('/sortbyPrice/{id?}', [ProductFilterController::class, 'sortByPrice'])->name('filterpage.sortByPrice');
Route::get('/sortbyDiscount/{id?}', [ProductFilterController::class, 'sortByDiscount'])->name('filterpage.sortByDiscount');


//comparepage
Route::get('comparepage/{id}', [CompareController::class, 'index'])->name('compare.index');
Route::get('addtocompare/{id}', [CompareController::class, 'AddToCompare'])->name('AddToCompare');
Route::get('showCompare', [CompareController::class, 'showCompare'])->name('showCompareProduct');
Route::get('deleteFromCompare/{id}', [CompareController::class, 'destroy'])->name('deleteFromCompare');

//store order and order_item

Route::get('/storeorder', [OrderItemsController::class, 'store'])->name('order.store');
Route::get('/showcheckout', [OrderItemsController::class, 'show'])->name('order.show');
Route::post('store_billing_deatials', [OrderItemsController::class, 'storeBillingDetails'])->name('bill.store');
Route::post('couponcode', [OrderItemsController::class, 'getCouponCode'])->name('order.getCouponCode');


Route::get('/myaccount', [MyAccountController::class, 'index'])->name('myaccount.index');
Route::get('/orderdetail/{id}', [MyAccountController::class, 'getOrderDetails'])->name('myaccount.getorderdetails');




Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/ragistration', [AdminController::class, 'index'])->name('ragistration.index');
Route::post('/admin1', [AdminController::class, 'store'])->name('ragistration.store');
Route::post('/login', [AdminController::class, 'auth'])->name('login.auth');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/new-category', [CategoryController::class, 'create'])->name('category.create');
Route::post('/addcategory', [CategoryController::class, 'store'])->name('category.store');
Route::get('/allcategory', [CategoryController::class, 'show'])->name('category.show');
Route::get('/editcategory/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/updatecategory/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/deletecategory/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('subcategory.index');
Route::get('/new-subcategory1', [SubcategoryController::class, 'create'])->name('subcategory.create');
Route::post('/addsubcategory1', [SubcategoryController::class, 'store'])->name('subcategory.store');
Route::get('/allcategory/allsubcategory', [SubcategoryController::class, 'show'])->name('subcategory.show');
Route::get('/editsubcategory/{id}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
Route::post('/updatesubcategory/{id}', [SubcategoryController::class, 'update'])->name('subcategory.update');
Route::get('/deletecategory/deletecategory/{id}', [SubcategoryController::class, 'destroy'])->name('subcategory.destroy');

Route::get('/brands', [BrandController::class, 'index'])->name('brand.index');
Route::get('/new-brand', [BrandController::class, 'create'])->name('brand.create');
Route::post('/addbrand', [BrandController::class, 'store'])->name('brand.store');
Route::get('/allbrand', [BrandController::class, 'show'])->name('brand.show');
Route::get('/deletebrand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
Route::get('/editbrand/{id}', [BrandController::class, 'edit'])->name('brand.edit');
Route::post('/updatebrand/{id}', [BrandController::class, 'update'])->name('brand.update');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/get-subcategories/{categoryId}', function ($categoryId) {
    $subcategories = Subcategory::where('cat_id', $categoryId)->get();
    return response()->json($subcategories);
});
Route::get('/new-product', [ProductController::class, 'create'])->name('product.create');
Route::post('/addproduct', [ProductController::class, 'store'])->name('product.store');
Route::get('/deleteproduct/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/editproduct/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/updateproduct', [ProductController::class, 'update'])->name('product.update');
Route::get('/showcoupons', [ProductController::class, 'ShowCoupons'])->name('product.show');



//coupon
Route::get('/new-coupon', [CouponController::class, 'create'])->name('coupon.create');
Route::get('/addcoupon', [CouponController::class, 'index'])->name('coupon.index');
Route::post('/storecoupon', [CouponController::class, 'store'])->name('coupon.store');
Route::get('/editcoupon/{id}', [CouponController::class, 'edit'])->name('coupon.edit');
Route::get('/deletecoupon/{id}', [CouponController::class, 'destroy'])->name('coupon.destroy');
Route::post('/updatecoupon/{id}', [CouponController::class, 'update'])->name('coupon.update');

//orders
Route::get('allorders', [OrderController::class, 'index'])->name('showOrderToAdmin.index');
Route::get('orderItems/{id}', [OrderController::class, 'show'])->name('showOrderItems.show');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::get('/new-brand',[UserController::class,'create'])->name('brand.create');
// Route::post('/addbrand',[UserController::class,'store'])->name('brand.store');
// Route::get('/allbrand',[UserController::class,'show'])->name('brand.show');
Route::get('/deleteuser/{id}', [UserController::class, 'destroy'])->name('users.destroy');
// Route::get('/editbrand/{id}',[UserController::class,'edit'])->name('brand.edit');
// Route::post('/updatebrand/{id}',[UserController::class,'update'])->name('brand.update');
// --------------------------------//







Route::get('/clean-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:cache');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('event:cache');
    $exitCode = Artisan::call('event:clear');
    $exitCode = Artisan::call('optimize');
    return '<h1>Cache facade value cleared</h1>';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
