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
               <router-link :to="{name:'show', params: {id: post.id} }"> <h5>{{post.title}}</h5> </router-link>
           </div>

        </div>

    <div class="box-link d-flex my-4">

        <button class="page-link" @click="callAxios(currentPage - 1)">
            Pagina precedente
        </button>

        <button class="page-link">
            {{currentPage}}
        </button>
        
        <button class="page-link" @click="callAxios(currentPage + 1)">
            Pagina successiva
        </button>
    </div>
        
</div>
</template>

<script>
export default {
    name: 'Home',
    data() {
        return {
            // variabili e array
            msg: 'ciao questo è stampato con vue',
            posts: [],
            currentPage: 1,
            lastPage: null,
        };
    },
    methods:{
        callAxios(page = 1){
            window.axios.get("/api/posts?page=" + page).then((resp) => {
            this.posts = resp.data.data;
            this.currentPage = resp.data.current_page;
            this.lastPage = resp.data.last_page;
        })
        },
    },

    mounted() {
        this.callAxios()
    }
}
</script>

<style>

</style>