<template>
  <div>
    <h1>Show category</h1>

    <h2 v-if="category.posts.length === 0" >Non esiste ancora nessun post con questa categoria</h2>   

    <div v-else >
        <div class="card" v-for="post in category.posts" :key="post.id">
            <h5>{{post.title}}</h5>
            <p>{{post.article}}</p>
        </div>
    </div>
  </div>
</template>

<script>
export default {
    name: "ShowCategory",
    data(){
        return{
            category: []
        }
    },
    methods:{
        callAxios(){
            window.axios.get("/api/categories/" + this.$route.params.id).then((resp) => {
            this.category = resp.data
        })
        }
    },
    mounted() {
        this.callAxios()
    }

}
</script>

<style>

</style>