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
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
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
       $data['sports'] = Post::with('user','category','subcategory')->where('category_id','41')->orderBy('id','DESC')->limit(4)->get();
       $data['scholars'] = Post::with('user','category','subcategory')->where('category_id','42')->orderBy('id','DESC')->limit(3)->get();
      $data['stipends'] = Post::with('user','category','subcategory')->where('category_id','47')->orderBy('id','DESC')->limit(3)->get();
      $data['moneys'] = Post::with('user','category','subcategory')->where('category_id','49')->orderBy('id','DESC')->limit(3)->get();
       $data['categories'] = Category::all();
        $data['navcategories'] = Category::limit(10)->get();
       $data['subcategories'] = SubCategory::all();
      return view('public.partials.home',$data);
    }

    public function singlepostById($slug)
    {

      $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(5);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->limit(12)->get();
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('category_id','43')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('category_id','44')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('category_id','45')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.single-post',$data);
    }

     

     public function categoryByPost($slug)
    {
       $id = Category::where('slug',$slug)->pluck('id');
      $data['categoryIdByPosts'] = Post::with('user','category','subcategory')->where('category_id',$id)->orderBy('id','DESC')->paginate(5);
      $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('category_id','43')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('category_id','44')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('category_id','45')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allcategory-post',$data);
    }

       public function subcategoryByPost($slug)
    {
       $id = SubCategory::where('slug',$slug)->pluck('id');
      $data['subcategoryIdByPosts'] = Post::with('user','category','subcategory')->where('sub_category_id',$id)->orderBy('id','DESC')->paginate(5);
      $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('category_id','43')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('category_id','44')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('category_id','45')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allsubcategory-post',$data);
    }

    public function allschoolPost($slug){
       
      $data['allschoolposts'] = Post::with('user','category','subcategory')->where('category_id','1')->orderBy('id','DESC')->paginate(10);
      $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('category_id','43')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('category_id','44')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('category_id','45')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allschool-post',$data);
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

      public function releatedPost()
    {
      $post = Post::all();
      $releatedposts = Post::where('category_id',$post->category_id)->inRandomOrder()->get();
      return response()->json(['releatedPosts'=>$releatedposts],200);
    }


}
