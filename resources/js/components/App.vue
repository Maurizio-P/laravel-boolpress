<template>
<div>

  <h1>
      {{msg}}
  </h1>

    <div class="post" v-if="posts.length === 0">
        Non sono ancora presenti post
    </div>

        <div class="card" v-else>
            <h2>qui stampo il post</h2>

        </div>
</div>
  
</template>

<script>
export default {
    name: "App",
    data() {
        return {
            // variabili e array
            msg: 'ciao questo è stampato con vue',
            posts: [],
        };
    },
    mounted() {
        axios.get("/api/posts").then((resp) => {
            this.posts = resp.data
        })
    }
}
</script>

<style>

</style>