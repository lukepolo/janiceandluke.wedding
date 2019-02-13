<template>
  <div id="app">
    <alerts></alerts>
    <main-navigation></main-navigation>
    <router-view></router-view>
  </div>
</template>

<script>
import Alerts from "varie/Alerts";
import MainNavigation from "@views/layouts/components/main-navigation/MainNavigation";
export default {
  components: {
    Alerts,
    MainNavigation,
  },
};
</script>
