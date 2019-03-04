<template>
  <section class="content">
    <div class="gradient">
      <div class="gradient-box gradient-box-lightest"></div>
      <div class="gradient-box gradient-box-light"></div>
      <div class="gradient-box gradient-box-dark"></div>
      <div class="gradient-box gradient-box-darkest"></div>
    </div>

    <div class="section section-large">
      <div class="section--content">
        <h1 class="secondary">My Invitation</h1>

        <div class="invite">
          <div class="invite--item">
            <h3>Janice Falotico</h3>
            <hr />

            <div class="invite--section">
              <h4 class="text-left">
                Wedding :
                <span class="muted">September 14, 2019 | 4:30 PM</span>
              </h4>
              <div class="toggle">
                <div class="toggle--item">
                  <input id="wedding1-accept" type="radio" name="wedding1" />
                  <label for="wedding1-accept">Accept</label>
                </div>

                <div class="toggle--item">
                  <input id="wedding1-regret" type="radio" name="wedding1" />
                  <label for="wedding1-regret">Regret</label>
                </div>
              </div>

              <h4 class="text-left">Meal Choice :</h4>

              <div class="toggle toggle-muted">
                <div class="toggle--item">
                  <input id="food1-meat" type="radio" name="food1" />
                  <label for="food1-meat">
                    <div class="toggle--img">
                      <icon-cow></icon-cow>
                    </div>
                    Filet Mignon
                  </label>
                </div>

                <div class="toggle--item">
                  <input id="food1-veggie" type="radio" name="food1" />
                  <label for="food1-veggie">
                    <div class="toggle--img">
                      <icon-vegetable></icon-vegetable>
                    </div>
                    Tofu Stir-Fry
                  </label>
                </div>
              </div>
            </div>

            <div class="invite--section invite--section-secondary">
              <h4 class="text-left">
                Rehearsal Dinner :
                <span class="muted">September 13, 2019 | 6:00 PM</span>
              </h4>
              <div class="toggle">
                <div class="toggle--item">
                  <input
                    id="rehearsal1-accept"
                    type="radio"
                    name="rehearsal1"
                  />
                  <label for="rehearsal1-accept">Accept</label>
                </div>

                <div class="toggle--item">
                  <input
                    id="rehearsal1-regret"
                    type="radio"
                    name="rehearsal1"
                  />
                  <label for="rehearsal1-regret">Regret</label>
                </div>
              </div>

              <h4 class="text-left">Meal Choice :</h4>
              <div class="toggle toggle-muted">
                <div class="toggle--item">
                  <input
                    id="rehearsal1-meat"
                    type="radio"
                    name="rehearsal-food1"
                  />
                  <label for="rehearsal1-meat">
                    <div class="toggle--img">
                      <icon-cow></icon-cow>
                    </div>
                    Steak
                  </label>
                </div>

                <div class="toggle--item">
                  <input
                    id="rehearsal1-fish"
                    type="radio"
                    name="rehearsal-food1"
                  />
                  <label for="rehearsal1-fish">
                    <div class="toggle--img">
                      <icon-fish></icon-fish>
                    </div>
                    Fish
                  </label>
                </div>

                <div class="toggle--item">
                  <input
                    id="rehearsal1-veggie"
                    type="radio"
                    name="rehearsal-food1"
                  />
                  <label for="rehearsal1-veggie">
                    <div class="toggle--img">
                      <icon-vegetable></icon-vegetable>
                    </div>
                    Veggie
                  </label>
                </div>
              </div>
            </div>

            <br />
            <div class="flyform--group">
              <textarea name="restrictions" rows="5"></textarea>
              <label for="restrictions"
                >Please list any dietary restrictions below :</label
              >
            </div>
          </div>

          <div class="invite--item">
            <h3>Luke Policinski</h3>
            <hr />

            <div class="invite--section">
              <h4 class="text-left">
                Wedding :
                <span class="muted">September 14, 2019 | 4:30 PM</span>
              </h4>
              <div class="toggle">
                <div class="toggle--item">
                  <input id="wedding2-accept" type="radio" name="wedding2" />
                  <label for="wedding2-accept">Accept</label>
                </div>

                <div class="toggle--item">
                  <input id="wedding2-regret" type="radio" name="wedding2" />
                  <label for="wedding2-regret">Regret</label>
                </div>
              </div>

              <h4 class="text-left">Meal Choice :</h4>

              <div class="toggle toggle-muted">
                <div class="toggle--item">
                  <input id="food2-meat" type="radio" name="food2" />
                  <label for="food2-meat">
                    <div class="toggle--img">
                      <icon-cow></icon-cow>
                    </div>
                    Filet Mignon
                  </label>
                </div>

                <div class="toggle--item">
                  <input id="food2-veggie" type="radio" name="food2" />
                  <label for="food2-veggie">
                    <div class="toggle--img">
                      <icon-vegetable></icon-vegetable>
                    </div>
                    Tofu Stir-Fry
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="flyform--btns">
          <button class="btn--link">Back</button>
          <button class="btn">Send RSVP</button>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Vue from "vue";
import IconCow from "./components/IconCow";
import IconFish from "./components/IconFish";
import IconVegetable from "./components/IconVegetable";

export default Vue.extend({
  components: {
    IconCow,
    IconFish,
    IconVegetable,
  },
  data() {
    return {};
  },
  methods: {},
  computed: {},
});
</script>
