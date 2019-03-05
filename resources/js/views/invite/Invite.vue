<template>
  <section class="content">
    <div class="gradient">
      <div class="gradient-box gradient-box-lightest"></div>
      <div class="gradient-box gradient-box-light"></div>
      <div class="gradient-box gradient-box-dark"></div>
      <div class="gradient-box gradient-box-darkest"></div>
    </div>

    <form @submit.prevent="updateRsvp" class="section section-large">
      <div class="section--content">
        <h1 class="secondary">My Invitation</h1>
        <div class="invite">
          <guest-invite
            :guest="guest"
            :guest-form="guestForm"
            v-if="guestForm"
          ></guest-invite>
          <guest-invite
            :guest="plusOne"
            :guest-form="plusOneForm"
            v-if="plusOneForm"
          ></guest-invite>
        </div>

        <div class="flyform--btns">
          <button class="btn--link" :disabled="canSubmit">Back</button>
          <button class="btn">Send RSVP</button>
        </div>
      </div>
    </form>
  </section>
</template>

<script>
import Vue from "vue";

import GuestInvite from "./components/GuestInvite";

export default Vue.extend({
  components: {
    GuestInvite,
  },
  data() {
    return {
      guestForm: null,
      plusOneForm: null,
    };
  },
  watch: {
    $route: {
      immediate: true,
      handler() {
        this.$store.dispatch("guest/show", this.$route.params.guest);
      },
    },
    guest: {
      immediate: true,
      handler(guest) {
        if (guest) {
          this.guestForm = this.createGuestForm(guest);
          if (guest.guest) {
            this.plusOneForm = this.createGuestForm(guest.guest);
          }
        }
      },
    },
  },
  methods: {
    updateRsvp() {
      this.$store
        .dispatch("guest/update", {
          guestForm: this.guestForm.data(),
          plusOneForm: this.plusOneForm && this.plusOneForm.data(),
        })
        .then(() => {
          alert("success");
        })
        .catch(() => {
          this.alertService.info("info message", "This is an Info Alert");
        });
    },
    createGuestForm(guest) {
      let form = this.createForm({
        // TODO - this isn't needed but required for now until i fix validation
        guest,
        guest_rsvp: {
          attending: null,
          attending_rehearsal_dinner: null,
        },
        guest_food_option: {
          wedding_selection: {
            entree: null,
          },
          rehearsal_selection: {
            entree: null,
          },
          dietary_restrictions: null,
        },
      }).validation({
        rules: {
          guest_rsvp: {
            attending: "required",
            attending_rehearsal_dinner: "require_rehearsal_dinner",
          },
          guest_food_option: {
            wedding_selection: {
              // TODO - varie needs to handle this
              // entree: 'required_if:guest_rsvp.attending,true',
              entree: "require_dinner_entree",
            },
            rehearsal_selection: {
              // TODO - varie needs to handle this
              // entree: 'required_if:guest_rsvp.attending_rehearsal_dinner,true',
              entree: "require_rehearsal_dinner_entree",
            },
          },
        },
      });
      if (guest.rsvp && guest.food_options) {
        form.fill({
          guest_rsvp: guest.rsvp,
          guest_food_option: guest.food_options,
        });
      }
      return form;
    },
  },
  computed: {
    guest() {
      return this.$store.state.guest.guest;
    },
    plusOne() {
      return this.guest && this.guest.guest;
    },
    canSubmit() {
      if (this.guest && this.guestForm && this.guestForm.isValid()) {
        if (!this.plusOne) {
          return true;
        }
        if (this.plusOne && this.plusOneForm && this.plusOneForm.isValid()) {
          return true;
        }
      }
      return false;
    },
  },
});
</script>
