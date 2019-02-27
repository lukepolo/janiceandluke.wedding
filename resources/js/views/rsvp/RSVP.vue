<template>
  <div id="content">
    <form v-form="form" @submit.prevent="search">
      <input name="search" type="text" v-model="form.search" validate />
      <button class="button" :disabled="!form.isValid()">Submit</button>
    </form>

    <pre>{{ results }}</pre>
  </div>
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
