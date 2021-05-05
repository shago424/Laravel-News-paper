 <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>জনপ্রিয়</span></h2>
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
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">ভর্তি</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">পরীক্ষা</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">ফলাফল</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul class="spost_nav">
               @foreach($admissions as $admission)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$admission->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$admission->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$admission->slug) }}" class="catg_title"> {{ $admission->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="" class="btn btn-primary" class="pull-right">More Post</a>
            </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <ul class="spost_nav">
               @foreach($exams as $exam)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$exam->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$exam->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$exam->slug) }}" class="catg_title"> {{ $exam->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="" class="btn btn-primary" class="pull-right">More Post</a>
            </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
               @foreach($results as $result)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$result->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$result->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$result->slug) }}" class="catg_title"> {{ $result->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="" class="btn btn-primary" class="pull-right">More Post</a>
            </div>
              </div>
            </div>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category1" aria-controls="home" role="tab" data-toggle="tab">ক্যাটেগরি</a></li>
              <li role="presentation"><a href="#comments1" aria-controls="messages" role="tab" data-toggle="tab">সাব-ক্যাটে:</a></li>
              <li role="presentation"><a href="#video1" aria-controls="profile" role="tab" data-toggle="tab">ভিডিও</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category1">
                <ul>
                  


                	@foreach($categories as $category)
                  <li class="cat-item"><a href="{{ route('category.post',$category->slug) }}">{{ $category->name }}</a></li>
                  @endforeach
                </ul>
              </div>
             
              <div role="tabpanel" class="tab-pane active" id="comments1">
                <ul>
                	@foreach($subcategories as $subcategory)
                  <li class="cat-item"><a href="{{ route('subcategory.post',$subcategory->slug) }}">{{ $subcategory->name }}</a></li>
                  @endforeach
                </ul>
              </div>
               <div role="tabpanel" class="tab-pane" id="video1">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>স্পন্সর</span></h2>
            <a class="sideAdd" href="#"><img src="{{ asset('frontend') }}/images/add_img.jpg" alt=""></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>ক্যাটেগরি আর্কাইভ</span></h2>

            <select class="catgArchive">
              <option>Select Category</option>
             
              @foreach($categories as $category)
               <a href="{{ route('category.post',$category->slug) }}">
              <option value="{{ $category->id }}"> {{$category->name}}</option>
              </a>
              @endforeach
            </select>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>লিংকস</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
        </aside>
      </div>