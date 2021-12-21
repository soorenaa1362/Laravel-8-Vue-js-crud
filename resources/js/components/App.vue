<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary"></span>
        </div>
  
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">خانه</router-link>
                    <router-link to="/posts" class="nav-item nav-link">پست ها</router-link>
                    <router-link to="/post/create" class="nav-item nav-link">افزودن پست</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>
  
<script>
    export default {}
</script>