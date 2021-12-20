<template>
    <div>
        <h3 class="text-center">لیست پست ها</h3><br/>
  
        <table class="table table-bordered">
            <thead>
            <tr class="text-center">
                <th>آیدی</th>
                <th>عنوان</th>
                <th>توضیحات</th>
                <th>تاریخ ایجاد</th>
                <th>تاریخ بروزرسانی</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="post in posts" :key="post.id" class="text-center">
                <td>{{ post.id }}</td>
                <td>{{ post.title }}</td>
                <td>{{ post.description }}</td>
                <td>{{ post.created_at }}</td>
                <td>{{ post.updated_at }}</td>
                <td>
                    <div>
                        <router-link :to="{name: 'edit', params: { id: post.id }}" 
                        class="btn btn-primary btn-sm text-white">
                            ویرایش
                        </router-link>
                        <button class="btn btn-danger btn-sm text-white" @click="deletePost(post.id)">
                            حذف
                        </button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
  
<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:8000/api/posts') 
                .then(response => {
                    this.posts = response.data;
                });
        },
        methods: {
            deletePost(id) {
                this.axios
                    .delete(`http://127.0.0.1:8000/api/post/delete/${id}`)
                    .then(response => {
                        let i = this.posts.map(item => item.id).indexOf(id); // find index of your object
                        this.posts.splice(i, 1)
                    });
            }
        }
    }
</script>