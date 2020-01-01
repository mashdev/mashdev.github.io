<template>
  <div class="container">
    <div class="">
      <Landing msg="mashdev.github.io" />
    </div>
    
  </div>
</template>

<script>
import Landing from '@/components/Landing.vue';

export default {
  name: "landing",
  components: {
    Landing
  } 
};

</script>

<style>
body {
  background-color: rgb(54, 54, 54);
}


</style>