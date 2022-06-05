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
    <div class="container container-diet mt-5">
      <div class="row diet-heading justify-content-center">
        Choose Your Diet Plan
      </div>
      <div class="row row-diet mt-5">
        <div class="col-lg-6 d-flex justify-content-center">
          <a href="vegdiet.php" style="text-decoration: none">
            <div class="card veg-card" style="width: 19rem">
              <img
                class="card-img-top mx-auto d-block veg-img-card"
                src="../Images/vegetarian 1.svg"
                alt="Card image cap"
              />
              <div class="card-body veg-text-card">
                <p class="card-text">Vegetarian</p>
              </div>
            </div></a
          >
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
          <a href="nonvegdiet.php" style="text-decoration: none">
            <div class="card nonveg-card" style="width: 19rem">
              <img
                class="card-img-top mx-auto d-block nonveg-img-card"
                src="../Images/chicken-leg 1.svg"
                alt="Card image cap"
              />
              <div class="card-body nonveg-text-card">
                <p class="card-text">Non-Vegetarian</p>
              </div>
            </div></a
          >
        </div>
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
