<?php
namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Category;
class SubcategoryController extends Controller
{
    public function index()
    {
           
        $suballcategory=Subcategory::select('subcategories.*','categories.name as catName')->latest('subcategories.id')->
        leftjoin('categories','categories.id','subcategories.id')->paginate(10);

        $subcategory = Subcategory::with('category')->get();
        $category = $subcategory->map(function($cat){
            return $cat->category;
        });
        return view('subcategory.subcategories',compact('suballcategory'));
    }

    public function create()
    {
        $category=Category::get();
        return view('subcategory.createsubcategory',compact('category'));
    }
    

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(Request $request)
    {

        $categorys=new Subcategory;
        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:subcategories',
            'status'=>'required',
            'category'=>'required'
          ]);         
            $categorys->name=$request->name;
            $categorys->slug=$request->slug;
            $categorys->status=$request->status;
            $categorys->cat_id=$request->category;
            $categorys->save();
           session()->flash('success','SubCategory added Successfully');
           return redirect()->back();
          }
         

    
       
          

    // }

    // /**
    //  * Display the specified resource.
    //  */
    public function show(Subcategory $suballcategory)
    {
    //   $suballcategory=Subcategory::select('subcategories*','categories.name as categoryName')->latest('subcategories.id')->
    //   leftjoin('categories','categories.id','subcategories.id')->paginate(10);
    //   // return $allcategory;
      $suballcategory=Subcategory::all();
      return view('subcategory.subcategories',compact('suballcategory'));

    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(Subcategory $category,$id)
    {
                    $subcategory = Subcategory::find($id);

            if (!$subcategory) {
                return redirect()->route('subcategory.index')->with('error', 'Subcategory not found.');
            }

            $categories = Category::orderBy('name', 'ASC')->get();
            $data['subcategory'] = $subcategory;
            $data['categories'] = $categories;
            return view('subcategory.edit_subcategory', $data);
     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'category'=>'required',
            'status'=>'required'
        ]);
        $subcategory=Subcategory::find($id);
        $subcategory->name=$request->name;
        $subcategory->slug=$request->slug;
        $subcategory->status=$request->status;
        $subcategory->cat_id=$request->category;
        $subcategory->update();
        Session()->flash('success','Category Updated Succesfully !!!');
        return redirect()->back();
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(Subcategory $subcategory,$id)
    {
        $subcategory=Subcategory::where('id',$id);
        $subcategory->delete();
        Session()->flush('destroy',"Category Deleted Successfully");
        return redirect()->back();
    }
}
