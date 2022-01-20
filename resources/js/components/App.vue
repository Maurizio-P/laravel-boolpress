<template>
<div>

  <h1>
      {{msg}}
  </h1>

    <div class="post" v-if="posts.length === 0">
        Non sono ancora presenti post
    </div>

        <div class="div" v-else>
           <div class="card" v-for="post, i  in posts" :key="i">
               <h5>{{post.title}}</h5>
           </div>

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
        window.axios.get("/api/posts").then((resp) => {
            this.posts = resp.data
        })
    }
}
</script>

<style>

</style>