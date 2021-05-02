<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use Auth; 
use App\Category;
use App\SubCategory;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::with('category')->with('subcategory')->orderBy('id','DESC')->get();
      return response()->json(['postsList'=>$posts],200);
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
            'category_id' => 'required',
            // 'sub_category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'tag' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
             // 'image' => 'required|max:2048',
             'status'=>'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->video_link = $request->video_link;
        $post->link = $request->link;
        $post->featured = $request->featured;
        $post->tag = $request->tag;
        $post->sub_category_id = $request->sub_category_id;
        $post->category_id = $request->category_id;
        $post->status = $request->status;
        $post->slug = $this->slug_generator($request->title);
        $post->created_by = Auth::user()->id;
        if ($request->file('file')){
          $file = $request->file('file');
            // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('Ymd').$file->getClientOriginalName();
          $file->move(public_path('upload/postfile'), $filename);
          $post['file'] = $filename;
}
          if ($request->file('image')){
          $file = $request->file('image');
            // @unlink(public_path('upload/logoimage/'.$data->image));
          $filename =date('Ymd').$file->getClientOriginalName();
          $file->move(public_path('upload/postimage'), $filename);
          $post['image'] = $filename;
        }

        $post->save();
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
        $postById = Post::find($id);
        return response()->json(['viewData'=>$postById],200);
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
        $post = post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->video_link = $request->video_link;
        $post->link = $request->link;
        $post->featured = $request->featured;
        $post->tag = $request->tag;
        $post->sub_category_id = $request->sub_category_id;
        $post->category_id = $request->category_id;
        $post->status = $request->status;
        $post->slug = $this->slug_generator($request->title);
        $post->updated_by = Auth::user()->id;

        if ($request->file('file')){
          $file = $request->file('file');
            @unlink(public_path('upload/postfile/'.$data->image));
          $filename =date('Ymd').$file->getClientOriginalName();
          $file->move(public_path('upload/postfile'), $filename);
          $post['file'] = $filename;
        }
         if ($request->file('image')){
          $file = $request->file('image');
            @unlink(public_path('upload/postimage/'.$data->image));
          $filename =date('Ymd').$file->getClientOriginalName();
          $file->move(public_path('upload/postimage'), $filename);
          $post['image'] = $filename;
        }
        $post->save();
        return ['status'=>'success'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post, $id)
    {
        Post::destroy($id);
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
