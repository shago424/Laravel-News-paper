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
              <li class="breadcrumb-item active">Fornt Header Footer</li>
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
            <div class="panel panel-primary panel-outline" style="border:solid 3px #360E37;">
              <div class="panel-header" style="background:#360E37;color:#fff">
              <h5 class="card-title p-2 font-weight-bold">Fornt Header Footer List</h5>
               <div class="text-right p-2">
               <router-link to="/add-fronthf" class="btn btn-warning font-weight-bold">Add Fornt Header Footer</router-link>
              </div>
              </div>
              <div class="panel-body p-3">
                <table class="table table-bordered table-sm table-hover">
                  <thead>
                    <tr style="background:#138D75;color:white">
                      
                      <th>#</th>
                      <th>ID</th>
                      <th>Header Text</th>
                      <th>Footer Text</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Link</th>                       
                      <th>Status</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for = "(fronthflist,index) in getfronthfList" :key="fronthflist.id">
                      <td>{{ index+1 }}</td>
                      <td>{{ fronthflist.id}}</td>
                      <td>{{ fronthflist.headtext }}</td>
                      <td>{{ fronthflist.foottext}}</td>
                      <td>{{ fronthflist.email }}</td>
                      <td>{{ fronthflist.mobile}}</td>
                      <td>{{ fronthflist.link}}</td>
                       
                      </td>
                      <td>{{ fronthflist.status }}</td>
                      <td class="text-center" width="10%">
                      <router-link :to="`/edit-fronthf/${fronthflist.id}`" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></router-link>
                       <a @click.prevent="fronthfDelete(fronthflist.id)" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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
  name:'fronthflist',

    mounted(){
      // From Category List
      this.$store.dispatch('getfronthfList')
    },

    computed:{
      getfronthfList(){
       return this.$store.getters.fronthfList 
      }
    },
 

  methods: {
   fronthfDelete(id){
    axios.get('/fronthfDelete/'+id).then((response)=>{
      this.$store.dispatch('getfronthfList')
        Toast.fire({
              icon: 'success',
              title: 'Header Footer Deleted Successfully'
          })
    })
   }
  }
};
</script>

<style>

</style>
