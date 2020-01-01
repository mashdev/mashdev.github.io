<template>
  <div>
    <div class="head">
      <ResHeader v-bind:name="info.name" />
      <p>
        {{ info.bio }}
      </p>
    </div>
  </div>
</template>

<script>
import ResHeader from "@/components/Resume/Header.vue";
import axios from "axios";

export default {
  props: {
    name: String
  },

  components: {
    ResHeader
  },

  data: function() {
    return {
      info: '',
      err: ''
    }
  },

  mounted() {
    axios.get("https://api.github.com/users/mashdev", {
      headers: {
        Accept: "application/vnd.github.v3+json"
      },
    })
      .then( (res) => {
        this.info = res.data;
      })
      .catch( (err) => {
        this.err = err;
      })
  }
}
</script>

<style scoped>

.head {
  background-color: #d8d8d8;
  text-align: center;
  border-radius: 5px 5px 0px 0px;
}
</style>