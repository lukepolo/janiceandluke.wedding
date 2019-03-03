<template>
  <div id="app" class="rsvp-page">
    <alerts></alerts>
    <main-navigation></main-navigation>
    <router-view></router-view>
    <app-footer></app-footer>
  </div>
</template>

<script>
import Alerts from "varie/Alerts";
import AppFooter from "@views/layouts/components/app-footer/AppFooter";
import MainNavigation from "@views/layouts/components/main-navigation/MainNavigation";
export default {
  components: {
    Alerts,
    AppFooter,
    MainNavigation,
  },
};
</script>
