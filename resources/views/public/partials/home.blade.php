@extends('public.index')
@section('content')

 @include('public.partials.slider')
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
         <div class="col-md-6">
            <div class="single_sidebar" >
            <h2><span>স্কুল/কলেজ/মাদ্রাসা</span></h2>
            <ul class="spost_nav">
              @foreach($schools as $school)
              <li>
                <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$school->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$school->image) }}"> </a>
                  <div class="media-body"> <a href="{{ route('singlepost',$school->slug) }}" class="catg_title"> {{ $school->title }}</a> </div>
                </div>
              </li>
            @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allschool.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
         </div>

         <div class="col-md-6">
            <div class="single_sidebar">
            <h2><span>জাতীয় বিশ্ববিদ্যালয়</span></h2>
            <ul class="spost_nav">
              @foreach($nus as $nu)
              <li>
                <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$nu->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$nu->image) }}"> </a>
                  <div class="media-body"> <a href="{{ route('singlepost',$nu->slug) }}" class="catg_title"> {{ $nu->title }}</a> </div>
                </div>
              </li>
            @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allnu.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
         </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>সরকারী চাকুরী</span></h2>
                {{-- <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="{{ asset('upload/postimage/'.$gjsingle->image) }}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul> --}}
                <ul class="spost_nav">
                  @foreach($gjs as $gj)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$gj->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$gj->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$gj->slug) }}" class="catg_title"> {{ $gj->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
                <div class="text-right">
              <a href="{{ route('allgj.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>প্রাইভেট চাকুরী</span></h2>
               {{--  <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="{{ asset('frontend') }}/images/featured_img3.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul> --}}
                <ul class="spost_nav">
                   @foreach($pjs as $pj)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$pj->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$pj->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$pj->slug) }}" class="catg_title"> {{ $pj->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
                <div class="text-right">
              <a href="{{ route('allpj.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
              </div>
            </div>
          </div>
           <div class="single_post_content">
            <h2><span>খেলাধুলার সংবাদ</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                 @foreach($sportss as $sport)
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="pages/single_page.html"> <img src="{{ asset('upload/postimage/'.$sport->image) }}" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{ route('singlepost',$sport->slug) }}">{{ $sport->title }}</a> </figcaption>
                    {{-- <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p> --}}
                  </figure>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                 @foreach($sports as $sport)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$sport->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$sport->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$sport->slug) }}" class="catg_title"> {{ $sport->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
              </ul>
              <div class="text-right">
              <a href="{{ route('allsports.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>ছবি আর্কইভ</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="{{ asset('frontend') }}/images/photograph_img2.jpg" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="{{ asset('frontend') }}/images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="{{ asset('frontend') }}/images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 4"> <img src="{{ asset('frontend') }}/images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 5"> <img src="{{ asset('frontend') }}/images/photograph_img2.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 6"> <img src="{{ asset('frontend') }}/images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="{{ asset('frontend') }}/images/photograph_img2.jpg" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="{{ asset('frontend') }}/images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="{{ asset('frontend') }}/images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
            </ul>
            <div class="text-right">
              <a href="" class="btn btn-primary" class="pull-right">আরও ছবি দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
         
        </div>
      </div>
     @include('public.partials.sidebar')
    </div>
  </section>

@endsection