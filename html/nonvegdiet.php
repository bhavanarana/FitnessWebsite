<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <!--Link CSS-->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- For Responsive (meta tags required)-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--Bootstrap css-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Stardos+Stencil:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>Sweat Arena</title>
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
            <img class="card-img-top mx-auto d-block gain-img-card" src="/Images/bulk.svg" alt="Card image cap">
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
            <img class="card-img-top mx-auto d-block reduce-img-card" src="/Images/reduce.svg" alt="Card image cap">
            <div class="card-body reduce-body">
              <h5 class="card-title reduce-head-card">Weight Loss</h5>
              <p class="card-text reduce-text-card">1200 Calorie foods with Meal Plan</p>
              <div class="text-center">
              <a href="#" class="btn btn-primary nonveg-reduce-button">Download</a></div>
            </div>
          </div>
        </div>
        <a href="/html/diet.php" type="button" class="btn back-button">Back</a>
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
