<?php include 'header.php';?>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script src="https://unpkg.com/vue@next"></script>

<style>
  .card-title {
    font-weight: bold;
    font-size: large;
    font-family: Georgia, 'Times New Roman', Times, serif;
  }

  .card-text {
    font-size: small;
    font-weight: 300;
  }

  .btn {
    font-weight: bold;
  }
</style>

<!-- Content -->
<div id="content">

  <!-- Intro -->
  <section class="p-t-b-150">
    <div class="container">
      <div class="intro-main">
        <div class="row" id="app">

          <!-- Intro Detail -->
          <div class="col-md-7">
            <div class="text-sec padding-right-0">
              <h3>Recent TCM News</h3>
            </div>
          </div>
          <!--Section: News of the day-->
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col d-flex align-items-stretch">
              <div class="card">
                <img v-bind:src="articles.articles[0].urlToImage" class="card-img-top" alt="./images\AGTT-TCM.jpg">
                <div class="card-body bg-dark bg-opacity-10">
                  <h4 class="card-title">{{ articles.articles[0].title }}</h4>
                  <p class="card-text">{{ articles.articles[0].description }}</p>
                </div>
                <div class="d-grid gap-0">
                  <a v-bind:href="articles.articles[0].url" type="button"
                    class="btn btn-info text-capitalize d-flex justify-content-center align-items-end"
                    style="font-size:large">Read more</a>
                </div>

              </div>
            </div>
            <div class="col d-flex align-items-stretch">
              <div class="card">
                <img v-bind:src="articles.articles[1].urlToImage" class="card-img-top" alt="./images\AGTT-TCM.jpg">
                <div class="card-body bg-dark bg-opacity-10">
                  <h4 class="card-title">{{ articles.articles[1].title }}</h4>
                  <p class="card-text">{{ articles.articles[1].description }}</p>
                </div>
                <div class="d-grid gap-0">
                  <a v-bind:href="articles.articles[1].url" type="button"
                    class="btn btn-info text-capitalize d-flex justify-content-center align-items-end"
                    style="font-size:large">Read more</a>
                </div>

              </div>
            </div>
            <div class="col d-flex align-items-stretch">
              <div class="card">
                <img v-bind:src="articles.articles[2].urlToImage" class="card-img-top" alt="./images\AGTT-TCM.jpg">
                <div class="card-body bg-dark bg-opacity-10">
                  <h4 class="card-title">{{ articles.articles[2].title }}</h4>
                  <p class="card-text">{{ articles.articles[2].description }}</p>
                </div>
                <div class="d-grid gap-0">
                  <a v-bind:href="articles.articles[2].url" type="button"
                    class="btn btn-info text-capitalize d-flex justify-content-center align-items-end"
                    style="font-size:large">Read more</a>
                </div>

              </div>
            </div>
            <div class="col d-flex align-items-stretch">
              <div class="card">
                <img v-bind:src="articles.articles[3].urlToImage" class="card-img-top" alt="./images\AGTT-TCM.jpg">
                <div class="card-body bg-dark bg-opacity-10">
                  <h4 class="card-title">{{ articles.articles[3].title }}</h4>
                  <p class="card-text">{{ articles.articles[3].description }}</p>
                </div>
                <div class="d-grid gap-0">
                  <a v-bind:href="articles.articles[3].url" type="button"
                    class="btn btn-info text-capitalize d-flex justify-content-center align-items-end"
                    style="font-size:large">Read more</a>
                </div>

              </div>
            </div>
          </div>
          <!--Section: News of the day-->



        </div>
      </div>


    </div>
</div>
</div>
</section>
</div>

<script>
  const app = Vue.createApp({
    data() {
      return {
        articles: []

      }
    },
    created() {
      axios.get('https://newsapi.org/v2/everything?q=traditional chinese medicine&sortBy=popularity&excludeDomains=upenn.edu&apiKey=f6b246a0574a418bae92f692d65a2b15')
        .then(response => {
          // console.log(response.data)
          this.articles = response.data
          // let arr3 = this.top3()
          // const articleA = arr3[0]
          // const articleB = arr3[1]
          // const articleC = arr3[2]


        })
        .catch(error => {
          console.log(error.message);
        });
    },
    methods: {
      // top3(articles){
      //   var arr1 = this.articles
      //   // console.log(arr1)
      //   // console.log(typeof(arr1))
      //   var arr2 = arr1.articles
      //   var arr3 = []
      //   for (let i=0; i<3; i++){
      //     arr3.push(arr2[i])
      //   }
      //   return arr3
      // }
    },
    computed: {
      // articleA() {
      //   let localarr = this.top3()
      //   return localarr[0]
      // },
      // articleB() {

      // },
      // articleC() {

      // }

    }

  })
  const vm = app.mount('#app')
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<!-- Footer -->
<?php include 'footer.php'; ?>