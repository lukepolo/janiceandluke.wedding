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
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
    <form v-form="selectedGuestForm" @submit.prevent="selectGuest">
      <template v-for="result in results">
        <p>
          <label>
            <input
              v-model="selectedGuestForm.guest"
              name="guest"
              type="radio"
              :value="result.id"
            />
            {{ result.first_name }} {{ result.last_name }}
          </label>
        </p>
      </template>
      <button class="btn" :disabled="!selectedGuestForm.isValid()">
        Submit
      </button>
    </form>
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
