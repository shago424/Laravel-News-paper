@extends('public.index')
@section('content')
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb" style="height: 50px;background-color: #1A5276;color: #fff">
              <li style="padding-top:;font-size: 18px;padding-top: 5px"><a href="{{ route('public') }}">সকল ফলাফলের খবর </a></li>
              
              
            </ol>
           
            @if($allresultposts->isEmpty())
            <div class="error_page">
            <h3>We Are Sorry</h3>
            <h1> Not Found !</h1>
            <p>Unfortunately, the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exists</p>
            <span></span> <a href="{{ route('public') }}" class="wow fadeInLeftBig">Go to home page</a> </div>

            @else
            <div class="related_post">
              <div class="table-responsive">
                  <table class="table table-responsive table-hover" style="border:solid 1px">
                      <thead>
                          <tr style="color: crimson;font-size: 16px">
                              <th>#</th>
                              <th>ছবি</th>
                              <th>তারিখ</th>
                              <th>শিরোনাম</th>
                              <th>বিস্তারিত</th>
                              <th>ডাউনলোড</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($allresultposts as $key => $result)
                          <tr>
                              <td style="text-align: center;">{{ $key+1 }}</td>
                              <td style="text-align: center;">  <img src="{{ asset('upload/postimage/'.$result->image) }}" width="50px" height="50px"></td>
                              <td width="15%" style="text-align: center;">{{ date('d-m-Y',strtotime($result->created_at)) }}</td>
                              <td class="media-body"><a class="catg_title" style="color: blue" href="{{ route('singlepost',$result->slug) }}">{{ $result->title }}</a> </td>
                              <td class="media-body"><a style="color: blue" class="catg_title" href="{{ route('singlepost',$result->slug) }}">বিস্তারিত</a></td>
                              @if($result->file ==NULL)
                              <td></td>
                              @else
                              <td style="text-align: center;"> <a  target="_blank" href="{{ asset('upload/postfile/'.$result->file) }}"><i class="fa fa-download" style="width: 50px;color:blue"></a></td>
                              @endif
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  {{ $allresultposts->links() }}
              </div>
            </div>
            @endif
            <hr>
        <div class="related_post">
              <h3>সম্পর্কিত </i></h3>
              <hr style="border: solid crimson">
              <ul class="photograph_nav  wow fadeInDown">
                @foreach($relateds as $related)
                <li>
                  <div style="height: 125px" class="media"> <a class="media-left" href="{{ route('singlepost',$related->slug) }}"> <img src="{{ asset('upload/postimage/'.$related->image) }}" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="{{ route('singlepost',$related->slug) }}">{{ $related->title }}</a> </div>
                  </div>
                </li>
                @endforeach
              </ul>
               {{ $relateds->links() }}
            </div>

             <div class="related_post">
              <h3>সর্বশেষ </i></h3>
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
              <h3>জনপ্রিয় </i></h3>
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