<template>
  <div>
    <div class="row">
        <div class="col-md-4 remPadding">
          <div class="avatar">
            <img 
              v-bind:src="gitdata[0].avatar_url"
              alt=""
              class="avatar-img rounded-circle img-fluid mx-auto d-block"
            >
          </div>
        </div>

        <div class="col-md-8 ">

          <div class="full-name">
            {{gitdata[0].name}}
          </div>

          <div class="title">
          {Developer/Engineer}
          </div>

          <div class="email">
            paullopez05@gmail.com
          </div>
         <p class="objective">
            <b class="set-font">Objective:</b>
            Seeking a position where I apply my problem solving skills to modern front and back-end web development in full stack applications as well as process automation.
          </p>

        </div>
    </div>
  </div>
</template>

<script>
export default {

  props : {
   gitdata: Array
  }

}
</script>

<style>
@import url('https://fonts.googleapis.com/css?family=IBM+Plex+Mono&display=swap');

.set-font {
  font-family: 'IBM Plex Mono', monospace;
}

.header-name {
  font-family: 'IBM Plex Mono', monospace;
}

.objective {
  
  margin: 25px 10px 10px 0px;
  text-align: left; 
  padding: 5px 10px 5px 10px;
}

.full-name {
  padding: 5px 5px 5px 10px;
  text-align: left;
  font-family: 'IBM Plex Mono', monospace;
  font-size: 3rem;
}

.avatar {
  background-color: #d8d8d8;
  
}

.avatar-img {
  padding: 15px 15px 15px 15px;
  height: 80%;
  width: 80%;
}

.title {
  text-align: left;
  padding: 5px 5px 5px 10px;
}

.email {
  font-family: 'IBM Plex Mono', monospace;
  font-weight: 600;
  padding: 5px 5px 5px 10px;
}

</style>