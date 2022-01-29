<template>
  <div>
    <h1>
      {{ msg }}
    </h1>

    <div class="post" v-if="posts.length === 0">
      Non sono ancora presenti post
    </div>

    <div class="div" v-else>
      <div class="card" v-for="(post, i) in posts" :key="i">
        <router-link :to="{ name: 'show', params: { id: post.id } }">
          <h5>{{ post.title }}</h5>
        </router-link>
      </div>
    </div>

    <div class="box-link d-flex my-4">
      <button
        v-if="currentPage > 1"
        class="page-link"
        @click="callAxios(currentPage - 1)"
      >
        Pagina precedente
      </button>

      <button class="page-link">
        {{ currentPage }}
      </button>

      <button
        v-if="currentPage != lastPage"
        class="page-link"
        @click="callAxios(currentPage + 1)"
      >
        Pagina successiva
      </button>
    </div>

    <div class="category-box my-4">
      <h4>Categorie disponibili:</h4>
      <div class="box-link" v-for="category in categories" :key="category.id">
        <router-link :to="{ name: 'category.show', params: {id: category.id} }">
          {{ category.name }}
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      // variabili e array
      msg: "ciao questo è stampato con vue",
      posts: [],
      currentPage: 1,
      lastPage: null,
      categories: [],
    };
  },
  methods: {
    callAxios(page = 1) {
      window.axios.get("/api/posts?page=" + page).then((resp) => {
        this.posts = resp.data.posts.data;
        this.currentPage = resp.data.posts.current_page;
        this.lastPage = resp.data.posts.last_page;
        this.categories = resp.data.categories;
      });
    },
  },
  mounted() {
    this.callAxios();
  },
};
</script>

<style>

</style>