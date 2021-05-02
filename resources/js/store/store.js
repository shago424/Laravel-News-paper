export default{
	 
  state: {
    category:[],
    subcategory:[],
    content:[],
    post:[],
    user:[],
    role:[],
    permission:[],
    rolewisePermission:[],
    fronthf:[],
    schoolCollege:[],
    singlePost:[],
    latestPost:[],
    argentPost:[],
    sliderPost:[],
    nuPost:[],
    puPost:[],
    sportsPost:[],
    gjPost:[],
    pjPost:[],
    popularPost:[],
    releatedPost:[],
   
  },

  getters: {
    categoryList(state){
    	return state.category
    },
     subcategoryList(state){
      return state.subcategory
    },
    contentList(state){
      return state.content
    },
     postList(state){
      return state.post
    },
    userList(state){
      return state.user
    },
     roleList(state){
      return state.role
    },
     permissionList(state){
      return state.permission
    },
     rolewisepermissionList(state){
      return state.rolewisePermission
    },
     fronthfList(state){
      return state.fronthf
    },
    schoolCollege(state){
      return state.schoolCollege
    },
    singlePost(state){
      return state.singlePost
    },
     latestPost(state){
      return state.latestPost
    },
     argentPost(state){
      return state.argentPost
    },
    sliderPost(state){
      return state.sliderPost
    },
    nuPost(state){
      return state.nuPost
    },
    puPost(state){
      return state.puPost
    },
    sportsPost(state){
      return state.sportsPost
    },
    gjPost(state){
      return state.gjPost
    },
    pjPost(state){
      return state.pjPost
    },
    popularPost(state){
      return state.popularPost
    },
    releatedPost(state){
      return state.releatedPost
    },
   


  },

  actions: {
    getCategoryList(context){
    	axios.get('/categoryList').then((response)=>{
    		context.commit('catList',response.data.categoriesList) 
    	}) 
    },

     getsubCategoryList(context){
      axios.get('/subcategoryList').then((response)=>{
        context.commit('subcatList',response.data.subcategoriesList) 
      }) 
    },
    getcontentList(context){
      axios.get('/contentList').then((response)=>{
        context.commit('contentList',response.data.contentsList) 
      }) 
    },
     getpostList(context){
      axios.get('/postList').then((response)=>{
        context.commit('postList',response.data.postsList) 
      }) 
    },

     getUserList(context){
      axios.get('/userList').then((response)=>{
        context.commit('userList',response.data.usersList) 
      }) 
    },
    getRoleList(context){
      axios.get('/roleList').then((response)=>{
        context.commit('roleList',response.data.rolesList) 
      }) 
    },
    getPermissionList(context){
      axios.get('/permissionList').then((response)=>{
        context.commit('permissionList',response.data.permissionsList) 
      }) 
    },
    getrolewisePermissionList(context){
      axios.get('/rolewisepermissionList').then((response)=>{
        context.commit('rolewisepermissionList',response.data.rolewisepermissionsList) 
      }) 
    },
    getfronthfList(context){
      axios.get('/fronthfList').then((response)=>{
        context.commit('fronthfList',response.data.fronthfsList) 
      }) 
    },
    getschoolCollege(context){
      axios.get('/schoolCollege').then((response)=>{
        context.commit('schoolCollege',response.data.schoolcollege) 
      }) 
    },
     getsinglePostbyId(context,playload){
      axios.get('/singlePost/'+playload).then((response)=>{
        context.commit('singlePost',response.data.singlePost) 
      }) 
    },
   getPostCatId(context,playload){
      axios.get('/categoryIdByPost/'+playload).then((response)=>{
        console.log(response.data.categoryIdByPosts)
        context.commit('categoryIdByPost',response.data.categoryIdByPosts) 
      }) 
    },
    SearchPost(context,playload){
      axios.get('/SearchPost?s='+playload).then((response)=>{
        
        context.commit('SearchPost',response.data.SearchPosts) 
      }) 
    },
    getlatestPost(context){
      axios.get('/latestPost').then((response)=>{
        context.commit('latestPost',response.data.latestPosts) 
      }) 
    },
    getargentPost(context){
      axios.get('/argentPost').then((response)=>{
        context.commit('argentPost',response.data.argentPosts) 
      }) 
    },
     getsliderPost(context){
      axios.get('/sliderPost').then((response)=>{
        context.commit('sliderPost',response.data.sliderPosts) 
      }) 
    },
     getnuPost(context){
      axios.get('/nuPost').then((response)=>{
        context.commit('nuPost',response.data.nuPosts) 
      }) 
    },
     getpuPost(context){
      axios.get('/puPost').then((response)=>{
        context.commit('puPost',response.data.puPosts) 
      }) 
    },
     getsportsPost(context){
      axios.get('/sportsPost').then((response)=>{
        context.commit('sportsPost',response.data.sportsPosts) 
      }) 
    },
    getgjPost(context){
      axios.get('/gjPost').then((response)=>{
        context.commit('gjPost',response.data.gjPosts) 
      }) 
    },
    getpjPost(context){
      axios.get('/pjPost').then((response)=>{
        context.commit('pjPost',response.data.pjPosts) 
      }) 
    },
    getpopularPost(context){
      axios.get('/popularPost').then((response)=>{
        context.commit('popularPost',response.data.popularPosts) 
      }) 
    },
    getreleatedPost(context){
      axios.get('/releatedPost').then((response)=>{
        context.commit('releatedPost',response.data.releatedPosts) 
      }) 
    },
  },


  mutations: {
     catList(state,responseData){
     	return state.category = responseData;
     },

     subcatList(state,responseData){
      return state.subcategory = responseData;
     },

     contentList(state,responseData){
      return state.content = responseData;
     },
     postList(state,responseData){
      return state.post = responseData;
     },

     userList(state,responseData){
      return state.user = responseData;
     },
     roleList(state,responseData){
      return state.role = responseData;
     },
     permissionList(state,responseData){
      return state.permission = responseData;
     },
     rolewisepermissionList(state,responseData){
      return state.rolewisePermission = responseData;
     },
      fronthfList(state,responseData){
      return state.fronthf = responseData;
     },
     schoolCollege(state,responseData){
      return state.schoolCollege = responseData;
     },
     singlePost(state,responseData){
      return state.singlePost = responseData;
     },
     categoryIdByPost(state,responseData){
      return state.allblogPost = responseData;
     },
      SearchPost(state,responseData){
      return state.allblogPost = responseData;
     },
      latestPost(state,responseData){
      return state.latestPost = responseData;
     },
     argentPost(state,responseData){
      return state.argentPost = responseData;
     },
     sliderPost(state,responseData){
      return state.sliderPost = responseData;
     },
     nuPost(state,responseData){
      return state.nuPost = responseData;
     },
     puPost(state,responseData){
      return state.puPost = responseData;
     },
     sportsPost(state,responseData){
      return state.sportsPost = responseData;
     },
     gjPost(state,responseData){
      return state.gjPost = responseData;
     },
     pjPost(state,responseData){
      return state.pjPost = responseData;
     },
     popularPost(state,responseData){
      return state.popularPost = responseData;
     },
     releatedPost(state,responseData){
      return state.releatedPost = responseData;
     },

  }

}