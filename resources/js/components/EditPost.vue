<template>
    <div>
        <h3 class="text-center">ویرایش پست</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updatePost">
                    <div class="form-group">
                        <label class="mt-2">عنوان</label>
                        <input type="text" class="form-control mt-2" v-model="post.title">
                    </div>
                    <div class="form-group">
                        <label class="mt-2">توضیحات</label>
                        <input type="text" class="form-control mt-2" v-model="post.description">
                    </div>
                    <button type="submit" class="btn btn-primary text-white mt-3">بروز رسانی</button>
                </form>
            </div>
        </div>
    </div>
</template>
  
<script>
    export default {
        data() {
            return {
                post: {}
            }
        },
        created() {
            this.axios
                .get(`http://127.0.0.1:8000/api/post/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.post = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updatePost() {
                this.axios
                    .post(`http://127.0.0.1:8000/api/post/update/${this.$route.params.id}`, this.post)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>