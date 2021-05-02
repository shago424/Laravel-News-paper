 <template>
  <div>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
              <li class="breadcrumb-item active">Update Post</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">

          <!-- /.col-md-6 -->
          <div class="col-md-10">
            <div class="panel panel-primary panel-outline" style="border:solid 3px #34495E">
              <div class="panel-header" style="background:#34495E;color:#fff">
              <h5 class="card-title p-2 font-weight-bold">Update Post</h5>
               <div class="text-right p-2">
               <router-link to="/list-post" class="btn btn-warning font-weight-bold">Post List</router-link>
              </div>
              </div>
              <div class="panel-body p-3">
                <form role="form" @submit.prevent='postUpdate' enctype="mulipart/form-data">

                  <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                    <label for="name"> Category Name</label>
                    <select type="text" v-model="category_id"  name="category_id"  class="form-control"  @change ="getSubCategory">
                      <option value="">Select Category</option>
                      <option :value="category.id" v-for="category in getCategoryList" :key="category.id">{{ category.name }}</option>
                    </select>
                   <div class="text-danger" v-if = "errors && errors.category_id">{{errors.category_id[0] }}</div>
                  </div>
                    </div>

                     <div class="col-md-4">
                        <div class="form-group">
                    <label for="name"> Sub Category Name</label>
                    <select type="text" v-model="sub_category_id"  name="sub_category_id"  class="form-control" id="sub_category_id" >
                      <option value="">Select Sub Category</option>
                      <option :value="sub_category.id" v-for="sub_category in subCategory" :key="sub_category.id">{{ sub_category.name }}</option>
                    </select>
                  <div class="text-danger" v-if = "errors && errors.sub_category_id">{{errors.sub_category_id[0] }}</div>
                  </div>
                    </div>

                      <div class="col-md-4">
                        <div class="form-group">
                        <label for="name">Featured</label>
                        <select type="text" v-model="featured"  name="featured"  class="form-control" id="featured" >
                          <option value="">Select Featured</option>
                           <option value="argent">Argent</option>
                            <option value="slider">Slider</option>
                    </select>
                         <div class="text-danger" v-if = "errors && errors.featured">{{errors.featured[0] }}</div>
                          </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="title">Title</label>
                    <input v-model="title"  type="text" name="title"  class="form-control"  id="title" placeholder="Enter Title">
                   <div class="text-danger" v-if = "errors && errors.title">{{errors.title[0] }}</div>
                  </div>
                    </div>

                     <div class="col-md-4">
                      <div class="form-group">
                    <label for="tag">Tag</label>
                    <input v-model="tag"  type="text" name="tag"  class="form-control"  id="tag" placeholder="Enter Tag">
                   <div class="text-danger" v-if = "errors && errors.tag">{{errors.tag[0] }}</div>
                  </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="video_link">Video Link</label>
                    <input v-model="video_link"  type="text" name="video_link"  class="form-control"  id="video_link" placeholder="Enter Video Link">
                   <div class="text-danger" v-if = "errors && errors.video_link">{{errors.video_link[0] }}</div>
                  </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="link">Link</label>
                    <input v-model="link"  type="text" name="link"  class="form-control"  id="link" placeholder="Enter Link">
                   <div class="text-danger" v-if = "errors && errors.link">{{errors.link[0] }}</div>
                  </div>
                    </div>

                    <div class="col-md-4">
                       <div class="form-group">
                    <label for="image">Image</label>
                        <input  type="file" name="file" class="form-control" id="image" @change="getimage">
                    <div class="text-danger" v-if = "errors && errors.image">{{errors.image[0] }}</div>
                  </div>
                   </div>

                     <div class="col-md-4">
                       <div class="form-group">
                    <label for="file">File</label>
                        <input  type="file" name="file" class="form-control" id="file" @change="getFile">
                    <div class="text-danger" v-if = "errors && errors.file">{{errors.file[0] }}</div>
                  </div>
                   </div>



                    <div class="col-md-4">
                       <div class="form-group ">
                    <label for="status pr-5"> Status  </label> 
                    <br>
                   <div class="form-check form-check-inline pl-3">
                    <input class="form-check-input" type="radio" id="active" value="1" v-model="status">
                    <label class="form-check-label" for="active">Active</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inactive" value="0" v-model="status">
                    <label class="form-check-label" for="inactive">Inactive</label>
                  </div>
                  <div class="text-danger" v-if = "errors && errors.status">{{errors.status[0] }}</div>
                  
                  </div>
                    </div>

                   

                    <div class="col-md-12">
                      <div class="form-group">
                    <label for="description">Description</label>
                    <ckeditor v-model="description" :config="editorConfig" name="description"></ckeditor>
                   <div class="text-danger" v-if = "errors && errors.description">{{errors.description[0] }}</div>
                  </div>
                    
                    </div>
                    
                  </div> <!-- Form Row end -->

                <div class="form-group">
                  <router-link to="/list-post" class="btn btn-danger font-weight-bold">Cancel </router-link>
                  <button type="reset"class="btn btn-warning  font-weight-bold text-md">Reset</button>
                 <button type="submit" class="btn btn-success font-weight-bold">Update Post</button>
                </div>
              </form>



              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  </div>



</template>

<script>
 
export default {

  mounted(){

   
        // From Category List
        this.$store.dispatch('getCategoryList') 
      

       // this.$store.dispatch('getsubCategoryList') 
      },
    // From Category List

     created(){
      axios.get('/subcategoryList').then((response)=>{
        this.subCategory = response.data.subcategoriesList;
      })
       axios.get('/editpost/'+this.$route.params.postId).then((response)=>{
           this.category_id = response.data.viewData.category_id
           this.sub_category_id = response.data.viewData.sub_category_id
           this.title = response.data.viewData.title
           this.description = response.data.viewData.description
           this.video_link = response.data.viewData.video_link
           this.status = response.data.viewData.status
           this.file = response.data.viewData.file
           this.link = response.data.viewData.link
           this.tag = response.data.viewData.tag
           this.image = response.data.viewData.image
           this.featured = response.data.viewData.featured
        });
     },

    

    computed:{
      getCategoryList(){
       return this.$store.getters.categoryList 
      },
     // getsubCategoryList(){
     //   return this.$store.getters.subcategoryList 
     //  }
    },




data () {
    return {
       subCategory:[],
       category_id: '',
       title: '',
       status: '1',
       description: '',
       sub_category_id: '',
       image: '',
       video_link: '',
       link: '',
       featured: '',
       file: '',
       tag: '',
       errors:{},
      

     editorData: '<p>content of the editor.</p>',
        editorConfig: {
            // The configuration of the editor.
        },
      // Create a new form instance

    }
  },

  methods: {
    getFile(e){
      this.file = e.target.files[0];
      if(this.file.size > 2000000){
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Files Is Larger than 2mb!',
 
})
      } 

    },
 getimage(e){
      this.image = e.target.files[0];
      if(this.image.size > 2000000){
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Image Is Larger than 2mb!',
 
    })
   }

    },



    getSubCategory(){
      axios.get('/getSubcategoryByCategoryId/'+this.category_id).then((response)=>{
        this.subCategory = response.data.subCategoryList;
      })
    },


    postUpdate () {
      let form = new FormData;
      form.append('file',this.file);
      form.append('category_id',this.category_id);
      form.append('sub_category_id',this.sub_category_id);
      form.append('title',this.title);
      form.append('description',this.description);
      form.append('status',this.status);
      form.append('video_link',this.video_link);
      form.append('link',this.link);
      form.append('tag',this.tag);
      form.append('featured',this.featured);
      form.append('image',this.image);


      axios.post(`/postUpdate/${this.$route.params.postId}`,form)
            .then(({response }) =>{ 
            this.$router.push('/list-post');
            
          Toast.fire({
              icon: 'success',
              title: 'post Updated Successfully'
          })
         
                  
        }).catch(error =>{
          this.errors = error.response.data.errors;
        });
    }
  }
};
</script>

<style>

</style>
