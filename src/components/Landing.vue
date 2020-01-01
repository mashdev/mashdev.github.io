<template>
  <div class="">
    <div class="main-content mx-auto">
      <h1 class="header-name">{{ msg }}</h1>
    </div>
        
  </div>
</template>

<script>
export default {
  name: "Landing",
  props: {
    msg: String
  }
};
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css?family=IBM+Plex+Mono&display=swap');

/* .main-content {
  display: flex;
  align-items: center;
  justify-content: center;
} */

.header-name {
  font-family: 'IBM Plex Mono', monospace;
  font-size: 4em;
  color: rgb(255, 174, 0);
  
}


</style>
