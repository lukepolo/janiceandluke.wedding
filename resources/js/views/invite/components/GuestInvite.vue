<template>
  <div class="invite--item" v-if="guest">
    <h3>{{ guest.first_name }} {{ guest.last_name }}</h3>
    <hr />

    <div class="invite--section">
      <h4 class="text-left">
        Wedding :
        <span class="muted">September 14, 2019 | 4:30 PM</span>
      </h4>
      <div class="toggle">
        <div class="toggle--item">
          <input
            type="radio"
            :id="`wedding_accept_${guest.id}`"
            :name="`wedding_attending_${guest.id}`"
            :value="true"
            v-model="guestForm.guest_rsvp.attending"
          />
          <label :for="`wedding_accept_${guest.id}`">Accept</label>
        </div>

        <div class="toggle--item">
          <input
            type="radio"
            :id="`wedding_regret_${guest.id}`"
            :name="`wedding_attending_${guest.id}`"
            :value="false"
            v-model="guestForm.guest_rsvp.attending"
          />
          <label :for="`wedding_regret_${guest.id}`">Regret</label>
        </div>
      </div>

      <template v-if="guestForm.guest_rsvp.attending">
        <h4 class="text-left">Meal Choice :</h4>

        <div class="toggle toggle-muted">
          <div class="toggle--item">
            <input
              type="radio"
              :id="`wedding_entree_filet_${guest.id}`"
              :name="`wedding_entree_${guest.id}`"
              value="filet_mignon"
              v-model="guestForm.guest_food_option.wedding_selection.entree"
            />
            <label :for="`wedding_entree_filet_${guest.id}`">
              <div class="toggle--img">
                <icon-cow></icon-cow>
              </div>
              Filet Mignon
            </label>
          </div>

          <div class="toggle--item">
            <input
              type="radio"
              :id="`wedding_entree_stir_fry_${guest.id}`"
              :name="`wedding_entree_${guest.id}`"
              value="tofu_stir_fry"
              v-model="guestForm.guest_food_option.wedding_selection.entree"
            />
            <label :for="`wedding_entree_stir_fry_${guest.id}`">
              <div class="toggle--img">
                <icon-vegetable></icon-vegetable>
              </div>
              Tofu Stir-Fry
            </label>
          </div>
        </div>
      </template>
    </div>

    <div
      class="invite--section invite--section-secondary"
      v-if="guest.allowed_rehearsal_dinner"
    >
      <h4 class="text-left">
        Rehearsal Dinner :
        <span class="muted">September 13, 2019 | 6:00 PM</span>
      </h4>
      <div class="toggle">
        <div class="toggle--item">
          <input
            type="radio"
            :id="`rehearsal_accept_${guest.id}`"
            :name="`rehearsal_attending_${guest.id}`"
            :value="true"
            v-model="guestForm.guest_rsvp.attending_rehearsal_dinner"
          />
          <label :for="`rehearsal_accept_${guest.id}`">Accept</label>
        </div>

        <div class="toggle--item">
          <input
            type="radio"
            :id="`rehearsal_regret_${guest.id}`"
            :name="`rehearsal_attending_${guest.id}`"
            :value="false"
            v-model="guestForm.guest_rsvp.attending_rehearsal_dinner"
          />
          <label :for="`rehearsal_regret_${guest.id}`">Regret</label>
        </div>
      </div>

      <template v-if="guestForm.guest_rsvp.attending_rehearsal_dinner">
        <h4 class="text-left">Meal Choice :</h4>
        <div class="toggle toggle-muted">
          <div class="toggle--item">
            <input
              type="radio"
              :id="`rehearsal_entree_filet_${guest.id}`"
              :name="`rehearsal_entree_${guest.id}`"
              value="filet_mignon"
              v-model="guestForm.guest_food_option.rehearsal_selection.entree"
            />
            <label :for="`rehearsal_entree_filet_${guest.id}`">
              <div class="toggle--img">
                <icon-cow></icon-cow>
              </div>
              Steak
            </label>
          </div>

          <div class="toggle--item">
            <input
              type="radio"
              :id="`rehearsal_entree_fish_${guest.id}`"
              :name="`rehearsal_entree_${guest.id}`"
              value="fish"
              v-model="guestForm.guest_food_option.rehearsal_selection.entree"
            />
            <label :for="`rehearsal_entree_fish_${guest.id}`">
              <div class="toggle--img">
                <icon-fish></icon-fish>
              </div>
              Fish
            </label>
          </div>

          <div class="toggle--item">
            <input
              type="radio"
              :id="`rehearsal_entree_stir_fry_${guest.id}`"
              :name="`rehearsal_entree_${guest.id}`"
              value="tofu_stir_fry"
              v-model="guestForm.guest_food_option.rehearsal_selection.entree"
            />
            <label :for="`rehearsal_entree_stir_fry_${guest.id}`">
              <div class="toggle--img">
                <icon-vegetable></icon-vegetable>
              </div>
              Veggie
            </label>
          </div>
        </div>
      </template>
    </div>

    <br />
    <div class="flyform--group">
      <textarea
        :id="`food_restrictions_${guest.id}`"
        :name="`food_restrictions_${guest.id}`"
        rows="5"
        v-model="guestForm.guest_food_option.dietary_restrictions"
      ></textarea>
      <label :for="`food_restrictions_${guest.id}`"
        >Please list any dietary restrictions below :</label
      >
    </div>
  </div>
</template>

<script>
import IconCow from "./IconCow";
import IconFish from "./IconFish";
import IconVegetable from "./IconVegetable";
export default {
  model: {
    prop: "guestForm",
  },
  components: {
    IconCow,
    IconFish,
    IconVegetable,
  },
  props: {
    guest: {
      required: true,
    },
    guestForm: {
      required: true,
    },
  },
};
</script>
