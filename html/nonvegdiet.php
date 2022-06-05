<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
 include "bootstrap.php"
 ?>
  </head>
  <body>
  <?php 
    include 'navbar.php';
    ?>
    <div class="container container-veg">
      <div class="row veg-heading d-flex justify-content-center mt-5 mb-4">
        Choose Your Diet Plan
      </div>
      <div class="row row-veg">
        <div class="col-lg-6 d-flex justify-content-center">
          <div class="card nonveg-gain-card" style="width: 18rem;">
            <img class="card-img-top mx-auto d-block gain-img-card" src="../Images/bulk.svg" alt="Card image cap">
            <div class="card-body gain-body">
              <h5 class="card-title gain-head-card">Hard Gainer</h5>
              <p class="card-text gain-text-card">Top healthy bulking foods with Meal Plan</p>
              <div class="text-center">
              <a href="#" class="btn btn-primary nonveg-gain-button">Download</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
          <div class="card nonveg-reduce-card" style="width: 18rem;">
            <img class="card-img-top mx-auto d-block reduce-img-card" src="../Images/reduce.svg" alt="Card image cap">
            <div class="card-body reduce-body">
              <h5 class="card-title reduce-head-card">Weight Loss</h5>
              <p class="card-text reduce-text-card">1200 Calorie foods with Meal Plan</p>
              <div class="text-center">
              <a href="#" class="btn btn-primary nonveg-reduce-button">Download</a></div>
            </div>
          </div>
        </div>
        <a href="diet.php" type="button" class="btn back-button">Back</a>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="../js/main.js"></script>
  </body>
</html>
