<template>
  <div class="container">
    <div class="card_container">
      <div
        class="card mb-3"
        style="max-width: 800px"
        v-for="post in posts"
        v-bind:key="post.id"
      >
        <div class="row no-gutters">
          <div class="col-md-4">
            <img :src="post.image" v-bind:alt="post.title + ' images'" />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ post.title }}</h5>
              <p class="card-text">{{ post.description }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
const { default: Axios } = require("axios");

export default {
  data() {
    return {
      posts: null,
    };
  },
  mounted() {
    console.log("Component mounted.");
    Axios.get("/api/posts")
      .then((resp) => {
        console.log(resp);
        this.posts = resp.data.data;
      })
      .catch((err) => {
        console.error("Sorry! " + err);
      });
  },
};
</script>

<style scoped>
.card {
  box-shadow: 1px 2px 3px rgb(90, 57, 90);
}
.card-text {
  color: rgb(38, 49, 177);
}
.card-title {
  color: brown;
  text-transform: capitalize;
}
</style>