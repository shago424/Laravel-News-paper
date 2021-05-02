// Dashboard Component
import dashboard from './components/admin/dashboard/index.vue';

// Category Component

import addcategory from './components/admin/category/add.vue';
import listcategory from './components/admin/category/list.vue';
import editcategory from './components/admin/category/edit.vue';

// Sub Category Component

import addsubcategory from './components/admin/subcategory/subadd.vue';
import listsubcategory from './components/admin/subcategory/sublist.vue';
import editsubcategory from './components/admin/subcategory/subedit.vue';

// Sub Content Component

import addcontent from './components/admin/content/contentadd.vue';
import listcontent from './components/admin/content/contentlist.vue';
import editcontent from './components/admin/content/contentedit.vue';

// Post Component

import addpost from './components/admin/post/postadd.vue';
import listpost from './components/admin/post/postlist.vue';
import editpost from './components/admin/post/postedit.vue';

// User Component

import adduser from './components/admin/user/useradd.vue';
import listuser from './components/admin/user/userlist.vue';
import edituser from './components/admin/user/useredit.vue';
import showuser from './components/admin/user/usershow.vue';

// Role Component

import addrole from './components/admin/role/roleadd.vue';
import listrole from './components/admin/role/rolelist.vue';
import editrole from './components/admin/role/roleedit.vue';
import showrole from './components/admin/role/roleshow.vue';

// Front Site Header Footer

import addfronthf from './components/admin/frontsite/fronthf/hfadd.vue';
import listfronthf from './components/admin/frontsite/fronthf/hflist.vue';
import editfronthf from './components/admin/frontsite/fronthf/hfedit.vue';

// Frontend Route
import PublicHome from './components/public/PublicHome.vue';
// import PublicBlog from './components/public/blog/BlogPost.vue';
import SingleBlog from './components/public/blog/SingleBlog.vue';
 
export const  routes = [



    { path: '/home', component: dashboard },

    // Category Route
    { path: '/add-category', component: addcategory },
    { path: '/list-category', component: listcategory },
    { path: '/edit-category/:categoryId', component: editcategory },

    // Sub Category Route
    { path: '/add-subcategory', component: addsubcategory },
    { path: '/list-subcategory', component: listsubcategory },
    { path: '/edit-subcategory/:subcategoryId', component: editsubcategory },


// Content Route
    { path: '/add-content', component: addcontent },
    { path: '/list-content', component: listcontent },
    { path: '/edit-content/:contentId', component: editcontent },

    // Post Route
    { path: '/add-post', component: addpost },
    { path: '/list-post', component: listpost },
    { path: '/edit-post/:postId', component: editpost },

    // User Route
    { path: '/add-user', component: adduser },
    { path: '/list-user', component: listuser },
    { path: '/edit-user/:userId', component: edituser },
    { path: '/show-user/:userId', component: showuser },

    // Role Route
    { path: '/add-role', component: addrole },
    { path: '/list-role', component: listrole },
    { path: '/edit-role/:roleId', component: editrole },
    { path: '/show-role/:roleId', component: showrole },

// Front Site Header Footer
    { path: '/add-fronthf', component: addfronthf },
    { path: '/list-fronthf', component: listfronthf },
    { path: '/edit-fronthf/:fronthfId', component: editfronthf },


    
// Frontend Route
{ path: '/', component: PublicHome },
// { path: '/blog', component: PublicBlog }, 
{ path: '/post/:id', component: SingleBlog },
{ path: '/categories/:id', component: PublicHome }, 

  ]
