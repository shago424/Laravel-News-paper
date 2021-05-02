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
              <li class="breadcrumb-item active">Content</li>
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
            <div class="panel panel-primary panel-outline" style="border:solid 3px crimson;">
              <div class="panel-header" style="background:crimson;color:#fff">
              <h5 class="card-title p-2 font-weight-bold">Content List</h5>
               <div class="text-right p-2">
               <router-link to="/add-content" class="btn btn-info font-weight-bold">Add Content</router-link>
              </div>
              </div>
              <div class="panel-body p-3">
                <table class="table table-bordered table-sm table-hover">
                  <thead>
                    <tr class="bg-success">
                      
                      <th>#</th>
                      <th>ID</th>
                      <th>Category Name</th>
                      <th>Sub Category Name</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Video Link</th> 
                      <th>Crated At</th>                    
                      <th >Status</th>
                      <th>Image</th>
                      <th >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for = "(contentlist,index) in getcontentList" :key="contentlist.id">
                      <td>{{ index+1 }}</td>
                      <td>{{ contentlist.id}}</td>
                      <td>{{ contentlist.category.name }}</td>
                      <td>{{ contentlist.subcategory.name }}</td>
                      <td>{{ contentlist.title }}</td>
                      <td>{{ contentlist.description | shortlength(20,".......") }}</td>
                      <td>{{ contentlist.video_link}}</td>
                      <td width="10%">{{ contentlist.created_at | timeformat}}</td>
                      <td>{{ contentlist.status}}</td>
                      <td>{{ contentlist.status }}</td>
                      <td class="text-center" width="10%">
                      <router-link :to="`/edit-content/${contentlist.id}`" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></router-link>
                       <a @click.prevent="contentDelete(contentlist.id)" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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
  name:'contentlist',

    mounted(){
      // From Category List
      this.$store.dispatch('getcontentList')
    },

    computed:{
      getcontentList(){
       return this.$store.getters.contentList 
      }
    },
 

  methods: {
   contentDelete(id){
    axios.get('/contentDelete/'+id).then((response)=>{
      this.$store.dispatch('getcontentList')
        Toast.fire({
              icon: 'success',
              title: 'Content Deleted Successfully'
          })
    })
   }
  }
};
</script>

<style>

</style>
