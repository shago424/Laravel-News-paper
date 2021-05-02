<template>
 <div id="publicheader">
 <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><router-link to="/">Home</router-link></li>
              <li><a href="#">About</a></li>
              <li><a href="pages/contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p>Friday, December 05, 2045</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
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
          <li class="active"><router-link to="/"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></router-link></li>
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
        <div class="latest_newsarea" style="height: 40px;"> <span style="background: #000;height: 40px;">Latest News</span>
          <ul id="ticker01" class="news_sticker">
             <li style="font-size:15px"><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My First News Item</a></li>
            <li style="font-size:15px"><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Second News Item</a></li>
            <li style="font-size:15px"><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My First News Item</a></li>
            <li style="font-size:15px"><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Second News Item</a></li>
           
            
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
 


 
 </div> 


</template>

<script>
import _ from 'lodash'
export default {
name:"publicheader",

data(){
  return{
    keyword:''
  }
},

mounted(){
      this.$store.dispatch('getCategoryList')
      this.$store.dispatch('getlatestPost')
      this.$store.dispatch('getargentPost')
      this.$store.dispatch('getsliderPost')
    },

    computed:{
      getCategoryList(){
       return this.$store.getters.categoryList 
      },
      getlatestPost(){
       return this.$store.getters.latestPost 
      },
      getargentPost(){
       return this.$store.getters.argentPost 
      },
      getsliderPost(){
       return this.$store.getters.sliderPost 
      },
    },

    methods:{
     
      RealSearch:_.debounce(function () {
        this.$store.dispatch('SearchPost',this.keyword);
      },1000 )
    }
};
</script>

<style>

</style>
