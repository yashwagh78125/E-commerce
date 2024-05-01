<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           
        $allcategory=Category::paginate(10);
        // return $allcategory;
        return view('category.categories',compact('allcategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('category.createcategory');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Category $category)
    {
       
        // return $request->all();
          $validator=Validator::make($request->all(),[
            "name"=>"required",
            "slug"=>"required|unique:categories"
          ]); 
         // return "test";
          if($validator->passes())
          {
            $category->name=$request->name;
            $category->slug=$request->slug;
            $category->status=$request->status;
            if($request->hasFile('image'))
            {
                $imageName=time().'.'.$request->image->extension();
                $request->image->move('catimage',$imageName);
            }else{
                $imageName='';
            }
            $category->image=$imageName; 
        
        }
            $category->save();
            session()->flash('success',"Category added Successfully");
            return redirect()->back();    

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       $allcategory=Category::all();
       // return $allcategory;
       return view('category.categories',compact('allcategory'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category,$id)
    {
        $category=Category::find($id);
        return view('category.edit_category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
     
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'status'=>'required'
        ]);
        $category=Category::find($id);
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->status=$request->status;
     
        if($request->hasFile('image'))
        {
         
            $imageName=time().'.'.$request->image->extension();
            $request->image->move('catimage',$imageName);
            $filePath=public_path('catimage/'.$category->image);

            if(is_file($filePath))
            {
                unlink($filePath);
            }
            $category->image=$imageName;
     
        

        }
        //return $category;
       
        $category->update();
        Session()->flash('success','Category Updated Succesfully !!!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category,$id)
    {
        $category=Category::where('id',$id);
        $category->delete();
        Session()->flush('destroy',"Category Deleted Successfully");
        return redirect()->back();
    }
}
