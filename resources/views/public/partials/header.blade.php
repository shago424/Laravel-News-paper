 <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav" >
              <li style="font-size: 16px"><a href="{{ route('public') }}">হোম</a></li>
              <li style="font-size: 16px"><a href="#">সম্পর্কে</a></li>
              <li style="font-size: 16px"><a href="pages/contact.html">যোগাযোগ</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <h4 style="color: white;padding-top: 10px">{{ date('d-M-Y h:i:A') }}</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="" class="logo"><img src="{{ asset('frontend') }}/images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="{{ asset('frontend') }}/images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="{{ route('public') }}"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="#">Technology</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Android</a></li>
              <li><a href="#">Samsung</a></li>
              <li><a href="#">Nokia</a></li>
              <li><a href="#">Walton Mobile</a></li>
              <li><a href="#">Sympony</a></li>
            </ul>
          </li>
          <li><a href="#">Laptops</a></li>
          <li><a href="#">Tablets</a></li>
          <li><a href="pages/contact.html">Contact Us</a></li>
          <li><a href="pages/404.html">404 Page</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea" style="height: 40px;"> <span style="background: #000;height: 40px;">আর্জেন্ট সংবাদ</span>
          <ul id="ticker01" class="news_sticker">
            @foreach($argents as $argent )
            <li style="font-size:15px"><a href="{{ route('singlepost',$argent->slug) }}"><img src="{{ asset('upload/postimage/') }}/{{ $argent->image }}" alt="">{{ $argent->title }}</a></li>
            @endforeach
          </ul>
          <div class="social_area" style="height: 40px;padding-top: 3px">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>