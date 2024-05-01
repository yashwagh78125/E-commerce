<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Brand;

class ProductFilterController extends Controller
{

    public function getFilter($id = null)
    {
        $products = Product::get();
        $productData = Product::paginate(9);
        $category = Category::get();
        $subcategory = Subcategory::get();
        $brands = Brand::get();
        $product = Product::where('category_id', $id)->get();

        if ($id) {
            // return $id;
            $products = Product::where('subcat_id', $id)->get();
        } else {
            $products = Product::get();
        }

        return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));
        //
    }


    public function sortBy($id)
    {
        $productData = Product::paginate(9);
        $category = Category::get();
        $subcategory = Subcategory::get();
        $brands = Brand::get();
        // $no = (int)$id;
        switch ($id) {

            case 1:
                $products = Product::orderBy('offer_price')->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));
                break;
            case 2:
                $products = Product::orderByDesc('offer_price')->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));
                break;
            case 3:
                $products = Product::orderBy('title')->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));

                break;
            case 4:
                $products = Product::orderByDesc('title')->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));

                break;
            default:
                break;
        }
    }


    public function sortByBrand($id = null)
    {

        $productData = Product::paginate(9);
        $category = Category::get();
        $subcategory = Subcategory::get();
        $brands = Brand::get();
        if ($id) {
            $products = Product::where('brand_id', $id)->get();
        } else {
            $products = Product::get();
        }


        return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));
    }

    public function sortByPrice($id = null)
    {

        $productData = Product::paginate(9);
        $category = Category::get();
        $subcategory = Subcategory::get();
        $brands = Brand::get();
        switch ($id) {

            case 1:
                $products = Product::whereBetween('offer_price', [1, 999])->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));
                break;
            case 2:
                $products = Product::whereBetween('offer_price', [1000, 1999])->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));
                break;
            case 3:
                $products = Product::whereBetween('offer_price', [2000, 3999])->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));

                break;
            case 4:
                $products = Product::whereBetween('offer_price', [4000, 100000])->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));

                break;
            default:
                break;
        }
    }



    public function sortByDiscount($id = null)
    {

        $productData = Product::paginate(9);
        $category = Category::get();
        $subcategory = Subcategory::get();
        $brands = Brand::get();
        switch ($id) {

            case 1:
                $products = Product::whereBetween('discount', [50, 100])->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));
                break;
            case 2:
                $products = Product::whereBetween('discount', [40, 100])->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));
                break;
            case 3:
                $products = Product::whereBetween('discount', [30, 100])->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));

                break;
            case 4:
                $products = Product::whereBetween('discount', [20, 100])->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));

                break;
            case 5:
                $products = Product::whereBetween('discount', [10, 100])->get();
                return view('website.filterpage.filterpage', compact('products', 'productData', 'category', 'subcategory', 'brands'));

                break;
            default:
                break;
        }
    }
}
