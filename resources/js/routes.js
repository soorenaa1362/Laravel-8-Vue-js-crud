import AllPosts from './components/Posts/AllPost.vue';
import AddPost from './components/Posts/AddPost.vue';
import EditPost from './components/Posts/EditPost.vue';
  
export const routes = [
    {
        name: 'posts',
        path: '/posts',
        component: AllPosts
    },
    {
        name: 'createPost',
        path: '/post/create',
        component: AddPost
    },
    {
        name: 'editPost',
        path: '/edit/:id',
        component: EditPost
    },

];