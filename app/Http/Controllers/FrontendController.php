<?php

namespace App\Http\Controllers;

use App\Frontend;
use Illuminate\Http\Request;
use Auth;
class FrontendController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fronthfs = Frontend::all();
      return response()->json(['fronthfsList'=>$fronthfs],200);
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
            'headtext' => 'required',
            'foottext' => 'required',
            'slogan' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'link' => 'required',
            // 'file' => 'required|dimensions:max_width=250,max_height=500|mimes:jpg,jpeg,docs,pdf,zip|max:2048:size:300',
             'logo' => 'required|max:2048',
             'mainlogo' => 'required|max:2048',
            'status'=>'required',
        ]);

        $fronthf = new Frontend();
        $fronthf->headtext = $request->headtext;
        $fronthf->foottext = $request->foottext;
        $fronthf->link = $request->link;
        $fronthf->slogan = $request->slogan;
        $fronthf->email = $request->email;
        $fronthf->mobile = $request->mobile;
        $fronthf->status = $request->status;
        $fronthf->created_by = Auth::user()->id;

        if ($request->file('logo')){
          $file = $request->file('logo');
            // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('Ymd').$file->getClientOriginalName();
          $file->move(public_path('upload/logo'), $filename);
          $fronthf['logo'] = $filename;
        }

        if ($request->file('mainlogo')){
          $file = $request->file('mainlogo');
            // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('Ymd').$file->getClientOriginalName();
          $file->move(public_path('upload/mainlogo'), $filename);
          $fronthf['mainlogo'] = $filename;
        }
        $fronthf->save();
        return ['status'=>'success'];
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Frontend $frontend)
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
        $fronthfById = Frontend::find($id);
        return response()->json(['viewData'=>$fronthfById],200);
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
            'headtext' => 'required',
            'foottext' => 'required',
            'slogan' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'link' => 'required',
            // 'file' => 'required|dimensions:max_width=250,max_height=500|mimes:jpg,jpeg,docs,pdf,zip|max:2048:size:300',
             'logo' => 'required|max:2048',
             'mainlogo' => 'required|max:2048',
            'status'=>'required',
        ]);
        $fronthf = Frontend::find($id);
        $fronthf->headtext = $request->headtext;
        $fronthf->foottext = $request->foottext;
        $fronthf->link = $request->link;
        $fronthf->slogan = $request->slogan;
        $fronthf->email = $request->email;
        $fronthf->mobile = $request->mobile;
        $fronthf->status = $request->status;
        $fronthf->updated_by = Auth::user()->id;

        if ($request->file('logo')){
          $file = $request->file('logo');
            @unlink(public_path('upload/logo/'.$data->image));
          $filename =date('Ymd').$file->getClientOriginalName();
          $file->move(public_path('upload/logo'), $filename);
          $fronthf['logo'] = $filename;
        }

        if ($request->file('mainlogo')){
          $file = $request->file('mainlogo');
            @unlink(public_path('upload/mainlogo/'.$data->image));
          $filename =date('Ymd').$file->getClientOriginalName();
          $file->move(public_path('upload/mainlogo'), $filename);
          $fronthf['mainlogo'] = $filename;
        }
        $fronthf->save();
        return ['status'=>'success'];
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Frontend::destroy($id);
        return ['status'=>'success'];
    }

     // public function slug_generator($string){
     //        $string = str_replace(' ', '-', $string);
     //        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
     //        return strtolower(preg_replace('/-+/', '-', $string));
     //      }

     //    public function getSubcategoryByCategoryId($id){

     //        $subCategoryList = SubCategory::where('category_id',$id)->get();
     //    return response()->json(['subCategoryList'=>$subCategoryList],200);
     //    }
}
