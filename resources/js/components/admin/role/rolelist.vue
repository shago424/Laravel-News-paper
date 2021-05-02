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
              <li class="breadcrumb-item active">Role List</li>
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
            <div class="panel panel-primary panel-outline" style="border:solid 3px #1F523F">
              <div class="panel-header" style="background:#1F523F">
              <h5 class="card-title p-2 font-weight-bold text-white">Role List</h5>
               <div class="text-right p-2">
               <router-link to="/add-role" class="btn btn-warning font-weight-bold">Add Role</router-link>
              </div>
              </div>
              <div class="panel-body p-3">
                <table class="table table-bordered table-sm table-hover">
                  <thead>
                    <tr style="background:#CEE04D">
                      
                      <th>#</th>
                      <th>Role ID</th>
                      <th>Role Name</th>
                      <th>Guard Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for = "(rolelist,index) in getRoleList" :key="rolelist.id">
                      <td>{{ index+1 }}</td>
                      <td>{{ rolelist.id}}</td>
                      <td>{{ rolelist.name }}</td>
                      <td class="text-center">
                      <router-link :to="`/edit-role/${rolelist.id}`" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></router-link>
                       <a @click.prevent="roleDelete(rolelist.id)" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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
  name:'userlist',

    mounted(){
      this.$store.dispatch('getRoleList')
      this.$store.dispatch('getrolewisePermissionList')
    },

    computed:{
      getRoleList(){
       return this.$store.getters.roleList 
      },
      getrolewisePermissionList(){
       return this.$store.getters.rolewisepermissionList 
      },
    },
 

  methods: {
   roleDelete(id){
    axios.get('/roleDelete/'+id).then((response)=>{
      this.$store.dispatch('getroleList')

        Toast.fire({
              icon: 'success',
              title: 'Role Deleted Successfully'
          })
    })
   }
  }
};
</script>

<style>

</style>
