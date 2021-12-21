<template>
    <div>
        <h3 class="text-center">افزودن پست</h3>
        <div class="row">
            <!-- <div class="card">
                <div class="card-body"> -->
                    <div class="col-md-6">
                        <form @submit.prevent="addPost">
                            <div class="form-group">
                                <label class="mt-2">عنوان</label>
                                <input type="text" class="form-control mt-2" v-model="post.title">
                            </div>
                            <div class="form-group">
                                <label class="mt-2">توضیحات</label>
                                <input type="text" class="form-control mt-2" v-model="post.description">
                            </div>
                            <button type="submit" class="btn btn-primary text-white mt-3">
                                افزودن پست
                            </button>
                        </form>
                    </div>
                <!-- </div>
            </div> -->
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
        methods: {
            addPost() {
  
                this.axios
                    .post('http://127.0.0.1:8000/api/post/create', this.post)
                    .then(response => (
                        this.$router.push({name: 'posts'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>