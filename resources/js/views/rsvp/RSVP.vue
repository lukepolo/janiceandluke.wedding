<template>
  <section class="content">
    <div class="gradient">
      <div class="gradient-box gradient-box-lightest"></div>
      <div class="gradient-box gradient-box-light"></div>
      <div class="gradient-box gradient-box-dark"></div>
      <div class="gradient-box gradient-box-darkest"></div>
    </div>

    <section class="section" v-if="!results || results.length === 0">
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
              @keydown="resetResults"
              v-focus
            />
            <label for="lastName">Last Name</label>
          </div>

          <div
            class="banner banner-danger"
            v-if="results && results.length === 0"
          >
            Uh oh! We can't find an invite matching that name.
            <br />
            Please reach out to us if you think we made a mistake.
          </div>

          <div class="flyform--btns">
            <button class="btn" :disabled="!searchForm.isValid()">
              Find my Invite
            </button>
          </div>
        </form>
      </div>
    </section>

    <section class="section" v-else>
      <div class="section--content">
        <h1 class="secondary">RSVP</h1>
        <h2>Search for your Invitation</h2>
        <p>
          We've found <span v-if="results.length === 1">one possible match</span
          ><span v-else>multiple matches</span> in the guest list. Please select
          your party from the list below:
        </p>

        <form v-form="selectedGuestForm" @submit.prevent="selectGuest">
          <template v-for="result in results">
            <div class="list--select">
              <label
                :class="{ selected: selectedGuestForm.guest === result.id }"
              >
                <input
                  v-model="selectedGuestForm.guest"
                  name="guest"
                  type="radio"
                  :value="result.id"
                />
                {{ result.guest_name }}
              </label>
            </div>
          </template>
          <div class="flyform--btns">
            <span class="btn--link" @click.prevent.stop="resetResults">
              Back
            </span>
            <button class="btn" :disabled="!selectedGuestForm.isValid()">
              Next
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
      }).validation({
        rules: {
          guest: "required",
        },
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
  watch: {
    $route: {
      immediate: true,
      handler() {
        this.searchForm.reset();
      },
    },
  },
  methods: {
    search() {
      this.$store.dispatch("guest/search", this.searchForm.search).then(() => {
        window.scrollTo(0, 0);
      });
    },
    selectGuest() {
      this.$router.push({
        name: "invite.guest",
        params: {
          guest: this.selectedGuestForm.guest,
        },
      });
    },
    resetResults() {
      this.selectedGuestForm.reset();
      this.$store.commit("guest/setSearchResults", null);
    },
  },
  computed: {
    results() {
      return this.$store.state.guest.searchResults;
    },
  },
  destroyed() {
    this.resetResults();
  },
});
</script>
