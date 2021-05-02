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
              <li class="breadcrumb-item active">Category List</li>
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
          <div class="col-lg-8">
            <div class="panel panel-primary panel-outline" style="border:solid 3px lightgreen">
              <div class="card-header" style="background:lightgreen">
              <h5 class="card-title font-weight-bold">Category List</h5>
               <div class="text-right" v-for="checkpermission in getrolewisePermissionList" :key="checkpermission.id">
                <div v-if="checkpermission.name == 'post-create'">
               <router-link to="/add-category" class="btn btn-primary font-weight-bold">Add Category</router-link>
               </div>
              </div>
              </div>
              <div class="panel-body p-3">
                <table class="table table-bordered table-sm table-hover">
                  <thead>
                    <tr class="bg-secondary">
                      
                      <th>#</th>
                      <th>Category ID</th>
                      <th>Category Name</th>
                      <th >Status</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for = "(categorylist,index) in getCategoryList" :key="categorylist.id">
                      <td>{{ index+1 }}</td>
                      <td>{{ categorylist.id}}</td>
                      <td>{{ categorylist.name }}</td>
                      <td>{{ categorylist.status }}</td>
                      <td class="text-center">
                      <router-link :to="`/edit-category/${categorylist.id}`" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></router-link>
                       <a @click.prevent="categoryDelete(categorylist.id)" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                      </td>

                    </tr>

                  </tbody>
                </table>



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
  name:'catlist',

    mounted(){
      this.$store.dispatch('getCategoryList')
      this.$store.dispatch('getrolewisePermissionList')
    },

    computed:{
      getCategoryList(){
       return this.$store.getters.categoryList 
      },
      getrolewisePermissionList(){
       return this.$store.getters.rolewisepermissionList 
      },
    },
 

  methods: {
   categoryDelete(id){
    axios.get('/categoryDelete/'+id).then((response)=>{
      this.$store.dispatch('getCategoryList')

        Toast.fire({
              icon: 'success',
              title: 'Category Deleted Successfully'
          })
    })
   }
  }
};
</script>

<style>

</style>
