<template>
  <div class="home">
    <div class="banner">
      <Landing msg="mashdev" />
    </div>
    <div class="about">
      <p>About</p>
    </div>
    <div class="projects">
      <p> Projects </p>
    </div>
    <div class="contact">
      <p> Contact </p>
    </div>
  </div>
</template>

<script>
/* @ is an alias to /src */
import Landing from "@/components/Landing.vue";

export default {
  name: "landing",
  components: {
    Landing
  } 
};
</script>