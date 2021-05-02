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
              <li class="breadcrumb-item active">Post List</li>
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
            <div class="panel panel-primary panel-outline" style="border:solid 3px #34495E;">
              <div class="panel-header" style="background:#34495E;color:#fff">
              <h5 class="card-title p-2 font-weight-bold">Post List</h5>
               <div class="text-right p-2">
               <router-link to="/add-post" class="btn btn-warning font-weight-bold">Add Post</router-link>
              </div>
              </div>
              <div class="panel-body p-3" style="background:#FAFAF9">
                <table class="table table-bordered table-sm table-hover">
                  <thead>
                    <tr style="background:#138D75;color:#fff">
                      
                      <th>#</th>
                      <th>ID</th>
                      <th>CatName</th>
                      <th>Sub Name</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Created At</th>        
                      <th>Status</th>
                      <th>Image</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for = "(postlist,index) in getpostList" :key="postlist.id">
                      <td>{{ index+1 }}</td>
                      <td>{{ postlist.id}}</td>
                      <td>{{ postlist.category.name }}</td>
                       <td>{{ postlist.subcategory.name }}</td>
                      <td>{{ postlist.title | shortlength(50,".......")}}</td>
                      <td>{{ postlist.description | shortlength(50,".......") }}</td>
                      
                      <td width="10%">{{ postlist.created_at | timeformat}}</td>
                      <td>{{ postlist.status }}</td>
                      <td width="6%"><img :src="`upload/postimage/${postlist.image}`" alt="" width="50px" height="50px" /></td>
                      <td class="text-center" width="8%">
                      <router-link :to="`/edit-post/${postlist.id}`" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></router-link>
                       <a @click.prevent="postDelete(postlist.id)" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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
  name:'postlist',

    mounted(){
      // From Category List
      this.$store.dispatch('getpostList')
    },

    computed:{
      getpostList(){
       return this.$store.getters.postList 
      }
    },
 

  methods: {
   postDelete(id){
    axios.get('/postDelete/'+id).then((response)=>{
       Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
      this.$store.dispatch('getpostList')
     
        // Toast.fire({
        //       icon: 'success',
        //       title: 'Post Deleted Successfully'
        //   })
    })
   }
  }
};
</script>

<style>

</style>
