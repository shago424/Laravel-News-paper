@extends('public.index')
@section('content')
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="{{ route('public') }}">Home</a></li>
              <li><a href="#">{{ $post->category->name }}</a></li>
              <li class="active">{{ $post->subcategory->name }}</li>
            </ol>
            <h1>{{ $post->title }}</h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>{{ $post->user->name }}</a> <span><i class="fa fa-calendar"></i>{{ date('d-M-Y:h:i:A',strtotime($post->created_at)) }}</span> <a href="#"><i class="fa fa-tags"></i>{{ $post->tag }}</a> </div>
            <div class="single_page_content"> <img class="img-center" src="{{ asset('upload/postimage/'.$post->image) }}" alt="">
              <p>{!! $post->description !!}</p>
             {{--  <blockquote> Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque adipiscing, neque ut pulvinar tincidunt, est sem euismod odio, eu ullamcorper turpis nisl sit amet velit. Nullam vitae nibh odio, non scelerisque nibh. Vestibulum ut est augue, in varius purus. </blockquote>
              <ul>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                <li>Nullam vitae nibh odio, non scelerisque nibh</li>
              </ul>
              <h2>This is h2 title</h2>
              <h3>This is h3 title</h3>
              <h4>This is h4 title</h4>
              <h5>This is h5 title</h5>
              <h6>This is h6 Title</h6>
              <button class="btn default-btn">Default</button>
              <button class="btn btn-red">Red Button</button>
              <button class="btn btn-yellow">Yellow Button</button>
              <button class="btn btn-green">Green Button</button>
              <button class="btn btn-black">Black Button</button>
              <button class="btn btn-orange">Orange Button</button>
              <button class="btn btn-blue">Blue Button</button>
              <button class="btn btn-lime">Lime Button</button>
              <button class="btn btn-theme">Theme Button</button>
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul> --}}
            </div>
            <div class="related_post">
              <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
              	@foreach($relateds as $related)
                <li>
                  <div class="media"> <a class="media-left" href="{{ route('singlepost',$related->slug) }}"> <img src="{{ asset('upload/postimage/'.$related->image) }}" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="{{ route('singlepost',$related->slug) }}"> Aliquam {{ $related->title }}</a> </div>
                  </div>
                </li>
                @endforeach
              </ul>
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
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
            	@foreach($populars as $popular)
              <li>
                <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$popular->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$popular->image) }}"> </a>
                  <div class="media-body"> <a href="{{ route('singlepost',$popular->slug) }}" class="catg_title"> {{ $popular->title }}</a> </div>
                </div>
              </li>
            @endforeach
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Sub Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                	@foreach($categories as $category)
                  <li class="cat-item"><a href="#">{{ $category->name }}</a></li>
                  @endforeach
                </ul>
              </div>
             
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                	@foreach($subcategories as $subcategory)
                  <li class="cat-item"><a href="#">{{ $subcategory->name }}</a></li>
                  @endforeach
                </ul>
              </div>
               <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="{{ asset('frontend') }}/images/add_img.jpg" alt=""></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Select Category</option>
              @foreach($categories as $category)
              <option value="{{ $category->id }}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>

@endsection