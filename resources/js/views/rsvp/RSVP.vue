<template>
  <section class="content">
    <div class="gradient">
      <div class="gradient-box gradient-box-lightest"></div>
      <div class="gradient-box gradient-box-light"></div>
      <div class="gradient-box gradient-box-dark"></div>
      <div class="gradient-box gradient-box-darkest"></div>
    </div>

    <div class="section">
      <div class="section--content">
        <h1 class="secondary">RSVP</h1>
        <h2>Search for your Invitation</h2>
        <p>
          Enter your name below:
        </p>
        <form v-form="form" @submit.prevent="search">
          <div class="flyform--group">
            <input
              name="search"
              type="text"
              v-model="form.search"
              placeholder=" "
              validate
            />
            <label for="branch">Last Name</label>
          </div>

          <div class="flyform--btns">
            <button class="btn" :disabled="!form.isValid()">Submit</button>
          </div>
        </form>
      </div>
    </div>

    <pre>{{ results }}</pre>
  </section>
</template>

<script>
import Vue from "vue";

export default Vue.extend({
  data() {
    return {
      form: this.createForm({
        search: null,
      }).validation({
        rules: {
          search: "required",
        },
      }),
    };
  },
  methods: {
    search() {
      this.$store.dispatch("guest/search", this.form.search);
    },
  },
  computed: {
    results() {
      return this.$store.state.guest.searchResults;
    },
  },
});
</script>
