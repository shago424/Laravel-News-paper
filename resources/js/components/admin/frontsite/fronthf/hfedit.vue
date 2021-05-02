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
              <li class="breadcrumb-item active">Update Front Header Footer</li>
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
            <div class="panel panel-primary panel-outline" style="border:solid 3px #360E37">
              <div class="panel-header" style="background:#360E37;color:#fff">
              <h5 class="card-title p-2 font-weight-bold">Update Front Header Footer</h5>
               <div class="text-right p-2">
               <router-link to="/list-content" class="btn btn-info font-weight-bold">Front Header Footer List</router-link>
              </div>
              </div>
              <div class="panel-body p-3">
                <form role="form" @submit.prevent='fronthfUpdate' enctype="mulipart/form-data">

                  <div class="row">

                     <div class="col-md-4">
                      <div class="form-group">
                    <label for="slogan">Slogan</label>
                    <input v-model="slogan"  type="text" name="slogan"  class="form-control"  id="slogan" placeholder="Enter  Slogan">
                   <div class="text-danger" v-if = "errors && errors.slogan">{{errors.slogan[0] }}</div>
                  </div>
                    </div>


                   <div class="col-md-4">
                      <div class="form-group">
                    <label for="headtext">Header Text</label>
                    <input v-model="headtext"  type="text" name="headtext"  class="form-control"  id="headtext" placeholder="Enter Header Text">
                   <div class="text-danger" v-if = "errors && errors.headtext">{{errors.headtext[0] }}</div>
                  </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="foottext">Footer Text</label>
                    <input v-model="foottext"  type="text" name="foottext"  class="form-control"  id="foottext" placeholder="Enter Footer Text">
                   <div class="text-danger" v-if = "errors && errors.foottext">{{errors.foottext[0] }}</div>
                  </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="email">Email</label>
                    <input v-model="email"  type="email" name="email"  class="form-control"  id="email" placeholder="Enter Email">
                   <div class="text-danger" v-if = "errors && errors.email">{{errors.email[0] }}</div>
                  </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input v-model="mobile"  type="text" name="mobile"  class="form-control"  id="mobile" placeholder="Enter Mobile">
                   <div class="text-danger" v-if = "errors && errors.mobile">{{errors.mobile[0] }}</div>
                  </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="link">Link</label>
                    <input v-model="link"  type="text" name="link"  class="form-control"  id="link" placeholder="Enter Video Link">
                   <div class="text-danger" v-if = "errors && errors.link">{{errors.link[0] }}</div>
                  </div>
                    </div>

                    
                    

                     <div class="col-md-4">
                       <div class="form-group">
                    <label for="logo">Small Logo</label>
                        <input  type="file" name="logo" class="form-control" id="logo" @change="getFileLogo">
                    <div class="text-danger" v-if = "errors && errors.logo">{{errors.logo[0] }}</div>
                  </div>
                    </div>

                    <div class="col-md-4">
                       <div class="form-group">
                    <label for="mainlogo">Main Logo</label>
                        <input  type="file" name="mainlogo" class="form-control" id="file" @change="getMainlogo">
                    <div class="text-danger" v-if = "errors && errors.mainlogo">{{errors.mainlogo[0] }}</div>
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

                   

                  <div class="form-group float-right" >
                  <router-link to="/list-fronthf" class="btn btn-danger font-weight-bold">Cancel </router-link>
                  <button type="reset"class="btn btn-warning  font-weight-bold text-md">Reset</button>
                 <button type="submit" class="btn btn-success font-weight-bold">Update Content</button>
                </div>
                    
                  </div> <!-- Form Row end -->

                
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

   
      },

    // From Category List

     created(){
      
       axios.get('/editfronthf/'+this.$route.params.fronthfId).then((response)=>{
           this.headtext = response.data.viewData.headtext
           this.foottext = response.data.viewData.foottext
           this.slogan = response.data.viewData.slogan
           this.email = response.data.viewData.email
           this.link = response.data.viewData.link
           this.status = response.data.viewData.status
           this.logo = response.data.viewData.logo
           this.mainlogo = response.data.viewData.mainlogo
           this.mobile = response.data.viewData.mobile
        });
     },

    

    computed:{
     
     // getsubCategoryList(){
     //   return this.$store.getters.subcategoryList 
     //  }
    },




data () {
    return {
        headtext:'',
       foottext: '',
       email: '',
       status: '1',
       mobile: '',
       link: '',
       slogan: '',
       logo: '',
       mainlogo: '',
       errors:{},

     
      // Create a new form instance

    }
  },

  methods: {
    getMainlogo(e){
      this.mainlogo = e.target.files[0];
      if(this.mainlogo.size > 2000000){
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Files Is Larger than 2mb!',
 
    })
   }

  },
  getFileLogo(e){
      this.logo = e.target.files[0];
      if(this.logo.size > 2000000){
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Files Is Larger than 2mb!',
 
    })
   }

    },

  


    fronthfUpdate () {
      let form = new FormData;
     form.append('logo',this.logo);
      form.append('mainlogo',this.mainlogo);
      form.append('headtext',this.headtext);
      form.append('foottext',this.foottext);
      form.append('email',this.email);
      form.append('status',this.status);
      form.append('mobile',this.mobile);
      form.append('link',this.link);
       form.append('slogan',this.slogan);


      axios.post(`/fronthfUpdate/${this.$route.params.fronthfId}`,form)
            .then(({response }) =>{ 
            this.$router.push('/list-fronthf');
            
          Toast.fire({
              icon: 'success',
              title: 'Front Header Footer Updated Successfully'
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
