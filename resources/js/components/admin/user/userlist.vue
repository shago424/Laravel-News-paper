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
              <li class="breadcrumb-item active">User List</li>
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
            <div class="panel panel-primary panel-outline" style="border:solid 3px #85929E">
              <div class="panel-header" style="background:#85929E">
              <h5 class="card-title p-2 font-weight-bold">User List</h5>
               <div class="text-right p-2">
               <router-link to="/add-user" class="btn btn-warning font-weight-bold">Add User</router-link>
              </div>
              </div>
              <div class="panel-body p-3">
                <table class="table table-bordered table-sm table-hover">
                  <thead>
                    <tr style="background:#1F523F;color:white">
                      
                      <th>#</th>
                      <th>User ID</th>
                      <th>Name</th>
                      <th>Role</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for = "(userlist,index) in getUserList" :key="userlist.id">
                      <td>{{ index+1 }}</td>
                      <td>{{ userlist.id}}</td>
                      <td>{{ userlist.name }}</td>
                      <td>{{ userlist.role_name }}</td>
                       <td>{{ userlist.email }}</td>
                      <td class="text-center">
                      <router-link :to="`/edit-user/${userlist.id}`" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></router-link>
                       <a @click.prevent="userDelete(userlist.id)" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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
      this.$store.dispatch('getUserList')
    },

    computed:{
      getUserList(){
       return this.$store.getters.userList 
      }
    },
 

  methods: {
   userDelete(id){
    axios.get('/userDelete/'+id).then((response)=>{
      this.$store.dispatch('getuserList')

        Toast.fire({
              icon: 'success',
              title: 'User Deleted Successfully'
          })
    })
   }
  }
};
</script>

<style>

</style>
