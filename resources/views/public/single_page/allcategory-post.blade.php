@extends('public.index')
@section('content')
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb" style="height: 50px;background-color: #1A5276;color: #fff">
               <li style="padding-top:;font-size: 25px"><a href="{{ route('public') }}">ক্যাটেগরি নিউজ </a></li>
              
            </ol>
           
            @if($categoryIdByPosts->isEmpty())
            <div class="error_page">
            <h3>We Are Sorry</h3>
            <h1> Not Found !</h1>
            <p>Unfortunately, the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exists</p>
            <span></span> <a href="{{ route('public') }}" class="wow fadeInLeftBig">Go to home page</a> </div>

            @else
            <div class="related_post">
              
              <ul class="photograph_nav  wow fadeInDown">
              	@foreach($categoryIdByPosts as $cat_wise)
                <li>
                  <div style="height: 125px" class="media"> <a class="media-left" href="{{ route('singlepost',$cat_wise->slug) }}"> <img src="{{ asset('upload/postimage/'.$cat_wise->image) }}" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="{{ route('singlepost',$cat_wise->slug) }}">{{ $cat_wise->title }}</a> </div>
                  </div>
                </li>
                @endforeach
              </ul>
               {{ $categoryIdByPosts->links() }}
            </div>
            @endif

            <div class="related_post">
              <h3>সম্পর্কিত </h3>
              <hr style="border: solid crimson">
              <ul class="photograph_nav  wow fadeInDown">
                @foreach($relateds as $related)
                <li>
                  <div style="height: 125px" class="media"> <a class="media-left" href="{{ route('singlepost',$related->slug) }}"> <img src="{{ asset('upload/postimage/'.$related->image) }}" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="{{ route('singlepost',$related->slug) }}">{{ $related->title }}</a> </div>
                  </div>
                </li>
                @endforeach
                {{ $relateds->links() }}
              </ul>
            </div>

             <div class="related_post">
              <h3>সর্বশেষ </h3>
              <hr style="border: solid crimson">
              <ul class="photograph_nav  wow fadeInDown">
                @foreach($latests as $latest)
                <li>
                  <div style="height: 125px" class="media"> <a class="media-left" href="{{ route('singlepost',$latest->slug) }}"> <img src="{{ asset('upload/postimage/'.$latest->image) }}" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="{{ route('singlepost',$latest->slug) }}">{{ $latest->title }}</a> </div>
                  </div>
                </li>
                @endforeach
              </ul>
              {{ $latests->links() }}
            </div>

             <div class="related_post">
              <h3>জনপ্রিয় </h3>
              <hr style="border: solid crimson">
              <ul class="photograph_nav  wow fadeInDown">
                @foreach($populars as $popular)
                <li>
                  <div style="height: 125px" class="media"> <a class="media-left" href="{{ route('singlepost',$popular->slug) }}"> <img src="{{ asset('upload/postimage/'.$popular->image) }}" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="{{ route('singlepost',$popular->slug) }}">{{ $popular->title }}</a> </div>
                  </div>
                </li>
                @endforeach
              </ul>
              {{ $populars->links() }}
            </div>



          </div>
        </div>
      </div>
      <nav class="nav-slit"> <a class="prev" href="#"> <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
        <div>
          <h3>City Lights</h3>
          <img src="{{ asset('frontend') }}/images/post_img1.jpg" alt=""/> </div>
        </a> <a class="next" href="#"> <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
        <div>
          <h3>Street Hills</h3>
          <img src="{{ asset('frontend') }}/images/post_img1.jpg" alt=""/> </div>
        </a> </nav>
      @include('public.single_page.single_sidebar')
    </div>
  </section>

@endsection