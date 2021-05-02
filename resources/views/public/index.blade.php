<!DOCTYPE html>
<html>
<head>
<title>Education News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/font.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  
  
 
  @include('public.partials.header')
 
  
  @yield('content')
  
    <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Flickr Images</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">Games</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Life &amp; Style</a></li>
             
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <address>
            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2045 <a href="index.html">SSB IT Software</a></p>
      <p class="developer">Developed By SSB IT Software</p>
    </div>
  </footer>
</div>


<script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script> 
<script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script> 
<script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script> 
<script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script> 
<script src="{{ asset('frontend') }}/assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="{{ asset('frontend') }}/assets/js/jquery.newsTicker.min.js"></script> 
<script src="{{ asset('frontend') }}/assets/js/jquery.fancybox.pack.js"></script> 
<script src="{{ asset('frontend') }}/assets/js/custom.js"></script>

</body>
</html>
