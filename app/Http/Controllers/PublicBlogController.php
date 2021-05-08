<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Post;
use App\Category;
use App\SubCateGory;
use App\Frontend;
use Carbon\Carbon;
class PublicBlogController extends Controller
{


    public function index()
    {



      $data['sliders'] = Post::with('user','category','subcategory')->where('featured','slider')->orderBy('id','DESC')->limit(5)->get();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
        $data['schools'] = Post::with('user','category','subcategory')->where('category_id','1')->orderBy('id','DESC')->limit(5)->get();
      $data['nus'] = Post::with('user','category','subcategory')->where('category_id','2')->orderBy('id','DESC')->limit(5)->get();
      $data['pus'] = Post::with('user','category','subcategory')->where('category_id','3')->orderBy('id','DESC')->limit(5)->get();
      $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(5)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(5)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(5)->get();
      $data['gjs'] = Post::with('user','category','subcategory')->where('category_id','39')->orderBy('id','DESC')->limit(5)->get();
      $data['gjsingle'] = Post::with('user','category','subcategory')->where('category_id','39')->orderBy('id','DESC')->first();
       $data['pjs'] = Post::with('user','category','subcategory')->where('category_id','40')->orderBy('id','DESC')->limit(5)->get();
       $data['sports'] = Post::with('user','category','subcategory')->where('category_id','47')->orderBy('id','DESC')->limit(5)->get();
       $data['sportss'] = Post::with('user','category','subcategory')->where('category_id','47')->orderBy('id','DESC')->limit(1)->get();
       $data['scholars'] = Post::with('user','category','subcategory')->where('category_id','42')->orderBy('id','DESC')->limit(5)->get();
      $data['stipends'] = Post::with('user','category','subcategory')->where('category_id','41')->orderBy('id','DESC')->limit(5)->get();
      $data['moneys'] = Post::with('user','category','subcategory')->where('featured','admins')->orderBy('id','DESC')->limit(5)->get();
      $data['teachers'] = Post::with('user','category','subcategory')->where('category_id','50')->orderBy('id','DESC')->limit(5)->get();
      $data['students'] = Post::with('user','category','subcategory')->where('category_id','51')->orderBy('id','DESC')->limit(5)->get();
      $data['stuffs'] = Post::with('user','category','subcategory')->where('category_id','52')->orderBy('id','DESC')->limit(5)->get();
      $data['newmpos'] = Post::with('user','category','subcategory')->where('featured','newmpo')->orderBy('id','DESC')->limit(5)->get();
      $data['mposars'] = Post::with('user','category','subcategory')->where('featured','mposar')->orderBy('id','DESC')->limit(5)->get();
      $data['teacherregis'] = Post::with('user','category','subcategory')->where('category_id','55')->orderBy('id','DESC')->limit(5)->get();
       $data['categories'] = Category::all();
        $data['navcategories'] = Category::limit(11)->get();
       $data['subcategories'] = SubCategory::all();
       $data['utctime'] = Carbon::now()->toTimeString();
      return view('public.partials.home',$data);
    }

    public function singlepostById($slug)
    {

      $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      
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
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
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
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allsubcategory-post',$data);
    }

    public function allschoolPost(){
       
      $data['allschoolposts'] = Post::with('user','category','subcategory')->where('category_id','1')->orderBy('id','DESC')->paginate(10);
      // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allschool-post',$data);
    }

      public function allnuPost(){
       
      $data['allnuposts'] = Post::with('user','category','subcategory')->where('category_id','2')->orderBy('id','DESC')->paginate(10);
      // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allnu-post',$data);
    }

      public function allpuPost(){
       
      $data['allpuposts'] = Post::with('user','category','subcategory')->where('category_id','3')->orderBy('id','DESC')->paginate(10);
      // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allpu-post',$data);
    }

      public function alladmissionPost(){
       
      $data['alladmissionposts'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->paginate(10);
      // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.alladmission-post',$data);
    }

      public function allexamPost(){
       
      $data['allexamposts'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->paginate(10);
      // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allexam-post',$data);
    }

      public function allresultPost(){
       
      $data['allresultposts'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->paginate(10);
      // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allresult-post',$data);
    }

      public function allscholarPost(){
       
      $data['allscholarposts'] = Post::with('user','category','subcategory')->where('category_id','42')->orderBy('id','DESC')->paginate(10);
        // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allscholar-post',$data);
    }

      public function allstipendPost(){
       
      $data['allstipendposts'] = Post::with('user','category','subcategory')->where('category_id','41')->orderBy('id','DESC')->paginate(10);
      // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allstipend-post',$data);
    }

      public function allmoneyPost(){
       
      $data['allmoneyposts'] = Post::with('user','category','subcategory')->where('category_id','49')->orderBy('id','DESC')->paginate(10);
      // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allmoney-post',$data);
    }

        public function allgjPost(){
       
      $data['allgjposts'] = Post::with('user','category','subcategory')->where('category_id','49')->orderBy('id','DESC')->paginate(10);
      // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allgj-post',$data);
    }

        public function allpjPost(){
       
      $data['allpjposts'] = Post::with('user','category','subcategory')->where('category_id','49')->orderBy('id','DESC')->paginate(10);
      // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allpj-post',$data);
    }

        public function allsportsPost(){
       
      $data['allsportsposts'] = Post::with('user','category','subcategory')->where('category_id','47')->orderBy('id','DESC')->paginate(10);
      // $data['post'] = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      $data['latests'] = Post::with('user','category','subcategory')->orderBy('id','DESC')->paginate(9);
       $data['argents'] = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->limit(4)->get();
       // $data['cat_post'] = Post::find($slug);
      $data['relateds'] = Post::inRandomOrder()->paginate(9);
      $data['populars'] = Post::inRandomOrder()->with('user','category','subcategory')->orderBy('id','DESC')->paginate(5);
      $data['categories'] = Category::all();
       $data['subcategories'] = SubCategory::all();
       $data['navcategories'] = Category::limit(10)->get();
       $data['admissions'] = Post::with('user','category','subcategory')->where('featured','admission')->orderBy('id','DESC')->limit(3)->get();
      $data['exams'] = Post::with('user','category','subcategory')->where('featured','exam')->orderBy('id','DESC')->limit(3)->get();
      $data['results'] = Post::with('user','category','subcategory')->where('featured','result')->orderBy('id','DESC')->limit(3)->get();
      return view('public.single_page.allsports-post',$data);
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
