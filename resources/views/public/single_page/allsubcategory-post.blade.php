@extends('public.index')
@section('content')
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb" style="height: 50px;background-color: #1F5B44;color: #fff">
              <li style="padding-top: 7px"><a href="{{ route('public') }}">Home</a></li>
              <li style="padding-top: 7px"><a href="#">Sub Category Name : {{-- {{ $category->name }} --}}</a></li>
              
            </ol>
           
             @if($subcategoryIdByPosts->isEmpty())
            <div class="error_page">
            <h3>We Are Sorry</h3>
            <h1> Not Found !</h1>
            <p>Unfortunately, the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exists</p>
            <span></span> <a href="{{ route('public') }}" class="wow fadeInLeftBig">Go to home page</a> </div>

            @else
            <div class="related_post">
              <h3>Sub Category Wise Post <i class="fa fa-thumbs-o-up"></i></h3>
              <hr style="border:solid 2px">
              <ul class="spost_nav wow fadeInDown animated">
              	@foreach($subcategoryIdByPosts as $subcat_wise)
                <li>
                  <div class="media"> <a class="media-left" href="{{ route('singlepost',$subcat_wise->slug) }}"> <img src="{{ asset('upload/postimage/'.$subcat_wise->image) }}" alt=""> </a>
                    <div class="media-body"> <a class="subcatg_title" href="{{ route('singlepost',$subcat_wise->slug) }}"> Aliquam {{ $subcat_wise->title }}</a> </div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            @endif

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