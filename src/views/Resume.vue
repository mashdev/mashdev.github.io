<template>
  <div class="resume-wrapper">
    <div class="row">
      <div class="col-md-12">
        <div class="head">
          <ResHeader v-bind:gitdata="[info]" />
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <Skills />
      </div>

      <div class="col-md-8">
        <Experience />
      </div>
    </div>

  </div>
</template>

<script>
import ResHeader from "@/components/Resume/Header";
import Skills from "@/components/Resume/Skills";
import Experience from "@/components/Resume/Experience";
import axios from "axios";

export default {
  props: {
    gitdata: Array
  },

  components: {
    ResHeader,
    Skills,
    Experience
  },

  data: function() {
    return {
      gituser: 'mashdev',
      info: '',
      repos: 'list of repos',
      err: ''
    }
  },

  methods: {
    gitProfileData(user){
      axios.get(`https://api.github.com/users/${user}`, {
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
    },

    getRepos(s) {
      return this.repos = s
    }
  },

  mounted() {
    
    this.gitProfileData(this.gituser),
    this.getRepos(this.info.login)

  }

}
</script>

<style scoped>
.resume-wrapper {
  background-color: #d8d8d8;
}

.remPadding {
  padding: 0;
}

.head {
  background-color: #d8d8d8;
  text-align: left; 
}

.header-wrapper {
  display: flex;
  display: -webkit-flex;
  flex-wrap: wrap;
}


</style>