<template>
  <h1 class="header-name">{{ name }}</h1>
</template>

<script>
export default {

  props : {
   name: String 
  }

}
</script>

<style>
@import url('https://fonts.googleapis.com/css?family=IBM+Plex+Mono&display=swap');

.header-name {
  font-family: 'IBM Plex Mono', monospace;
}

</style>