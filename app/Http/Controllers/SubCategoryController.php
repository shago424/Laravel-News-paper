<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Auth; 
use App\Category;
use App\SubCategory;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $subcategories = SubCategory::with('category')->get();
      return response()->json(['subcategoriesList'=>$subcategories],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories',
            'category_id' => 'required',
            'status' => 'required',
        ]);

        $subcategory = new SubCategory();
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->status = $request->status;
        $subcategory->slug = $this->slug_generator($request->name);
        $subcategory->created_by = Auth::user()->id;
        $subcategory->save();
        return ['status'=>'success'];
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategoryById = SubCategory::find($id);
        return response()->json(['viewData'=>$subcategoryById],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request  $request , $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required',
            'status' => 'required',
        ]);

        $subcategory =  SubCategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->status = $request->status;
        $subcategory->slug = $this->slug_generator($request->name);
        $subcategory->updated_by = Auth::user()->id;
        $subcategory->save();
        return ['status'=>'success'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory, $id)
    {
        SubCategory::destroy($id);
        return ['status'=>'success'];
    }

     public function slug_generator($string){
            $string = str_replace(' ', '-', $string);
            $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
            return strtolower(preg_replace('/-+/', '-', $string));
          }
}
