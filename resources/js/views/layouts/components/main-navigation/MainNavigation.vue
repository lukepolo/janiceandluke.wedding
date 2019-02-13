<template>
  <nav class="nav">
    <router-link
      class="nav--left"
      :to="{
        name: 'home',
      }"
      >Janice + Luke
    </router-link>

    <div class="nav--right">
      <router-link
        class="nav--item"
        :to="{
          name: 'home',
          hash: '#Our-Wedding',
        }"
        ><span class="hide-small">Our &nbsp;</span> Wedding
      </router-link>
      <router-link
        class="nav--item"
        :to="{
          name: 'home',
          hash: '#Travel',
        }"
        >Travel</router-link
      >
      <router-link
        class="nav--item"
        :to="{
          name: 'home',
          hash: '#Registry',
        }"
        >Registry</router-link
      >
      <router-link
        class="nav--item"
        :to="{
          name: 'RSVP',
        }"
        >RSVP</router-link
      >
    </div>
  </nav>
</template>

<script>
export default {};
</script>

<style scoped></style>
