<template>
 <div id="slider">
 
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider" v-for="(slider,index) in getsliderPost" v-if="index<1">
          <div class="single_iteam" > <router-link :to="`/post/${slider.slug}`"> <img :src="`upload/postimage/${slider.image}`" alt=""></router-link>
            <div class="slider_article" >
              <h2><router-link :to="`/post/${slider.slug}`" class="slider_tittle" >{{ slider.title | shortlength(90,".......")}}</router-link></h2>
              <p>{{ slider.description | shortlength(90,".......")}}</p>
            </div>
          </div>
        
        
        
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest Post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li v-for="(latest,index) in getlatestPost" v-if="index<11">
                <div class="media"> <router-link :to="`/post/${latest.slug}`" class="media-left"> <img alt="" :src="`upload/postimage/${latest.image}`"> </router-link>
                  <div class="media-body"> <router-link :to="`/post/${latest.slug}`" class="catg_title"> {{ latest.title | shortlength(90,".......") }}</router-link> </div>
                </div>
              </li>
              
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
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
name:"slider",

data(){
  return{
    keyword:''
  }
},

mounted(){
      this.$store.dispatch('getCategoryList')
      this.$store.dispatch('getlatestPost')
      this.$store.dispatch('getsliderPost')
    },

    computed:{
      getCategoryList(){
       return this.$store.getters.categoryList 
      },
      getlatestPost(){
       return this.$store.getters.latestPost 
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
