<section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          @foreach($sliders as $slider)
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="{{ asset('upload/postimage') }}/{{ $slider->image }}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">{{ $slider->title }}</a></h2>
              <p>{!! $slider->description !!}</p>
            </div>
          </div>
         @endforeach
        
         
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>সর্বশেষ সংবাদ</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              @foreach($latests as $latest)
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{{ asset('upload/postimage') }}/{{ $latest->image }}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> {{ $latest->title }}</a> </div>
                </div>
              </li>
             @endforeach
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>