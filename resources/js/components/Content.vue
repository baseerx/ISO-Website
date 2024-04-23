<template>
      <div class="my-galery container-fluid mt-5">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-4  text-center">
                                      <img src="/img/vips/ali raza bhutta.jpg" class="img-thumbnail">
                                  <h5 class="text-capitalize">Mr. Ali Raza Bhutta </h5>
                                  <p>Federal Secretary <br> (Power Division)</p>
                              </div>
                              <div class="col-md-4  text-center">
                                  <img src="/img/vips/hamad.jpg" class="img-thumbnail">
                                  <h5 class="text-capitalize">Mr. Hammad Azhar</h5>
                                  <p>Federal Minister for Energy <br> (Power Division)</p>
                              </div>
                              <div class="col-md-4  text-center">
                                      <img src="/img/vips/GM.jpg"  class="img-thumbnail">
                                  <h5 class="text-capitalize"> Mr. Muhammad Masood Ur Rehman</h5>
                                  <p>General Manager SO <br> (NPCC)</p>
                              </div>
                          </div>
                      </div>
              </div>
</template>

<script>
export default {
    name: "Content"
}
</script>

<style scoped>
h2.intro-text {
    font-size: 60px;
    font-weight: bold;
    color: #444;
}
p.description {
    font-size: 19px;
    margin: 32px 0px;
    color: #444444ba;
}
.my-galery {
    background: url(/img/bg/background.png);
    background-position: center;
    background-size: cover;

    /* Needed to position the navbar */
    position: relative;
}
img {
    width: 150px; /* You can set the dimensions to whatever you want */
    height: 195px;
    object-fit: cover;
}
</style>
