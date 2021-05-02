<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Post;
use App\Category;
use App\SubCateGory;
use App\Frontend;
class PublicBlogController extends Controller
{


    public function index()
    {

      $data['sliders'] = Post::with('user','category','subcategory')->where('featured','slider')->orderBy('id','DESC')->limit(5)->get();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->get();
      $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
        $data['schools'] = Post::with('user','category','subcategory')->where('category_id','1')->orderBy('id','DESC')->limit(4)->get();
      $data['nus'] = Post::with('user','category','subcategory')->where('category_id','2')->orderBy('id','DESC')->limit(4)->get();
      $data['pus'] = Post::with('user','category','subcategory')->where('category_id','3')->orderBy('id','DESC')->limit(4)->get();
      $data['admissions'] = Post::with('user','category','subcategory')->where('category_id','43')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('category_id','44')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('category_id','45')->orderBy('id','DESC')->limit(3)->get();
      $data['gjs'] = Post::with('user','category','subcategory')->where('category_id','39')->orderBy('id','DESC')->limit(4)->get();
      $data['gjsingle'] = Post::with('user','category','subcategory')->where('category_id','39')->orderBy('id','DESC')->first();
       $data['pjs'] = Post::with('user','category','subcategory')->where('category_id','40')->orderBy('id','DESC')->limit(4)->get();
       $data['sports'] = Post::with('user','category','subcategory')->where('category_id','48')->orderBy('id','DESC')->limit(4)->get();
       $data['scholars'] = Post::with('user','category','subcategory')->where('category_id','46')->orderBy('id','DESC')->limit(3)->get();
      $data['stipends'] = Post::with('user','category','subcategory')->where('category_id','47')->orderBy('id','DESC')->limit(3)->get();
      $data['moneys'] = Post::with('user','category','subcategory')->where('category_id','49')->orderBy('id','DESC')->limit(3)->get();
       $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::limit(15);
      return view('public.partials.home',$data);
    }

    public function singlepostById($slug)
    {

      $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->limit(12)->get();
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->limit(12)->get();
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::limit(15);

      return view('public.single_page.single-post',$data);
    }

     public function latestPost()
    {
      $latestposts = Post::with('user','category','subcategory')->orderBy('id','DESC')->get();
      return response()->json(['latestPosts'=>$latestposts],200);
    }

     public function argentPost()
    {
      $argentposts = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->get();
      return response()->json(['argentPosts'=>$argentposts],200);
    }

     public function sliderPost()
    {
      $sliderposts = Post::with('user','category','subcategory')->where('featured','slider')->orderBy('id','DESC')->get();
      return response()->json(['sliderPosts'=>$sliderposts],200);
    }

     public function nuPost()
    {
      $nuposts = Post::with('user','category','subcategory')->where('category_id','2')->orderBy('id','DESC')->get();
      return response()->json(['nuPosts'=>$nuposts],200);
    }

     public function puPost()
    {
      $puposts = Post::with('user','category','subcategory')->where('category_id','3')->orderBy('id','DESC')->get();
      return response()->json(['puPosts'=>$puposts],200);
    }

      public function sportsPost()
    {
      $sportsposts = Post::with('user','category','subcategory')->where('category_id','48')->orderBy('id','DESC')->get();
      return response()->json(['sportsPosts'=>$sportsposts],200);
    }

     public function gjPost()
    {
      $gjposts = Post::with('user','category','subcategory')->where('category_id','48')->orderBy('id','DESC')->get();
      return response()->json(['gjPosts'=>$gjposts],200);
    }

     public function pjPost()
    {
      $pjposts = Post::with('user','category','subcategory')->where('category_id','48')->orderBy('id','DESC')->get();
      return response()->json(['pjPosts'=>$pjposts],200);
    }

     public function popularPost()
    {
      $popularposts =Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->get();
      return response()->json(['popularPosts'=>$popularposts],200);
    }

     public function releatedPost()
    {
      $post = Post::all();
      $releatedposts = Post::where('category_id',$post->category_id)->inRandomOrder()->get();
      return response()->json(['releatedPosts'=>$releatedposts],200);
    }





     

     public function categoryIdByPost($id)
    {

      $categoryIdByPosts = Post::with('user','category','subcategory')->where('category_id',$id)->orderBy('id','DESC')->get();
      return response()->json(['categoryIdByPosts'=>$categoryIdByPosts],200);
    }

      public function SearchPost()
    {
    	$search =\Request::get('s');
    	
    	$SeacrhPosts = Post::with('user','category','subcategory')
      ->where('title','LIKE',"%$search%")
      ->orwhere('description','LIKE',"%$search%")
      ->orderby('id','desc')
      ->get();
      return response()->json(['SearchPosts'=>$SeacrhPosts],200);
    	
    
    }


}
