<template>
  <div class="container-fluid">
    <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/resume">Resume</router-link>
    </div>
  </div>
</template>

<script>

export default {

}

</script>

<style lang="scss">
#nav {
  padding: 5px;
  a {
    font-weight: bold;
    color: #a8a8a8;
    &.router-link-exact-active {
      color: rgb(255, 174, 0);
    }
  }
}

</style>