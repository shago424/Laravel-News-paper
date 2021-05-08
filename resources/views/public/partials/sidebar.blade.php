 <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>পাবলিক বিশ্ববিদ্যারয়</span></h2>
            <ul class="spost_nav">
             @foreach($pus as $pu)
              <li>
                <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$pu->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$pu->image) }}"> </a>
                  <div class="media-body"> <a href="{{ route('singlepost',$pu->slug) }}" class="catg_title"> {{ $pu->title }}</a> </div>
                </div>
              </li>
            @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allpu.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
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
              <a href="{{ route('alladmission.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
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
              <a href="{{ route('allexam.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
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
              <a href="{{ route('allresult.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
              </div>
            </div>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category4" aria-controls="home" role="tab" data-toggle="tab">এমপিওভুক্তি</a></li>
              <li role="presentation"><a href="#video4" aria-controls="profile" role="tab" data-toggle="tab">এমপিও ছাড়</a></li>
              <li role="presentation"><a href="#comments4" aria-controls="messages" role="tab" data-toggle="tab">নিবন্ধন</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category4">
                <ul class="spost_nav">
               @foreach($newmpos as $newmpo)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$newmpo->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$newmpo->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$newmpo->slug) }}" class="catg_title"> {{ $newmpo->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allnewmpo.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="video4">
                <div class="vide_area">
                  <ul class="spost_nav">
               @foreach($mposars as $mposar)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$mposar->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$mposar->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$mposar->slug) }}" class="catg_title"> {{ $mposar->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allmposar.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments4">
                <ul class="spost_nav">
               @foreach($teacherregis as $teacherregi)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$teacherregi->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$teacherregi->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$teacherregi->slug) }}" class="catg_title"> {{ $teacherregi->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allteacherregi.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
              </div>
            </div>
          </div>
           <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category3" aria-controls="home" role="tab" data-toggle="tab">শিক্ষক</a></li>
              <li role="presentation"><a href="#video3" aria-controls="profile" role="tab" data-toggle="tab">শিক্ষার্থী</a></li>
              <li role="presentation"><a href="#comments3" aria-controls="messages" role="tab" data-toggle="tab">কর্মচারী</a></li>
            </ul>
             <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category4">
                <ul class="spost_nav">
               @foreach($teachers as $teacher)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$teacher->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$teacher->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$teacher->slug) }}" class="catg_title"> {{ $teacher->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allteacher.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="video4">
                <div class="vide_area">
                  <ul class="spost_nav">
               @foreach($students as $student)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$student->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$student->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$student->slug) }}" class="catg_title"> {{ $student->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allstudent.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments4">
                <ul class="spost_nav">
               @foreach($stuffs as $stuff)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$stuff->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$stuff->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$stuff->slug) }}" class="catg_title"> {{ $stuff->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allstuff.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
              </div>
            </div>
          </div>
          
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category1" aria-controls="home" role="tab" data-toggle="tab">বৃত্তি</a></li>
              <li role="presentation"><a href="#video1" aria-controls="profile" role="tab" data-toggle="tab">উপবৃত্তি</a></li>
              <li role="presentation"><a href="#comments1" aria-controls="messages" role="tab" data-toggle="tab">প্রশাসনিক</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category1">
                <ul class="spost_nav">
             @foreach($scholars as $scholar)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$scholar->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$scholar->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$scholar->slug) }}" class="catg_title"> {{ $scholar->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allscholar.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="video1">
                <div class="vide_area">
                  <ul class="spost_nav">
             @foreach($stipends as $stipend)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$stipend->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$stipend->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$stipend->slug) }}" class="catg_title"> {{ $stipend->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allstipend.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments1">
                <ul class="spost_nav">
              @foreach($moneys as $money)
                  <li>
                    <div class="media wow fadeInDown"> <a href="{{ route('singlepost',$money->slug) }}" class="media-left"> <img alt="" src="{{ asset('upload/postimage/'.$money->image) }}"> </a>
                      <div class="media-body"> <a href="{{ route('singlepost',$money->slug) }}" class="catg_title"> {{ $money->title }}</a> </div>
                    </div>
                  </li>
                  @endforeach
            </ul>
            <div class="text-right">
              <a href="{{ route('allmoney.post') }}" class="btn btn-primary" class="pull-right">আরও দেখুন &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
            </div>
              </div>
            </div>
          </div>
           <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category2" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#comments2" aria-controls="messages" role="tab" data-toggle="tab">Sub Category</a></li>
              <li role="presentation"><a href="#video2" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category2">
                <ul>
                  @foreach($categories as $category)
                  <li class="cat-item"><a href="{{ route('category.post',$category->slug) }}">{{ $category->name }}</a></li>
                  @endforeach
                </ul>
              </div>
             
              <div role="tabpanel" class="tab-pane" id="comments2">
                <ul>
                  @foreach($subcategories as $subcategory)
                  <li class="cat-item"><a href="{{ route('subcategory.post',$subcategory->slug) }}">{{ $subcategory->name }}</a></li>
                  @endforeach
                </ul>
              </div>
               <div role="tabpanel" class="tab-pane" id="video2">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown" style="padding-top: 25px">
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
              <li><a href="#">Ministry Of Education</a></li>
              <li><a href="#">Directorate Of Ministry</a></li>
              <li><a href="#">National University</a></li>
            </ul>
          </div>
        </aside>
      </div>