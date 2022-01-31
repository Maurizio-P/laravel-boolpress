<template>
  <div>
    <h1>Pagina Contact</h1>

    <form @submit.prevent="onSubmit">
      <div class="form-group mb-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control" v-model="form.name" />
      </div>

      <div class="form-group mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" v-model="form.email" />
      </div>

      <div class="form-group mb-3">
        <label class="form-label">Messaggio</label>
        <textarea
          type="text"
          class="form-control"
          v-model="form.message"
        ></textarea>
      </div>

      <button class="btn btn-success">Invia</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      submitForm: false,
      form: {
        name: "",
        email: "",
        message: "",
      },
    };
  },
  methods: {
    onSubmit() {
      window.axios.post("/api/contact", this.form).then((resp) => {
        this.submitForm = true;
      });
    },
  },
};
</script>

<style>
</style>