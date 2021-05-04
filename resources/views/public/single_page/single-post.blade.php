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
            <div class="single_page_content"> <img class="img-center"  src="{{ asset('upload/postimage/'.$post->image) }}" alt="">
              <h5 style="text-align: justify;color: #000">{!! $post->description !!}</h5>
              {{-- <blockquote style="text-align: justify;color: blue"> <i> {!! $post->description !!} </i></blockquote> --}}
              
              <div style="padding-top: 50px" >
                @if($post->file == NULL)

                @else
                <a target="_blank" href="{{asset('upload/postfile/'.$post->file)}}" class="btn btn-primary">File Download</a>
                @endif
                 @if($post->video_link == NULL)
              
                @else
                <a target="_blank" href="{{ $post->video_link }}" class="btn btn-warning"> <i>Go To Video </i></a>
                @endif
                 @if($post->link == NULL)
              
                @else
                <a target="_blank" href="{{ $post->link }}" class="btn btn-danger"> <i>Visit Link </i></a>
                @endif
              </div>
              
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
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
                  <li class="cat-item"><a href="{{ route('category.post',$category->slug) }}">{{ $category->name }}</a></li>
                  @endforeach
                </ul>
              </div>
             
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                	@foreach($subcategories as $subcategory)
                  <li class="cat-item"><a href="{{ route('subcategory.post',$subcategory->slug) }}">{{ $subcategory->name }}</a></li>
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