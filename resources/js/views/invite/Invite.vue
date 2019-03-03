<template>
  <section class="content">
    <div class="gradient">
      <div class="gradient-box gradient-box-lightest"></div>
      <div class="gradient-box gradient-box-light"></div>
      <div class="gradient-box gradient-box-dark"></div>
      <div class="gradient-box gradient-box-darkest"></div>
    </div>

    <section class="section">
      <div class="section--content">
        <h1 class="secondary">RSVP</h1>
        <h2>Search for your Invitation</h2>
        <p>
          Enter your last name below:
        </p>
        <form v-form="searchForm" @submit.prevent="search">
          <div class="flyform--group">
            <input
              id="lastName"
              name="search"
              type="text"
              v-model="searchForm.search"
              placeholder=" "
              validate
            />
            <label for="lastName">Last Name</label>
          </div>

          <div class="flyform--btns">
            <button class="btn" :disabled="!searchForm.isValid()">
              Find my Invite
            </button>
          </div>
        </form>
      </div>
    </section>
  </section>
</template>

<script>
import Vue from "vue";

export default Vue.extend({
  data() {
    return {
      selectedGuestForm: this.createForm({
        guest: null,
      }),
      searchForm: this.createForm({
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
      this.$store.dispatch("guest/search", this.searchForm.search);
    },
    selectGuest() {
      alert(`select guest ${this.selectedGuestForm.guest}`);
    },
  },
  computed: {
    results() {
      return this.$store.state.guest.searchResults;
    },
  },
});
</script>
