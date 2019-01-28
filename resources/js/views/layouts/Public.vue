<template>
  <div id="app">
    <alerts></alerts>
    <nav class="nav">
      <div class="nav--left">
        Janice + Luke
      </div>
      <div class="nav--right">
        <div class="nav--item"><span class="hide-small">Our</span> Wedding</div>
        <div class="nav--item">
          Travel
        </div>
        <div class="nav--item">
          Registry
        </div>
        <div class="nav--item">
          RSVP
        </div>
      </div>
    </nav>
    <router-view></router-view>
  </div>
</template>

<script>
import Alerts from "varie/Alerts";
export default {
  components: {
    Alerts,
  },
};
</script>
