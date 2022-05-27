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
    <div class="container container-diet mt-5">
      <div class="row diet-heading justify-content-center">
        Choose Your Diet Plan
      </div>
      <div class="row row-diet mt-5">
        <div class="col-lg-6 d-flex justify-content-center">
          <a href="/html/vegdiet.php" style="text-decoration: none">
            <div class="card veg-card" style="width: 19rem">
              <img
                class="card-img-top mx-auto d-block veg-img-card"
                src="/Images/vegetarian 1.svg"
                alt="Card image cap"
              />
              <div class="card-body veg-text-card">
                <p class="card-text">Vegetarian</p>
              </div>
            </div></a
          >
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
          <a href="/html/nonvegdiet.php" style="text-decoration: none">
            <div class="card nonveg-card" style="width: 19rem">
              <img
                class="card-img-top mx-auto d-block nonveg-img-card"
                src="/Images/chicken-leg 1.svg"
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
