<template>
<div id="content">
	<Header/>
  <Slider/>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
         <div class="col-md-6">
            <div class="single_sidebar">
            <h2><span>School College Madrasa</span></h2>
            <ul class="spost_nav">
              <li v-for="(sclist,index) in getschoolCollege" v-if="index<5">
                <div class="media wow fadeInDown"> <router-link :to="`/post/${sclist.slug}`" class="media-left"> <img alt="" :src="`upload/postimage/${sclist.image}`"> </router-link>
                  <div class="media-body"> <router-link :to="`/post/${sclist.slug}`" class="catg_title"> {{ sclist.title | shortlength(90,".......")}}</router-link> </div>
                </div>
              </li>
            </ul>
            <div>
             <a href="pages/single_page.html"  class="btn btn-primary pull-right">More Post</a>
             </div>
          </div>
          
         </div>

         <div class="col-md-6">
            <div class="single_sidebar">
            <h2><span>National University</span></h2>
            <ul class="spost_nav">
             <li v-for="(nu,index) in getnuPost" v-if="index<5">
                <div class="media wow fadeInDown"> <router-link :to="`/post/${nu.slug}`" class="media-left"> <img alt="" :src="`upload/postimage/${nu.image}`"> </router-link>
                  <div class="media-body"> <router-link :to="`/post/${nu.slug}`" class="catg_title"> {{ nu.title | shortlength(90,".......")}}</router-link> </div>
                </div>
              </li>
              
            </ul>
             <div>
             <a href="pages/single_page.html"  class="btn btn-primary pull-right">More Post</a>
             </div>
          </div>
         </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Govt. Job</span></h2>
               <!--  <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img2.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">{{ getschoolCollege.title }}</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul> -->
                <ul class="spost_nav">
                  <li v-for="(gj,index) in getgjPost" v-if="index<5">
                <div class="media wow fadeInDown"> <router-link :to="`/post/${gj.slug}`" class="media-left"> <img alt="" :src="`upload/postimage/${gj.image}`"> </router-link>
                  <div class="media-body"> <router-link :to="`/post/${gj.slug}`" class="catg_title"> {{ gj.title | shortlength(90,".......")}}</router-link> </div>
                </div>
              </li>
                  
                </ul>
                <div>
             <a href="pages/single_page.html"  class="btn btn-primary pull-right">More Post</a>
             </div>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Private Job</span></h2>
               <!--  <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul> -->
                <ul class="spost_nav">
                   <li v-for="(pj,index) in getpjPost" v-if="index<5">
                <div class="media wow fadeInDown"> <router-link :to="`/post/${pj.slug}`" class="media-left"> <img alt="" :src="`upload/postimage/${pj.image}`"> </router-link>
                  <div class="media-body"> <router-link :to="`/post/${pj.slug}`" class="catg_title"> {{ pj.title | shortlength(90,".......")}}</router-link> </div>
                </div>
              </li>
                  
                </ul>
                 <div>
             <a href="pages/single_page.html"  class="btn btn-primary pull-right">More Post</a>
             </div>
              </div>
            </div>
          </div>
           <div class="single_post_content">
            <h2><span>Sports News</span></h2>
            <div class="single_post_content_left">
            <!--   <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="pages/single_page.html"> <img src="images/featured_img1.jpg" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
              </ul> -->
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">

                 <li v-for="(sports,index) in getsportsPost" v-if="index<5">
                <div class="media wow fadeInDown"> <router-link :to="`/post/${sports.slug}`" class="media-left"> <img alt="" :src="`upload/postimage/${sports.image}`"> </router-link>
                  <div class="media-body"> <router-link :to="`/post/${sports.slug}`" class="catg_title"> {{ sports.title | shortlength(90,".......")}}</router-link> </div>
                </div>
              </li>
              
              </ul>
             <div>
             <a href="pages/single_page.html"  class="btn btn-primary pull-right">More Post</a>
             </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>Photography</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="images/photograph_img2.jpg" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 4"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 5"> <img src="images/photograph_img2.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 6"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="images/photograph_img2.jpg" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
               <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
               <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
               <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>

            </ul>
            <div>
             <a href="pages/single_page.html"  class="btn btn-primary pull-right">More Photos</a>
             </div>
          </div>
         
        </div>
      </div>
      <BlogSidebar/>
    </div>
  </section>

</div> 


</template>

<script>
import BlogSidebar from './blog/BlogSidebar.vue'
import Header from './blog/header.vue'
import Slider from './blog/slider.vue'
export default {
name:"contentHome",

data(){
	return{
		id:""
	}
},

components:{
  BlogSidebar,
  Header,
  Slider,

  
},

mounted(){
 this.$store.dispatch('getschoolCollege')
 this.$store.dispatch('getlatestPost')
 
 this.$store.dispatch('getnuPost')
 this.$store.dispatch('getsportsPost')
 this.$store.dispatch('getgjPost')
 this.$store.dispatch('getpjPost')
 
},

computed:{
getschoolCollege(){
       return this.$store.getters.schoolCollege 
      },
      getlatestPost(){
       return this.$store.getters.latestPost 
      },
     
       getnuPost(){
       return this.$store.getters.nuPost 
      },
       getsportsPost(){
       return this.$store.getters.sportsPost 
      },
       getgjPost(){
       return this.$store.getters.gjPost 
      },
       getpjPost(){
       return this.$store.getters.pjPost 
      },
},

methods:{
getcategoryIdByPost(){
  if(this.$route.params.id!=null){
    this.$store.dispatch('getPostCatId',this.$route.params.id);
  }else{
     this.$store.dispatch('getallblogPost')
  }
  
}

},

watch:{
  $route(to,from){
    this.getcategoryIdByPost();
  }
}









};
</script>

<style>

</style>