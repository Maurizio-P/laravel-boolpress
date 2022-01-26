<template>
  <div>
      <h1>Pagina show</h1>

    <h3>TItolo: {{post.title}}</h3>
    <p>{{post.article}}</p>
  </div>
</template>

<script>
export default {
    data() {
        return {
            post: [] 
        };
    },
    methods: {
        fetchPost() {
            const url = "/api/posts/" + this.$route.params.id;
            window.axios
                .get(url)
                .then((resp) => {
                    this.post = resp.data;
                })
                // .catch(() => {
                //     this.$router.push({ name: "not-found" });
                // });
        },
    },
    mounted() {
        this.fetchPost();
    },
};
</script>

<style>

</style>