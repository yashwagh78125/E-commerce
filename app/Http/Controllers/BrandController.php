<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function index()
    {

        $brands = Brand::paginate(10);
        // return $allcategory;
        return view('brands.brands', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('brands.createbrands');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Brand $brand)
    {

        //  return $request->all();
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "slug" => "required|unique:categories"
        ]);
        // return "test";
        if ($validator->passes()) {
            $brand->name = $request->name;
            $brand->slug = $request->slug;
            $brand->status = $request->status;
            $brand->save();
            session()->flash('success', "Brand added Successfully");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $brands = Brand::all();
        // return $allcategory;
        return view('brands.brands', compact('brands'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand, $id)
    {
        $brand = Brand::find($id);
        return view('brands.edit_brand', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required'
        ]);
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->slug = $request->slug;
        $brand->status = $request->status;
        $brand->update();
        Session()->flash('success', 'Category Updated Succesfully !!!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand, $id)
    {
        $brand = Brand::where('id', $id);
        $brand->delete();
        Session()->flush('destroy', "Category Deleted Successfully");
        return redirect()->back();
    }
}
