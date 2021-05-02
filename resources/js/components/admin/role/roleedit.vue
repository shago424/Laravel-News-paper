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
              <li class="breadcrumb-item active">Update Role</li>
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
          <div class="col-lg-12">
            <div class="panel panel-primary panel-outline" style="border:solid 3px #1F523F">
              <div class="panel-header" style="background:#1F523F">
              <h5 class="card-title p-2 font-weight-bold text-white">Update Role</h5>
               <div class="text-right p-2">
               <router-link to="/list-role" class="btn btn-warning font-weight-bold">Role List</router-link>
              </div>
              </div>
              <div class="panel-body p-3">
                <form role="form" @submit.prevent='roleUpdate'>
                <div class="row">
                  
                  
                  <div class="col-md-4">

                     <div class="form-group">
                    <label for="name">Role Name</label>
                    <input v-model="form.name"  type="text" name="name"  class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" id="name" placeholder="Enter Role Name">
                   <has-error :form="form" field="name"></has-error>
                  </div>

                  </div>

                <div class="col-md-8">
                   <div class="card-header bg-info" >
                          <div class="row">
                          <div class="col-md-3">View</div>
                          <div class="col-md-3">Add</div>
                          <div class="col-md-3">Edit</div>
                          <div class="col-md-3">Delete</div>
                              
                          </div>
                        </div>
                 <div class="row pt-3">
                   <div class="col-md-3" v-for="permission in getPermissionList">
                     <div class="row">
                       <div class="col-md-3">
                       
                          <div class="form-group">
                            <input type="checkbox" v-model="form.permission" :value="permission.id"  name="permission"   class="form-control" :class="{ 'is-invalid': form.errors.has('permission') }">
                           <has-error :form="form" field="permission"></has-error>
                          </div>

                       </div>
                       <div class="col-md-9">
                         {{ permission.name }}
                       </div>
                     </div>
                   </div>
                 </div>
                   <div class="form-group text-right pull-right" >
                  <button type="submit" class="btn btn-success font-weight-bold">Update Role</button>
                  <button type="reset"class="btn btn-warning  font-weight-bold text-md">Reset</button>
                 <router-link to="/list-category" class="btn btn-danger font-weight-bold">Cancel </router-link>
                </div>
                  </div> <!-- 8 -->

              
                   
                 
                </div>

                </form>
                <!-- /.card-body -->

             


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
  name:'edit'
  ,
data () {
    return {
      // Create a new form instance
      form: new Form({
       name: '',
       permission: [],
       
      })
    }
  },
   mounted(){

    axios.get('/editrole/'+this.$route.params.roleId).then((response)=>{
          this.form.name = response.data.role.name;
          for(let i=0;i<response.data.permission.length;i++){
            for(let j=0;j<=response.data.slectedRoleLength;j++){
              if(response.data.permission[i].id == response.data.rolePermissions[j]){
                this.form.permission[i] = response.data.rolePermissions[j];
              }
            }
          }
          
        })

      this.$store.dispatch('getPermissionList')
    },

    computed:{
      getPermissionList(){
       return this.$store.getters.permissionList 
      }
    },
 

  methods: {
    roleUpdate () {
      // Submit the form via a POST request
      this.form.post(`/roleUpdate/${this.$route.params.roleId}`).then(({response }) =>{ 
            this.$router.push('/list-role');
            
          Toast.fire({
              icon: 'success',
              title: 'Role Updated Successfully'
          })
             
          this.form.name = null;
                  
        }).catch(() =>{

        });
    }
  }
};
</script>

<style>

</style>
