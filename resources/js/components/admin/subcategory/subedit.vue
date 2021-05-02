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
              <li class="breadcrumb-item active">Update Sub Category</li>
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
          <div class="col-lg-6">
            <div class="panel panel-primary panel-outline" style="border:solid 3px lightblue">
              <div class="panel-header" style="background:lightblue">
              <h5 class="card-title p-2 font-weight-bold">Update Sub Category</h5>
               <div class="text-right p-2">
               <router-link to="/list-subcategory" class="btn btn-warning font-weight-bold">Sub Category List</router-link>
              </div>
              </div>
              <div class="panel-body p-3">
            <form role="form" @submit.prevent='subcategoryUpdate'>

                   <div class="form-group">
                    <label for="name"> Category Name</label>
                    <select type="text" v-model="form.category_id"  name="category_id"  class="form-control" :class="{ 'is-invalid': form.errors.has('category_id') }" id="category_id" >
                      <option value="">Select Category</option>
                      <option :value="category.id" v-for="category in getCategoryList" :key="category.id">{{ category.name }}</option>
                    </select>
                   <has-error :form="form" field="category_id"></has-error>
                  </div>

                  <div class="form-group">
                    <label for="name">Sub Category Name</label>
                    <input v-model="form.name"  type="text" name="name"  class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" id="name" placeholder="Enter Sub Category Name">
                   <has-error :form="form" field="name"></has-error>
                  </div>

                 

                    <div class="form-group ">
                    <label for="status pr-5"> Status  </label> 
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



                <!-- /.card-body -->

                <div class="form-group">
                  <router-link to="/list-subcategory" class="btn btn-danger font-weight-bold">Cancel </router-link>
                  <button type="reset"class="btn btn-warning  font-weight-bold text-md">Reset</button>
                 <button type="submit" class="btn btn-success font-weight-bold">Update Sub Category</button>
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
  name:'edit',

mounted(){
        axios.get('/editsubCategory/'+this.$route.params.subcategoryId).then((response)=>{
          this.form.fill(response.data.viewData)
        });
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
       name: '',
       category_id: '',
       status: '',
       
      })
    }
  },

  methods: {
    subcategoryUpdate() {
      // Submit the form via a POST request
      this.form.post(`/subcategoryUpdate/${this.$route.params.subcategoryId}`)
            .then(({response }) =>{ 
            this.$router.push('/list-subcategory');
            
          Toast.fire({
              icon: 'success',
              title: 'Sub Category Updated Successfully'
          })
             
          
                  
        }).catch(() =>{

        });
    }
  }
};
</script>

<style>

</style>
