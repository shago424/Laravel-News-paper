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
              <li class="breadcrumb-item active">Update User</li>
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
            <div class="panel panel-primary panel-outline" style="border:solid 3px #85929E">
              <div class="panel-header" style="background:#85929E">
              <h5 class="card-title p-2 font-weight-bold">Update User</h5>
               <div class="text-right p-2">
               <router-link to="/list-user" class="btn btn-warning font-weight-bold"> User List</router-link>
              </div>
              </div>
              <div class="panel-body p-3">
                <form role="form" @submit.prevent='userUpdate' autocomplete="off">

                   <div class="form-group">
                    <label for="roles"> Role Name</label>
                    <input type="text" v-model="form.roles"  name="roles"  class="form-control" :class="{ 'is-invalid': form.errors.has('roles') }" id="roles" >
                   <has-error :form="form" field="roles"></has-error>
                  </div>

                  <div class="form-group">
                    <label for="name">Name</label>
                    <input v-model="form.name"  type="text" name="name"  class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" id="name" placeholder="Enter Name">
                   <has-error :form="form" field="name"></has-error>
                  </div>

                   <div class="form-group">
                    <label for="email">Email</label>
                    <input v-model="form.email"  type="email" name="email"  class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" id="email" placeholder="Enter Email" autocomplete="off">
                   <has-error :form="form" field="email"></has-error>
                  </div>

                    <div class="form-group">
                    <label for="password">Password</label>
                    <input v-model="form.password"  type="password" name="password"  class="form-control" :class="{ 'is-invalid': form.errors.has('password') }" id="password" placeholder="Enter Password" autocomplete="off">
                   <has-error :form="form" field="password"></has-error>
                  </div>

                  <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input v-model="form.cpassword"  type="password" name="cpassword"  class="form-control" :class="{ 'is-invalid': form.errors.has('cpassword') }" id="Confirm Password" placeholder="Enter cPassword" autocomplete="off">
                   <has-error :form="form" field="cpassword"></has-error>
                  </div>





                <!-- /.card-body -->

                <div class="form-group">
                  <router-link to="/list-user" class="btn btn-danger font-weight-bold">Cancel </router-link>
                  <button type="reset"class="btn btn-warning  font-weight-bold text-md">Reset</button>
                 <button type="submit" class="btn btn-success font-weight-bold">Update User</button>
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
     axios.get('/edituser/'+this.$route.params.userId).then((response)=>{
          this.form.fill(response.data.viewData)
          this.form.password =''
        })

      this.$store.dispatch('getRoleList')
    },

    computed:{
      getRoleList(){
       return this.$store.getters.roleList 
      }
    },



data () {
    return {
      // Create a new form instance
      form: new Form({
       name: '',
       roles: '',
       email: '',
       password: '',
       cpassword: '',
      
       
      })
    }
  },

  methods: {
    userUpdate () {
      // Submit the form via a POST request
      this.form.post(`/userUpdate/${this.$route.params.userId}`)
            .then(({response }) =>{ 
            this.$router.push('/list-user');
            
          Toast.fire({
              icon: 'success',
              title: 'User Updated Successfully'
          })
             
          this.form.name = null;
          this.form.roles = null;
          this.form.email = null;
          this.form.password = null;
          this.form.cpassword = null;

                  
        }).catch(() =>{

        });
    }
  }
};
</script>

<style>

</style>
