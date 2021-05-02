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
              <li class="breadcrumb-item active">Add Post</li>
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
          <div class="col-md-12">
            <div class="panel panel-primary panel-outline" style="border:solid 3px #34495E">
              <div class="panel-header" style="background:#34495E;color:#fff">
              <h5 class="card-title p-2 font-weight-bold">Add Post</h5>
               <div class="text-right p-2">
               <router-link to="/list-post" class="btn btn-warning font-weight-bold">Post List</router-link>
              </div>
              </div>
              <div class="panel-body p-3">
                <form role="form" @submit.prevent='postSave' enctype="mulipart/form-data">

                  <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                    <label for="name"> Category Name</label>
                    <select type="text" v-model="form.category_id"  name="category_id"  class="form-control"  @change ="getSubCategory" :class="{ 'is-invalid': form.errors.has('category_id') }">
                      <option value="">Select Category</option>
                      <option :value="category.id" v-for="category in getCategoryList" :key="category.id">{{ category.name }}</option>
                    </select>
                   <has-error :form="form" field="category_id"></has-error>
                  </div>
                    </div>

                     <div class="col-md-4">
                        <div class="form-group">
                    <label for="name"> Sub Category Name</label>
                    <select type="text" v-model="form.sub_category_id"  name="sub_category_id"  class="form-control" id="sub_category_id" :class="{ 'is-invalid': form.errors.has('sub_category_id') }">
                      <option value="">Select Sub Category</option>
                      <option :value="sub_category.id" v-for="sub_category in subCategory" :key="sub_category.id">{{ sub_category.name }}</option>
                    </select>
                  <has-error :form="form" field="sub_category_id"></has-error>
                  </div>
                    </div>

                       <div class="col-md-4">
                        <div class="form-group">
                        <label for="name">Featured</label>
                        <select type="text" v-model="form.featured"  name="featured"  class="form-control" id="featured" :class="{ 'is-invalid': form.errors.has('featured') }">
                          <option value="">Select Featured</option>
                           <option value="argent">Argent</option>
                            <option value="slider">Slider</option>
                    </select>
                         <has-error :form="form" field="featured"></has-error>
                          </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="title">Title</label>
                    <input v-model="form.title"  type="text" name="title"  class="form-control"  id="title" placeholder="Enter Title":class="{ 'is-invalid': form.errors.has('title') }">
                   <has-error :form="form" field="title"></has-error>
                  </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="tag">Tag</label>
                    <input v-model="form.tag"  type="text" name="tag"  class="form-control"  id="tag" placeholder="Enter Tag" :class="{ 'is-invalid': form.errors.has('tag') }">
                   <has-error :form="form" field="tag"></has-error>
                  </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="video_link">Video Link</label>
                    <input v-model="form.video_link"  type="text" name="video_link"  class="form-control"  id="video_link" placeholder="Enter Video Link" :class="{ 'is-invalid': form.errors.has('video_link') }">
                   <has-error :form="form" field="video_link"></has-error>
                  </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="link">Link</label>
                    <input v-model="form.link"  type="text" name="link"  class="form-control"  id="link" placeholder="Enter Link":class="{ 'is-invalid': form.errors.has('link') }">
                   <has-error :form="form" field="link"></has-error>
                  </div>
                    </div>

                     <div class="col-md-4">
                       <div class="form-group">
                    <label for="file">Image</label>
                        <input  type="file" name="image" class="form-control" id="image" @change="changePhoto($event)" :class="{ 'is-invalid': form.errors.has('image') }">
                        <img :src="form.image" width="50px" height="50px" alt="">
                    <has-error :form="form" field="image"></has-error>
                  </div>
                    
                    </div>

                      <div class="col-md-4">
                       <div class="form-group">
                    <label for="file">File</label>
                        <input  type="file" name="file" class="form-control" id="file" @change="getFile" :class="{ 'is-invalid': form.errors.has('file') }">
                   <has-error :form="form" field="file"></has-error>
                  </div>
                    
                    </div>

                    <div class="col-md-4">
                       <div class="form-group ">
                    <label for="status pr-5"> Status  </label> 
                    <br>
                   <div class="form-check form-check-inline pl-3">
                    <input class="form-check-input" type="radio" id="active" value="1" v-model="form.status">
                    <label class="form-check-label" for="active">Active</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inactive" value="0" v-model="form.status">
                    <label class="form-check-label" for="inactive">Inactive</label>
                  </div>
                   <span :class="{ 'is-invalid': form.errors.has('status') }"></span>
                  <has-error :form="form" field="status"></has-error>
                  
                  </div>
                    </div>

                   

                    <div class="col-md-12">
                      <div class="form-group">
                    <label for="description">Description</label>
                    <ckeditor v-model="form.description" :config="editorConfig" name="description" :class="{ 'is-invalid': form.errors.has('description') }"></ckeditor>
                  <has-error :form="form" field="description"></has-error>
                  </div>
                    
                    </div>
                    
                  </div> <!-- Form Row end -->

                <div class="form-group">
                  <router-link to="/list-post" class="btn btn-danger font-weight-bold">Cancel </router-link>
                  <button type="reset"class="btn btn-warning  font-weight-bold text-md">Reset</button>
                 <button type="submit" class="btn btn-success font-weight-bold">Add Post</button>
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
     
    },

    computed:{
      getCategoryList(){
       return this.$store.getters.categoryList 
      }
     
    },



data () {
    return {
      form: new Form({
       subCategory:[],
       category_id: '',
       title: '',
       status: '1',
       description: '',
       sub_category_id: '',
       file: '',
       video_link: '',
       image: '',
       link: '',
       tag: '',
       featured: '',
       
      })

    
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


     changePhoto(event){
      let file = event.target.files[0];
      let reader = new FileReader();
      reader.onload = event =>{
        this.form.image = event.target.result
      };
      reader.readAsDataURL(file);
   },

  
getSubCategory(){
      axios.get('/getSubcategoryByCategoryId/'+this.category_id).then((response)=>{
        this.subCategory = response.data.subCategoryList;
      })
    },


      postSave () {
      // Submit the form via a POST request
      this.form.post('/post-add')
            .then(({response }) =>{ 
            this.$router.push('/list-post');
            
          Toast.fire({
              icon: 'success',
              title: 'Post Added Successfully'
          })
             
          this.form.name = null;
          this.form.category_id = null;
                  
        }).catch(() =>{

        });
    }
  
  }
};
</script>

<style>

</style>
