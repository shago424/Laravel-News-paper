<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use App\User;
use Auth; 
use App\Category;
use App\SubCategory;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contents = Content::with('category')->with('subcategory')->get();
      return response()->json(['contentsList'=>$contents],200);
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
            'video_link' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            // 'file' => 'required|dimensions:max_width=250,max_height=500|mimes:jpg,jpeg,docs,pdf,zip|max:2048:size:300',
             'file' => 'required|max:2048',
            'status'=>'required',
        ]);

        $content = new Content();
        $content->title = $request->title;
        $content->description = $request->description;
        $content->video_link = $request->video_link;
        $content->sub_category_id = $request->sub_category_id;
        $content->category_id = $request->category_id;
        $content->status = $request->status;
        $content->slug = $this->slug_generator($request->title);
        $content->created_by = Auth::user()->id;
        if ($request->file('file')){
          $file = $request->file('file');
            // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('Ymd').$file->getClientOriginalName();
          $file->move(public_path('upload/contentimage'), $filename);
          $content['file'] = $filename;
        }
        $content->save();
        return ['status'=>'success'];
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
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
        $contentById = Content::find($id);
        return response()->json(['viewData'=>$contentById],200);
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
            'video_link' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'status'=>'required',
             'file' => 'max:2048',
        ]);
        $content = Content::find($id);
        $content->title = $request->title;
        $content->description = $request->description;
        $content->video_link = $request->video_link;
        $content->sub_category_id = $request->sub_category_id;
        $content->category_id = $request->category_id;
        $content->status = $request->status;
        $content->slug = $this->slug_generator($request->name);
        $content->updated_by = Auth::user()->id;
        if ($request->file('file')){
          $file = $request->file('file');
            @unlink(public_path('upload/contentimage/'.$data->image));
          $filename =date('Ymd').$file->getClientOriginalName();
          $file->move(public_path('upload/contentimage'), $filename);
          $content['file'] = $filename;
        }
        $content->save();
        return ['status'=>'success'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(content $content, $id)
    {
        Content::destroy($id);
        return ['status'=>'success'];
    }

     public function slug_generator($string){
            $string = str_replace(' ', '-', $string);
            $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
            return strtolower(preg_replace('/-+/', '-', $string));
          }

        public function getSubcategoryByCategoryId($id){

            $subCategoryList = SubCategory::where('category_id',$id)->get();
        return response()->json(['subCategoryList'=>$subCategoryList],200);
        }


}
