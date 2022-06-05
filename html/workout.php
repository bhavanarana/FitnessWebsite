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
    <div class="container container-workout">
      <div
        class="row workout-heading col-12 d-flex justify-content-center mt-4 mb-5"
      >
        Choose Your Workout Plan
      </div>
      <div class="row row-workout">
        <!--flex col flex card and text vertically and align-items-center align items in center of col-4 -->
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
          <div class="card workout-card" style="width: 14rem">
            <img
              src="../Images/workout/bodybuilding.svg"
              class="card-img-top mx-auto d-block workout-img"
            />
            <div class="card-body workout-card-body text-center">
              <a href="#" class="btn workout-button">View</a>
            </div>
          </div>
          <a href="#" class="workout-text">Body building</a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
          <div class="card workout-card" style="width: 14rem">
            <img
              src="../Images/workout/strech.svg"
              class="card-img-top mx-auto d-block workout-img"
              class="card-img-top workout-img"
            />
            <div class="card-body workout-card-body text-center">
              <a href="#" class="btn workout-button">View</a>
            </div>
          </div>
          <a href="#" class="workout-text">Streching</a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
          <div class="card workout-card" style="width: 14rem">
            <img
              src="../Images/workout/weightloss.svg"
              class="card-img-top mx-auto d-block workout-img"
              class="card-img-top workout-img"
            />
            <div class="card-body workout-card-body text-center">
              <a href="#" class="btn workout-button">View</a>
            </div>
          </div>
          <a href="#" class="workout-text">Weight Loss</a>
        </div>
        <!-- <div class="workout-margin"></div> -->
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
          <div class="card workout-card" style="width: 14rem">
            <img
              src="../Images/workout/yogamed.svg"
              class="card-img-top mx-auto d-block workout-img"
              class="card-img-top workout-img"
            />
            <div class="card-body workout-card-body text-center">
              <a href="#" class="btn workout-button">View</a>
            </div>
          </div>
          <a href="#" class="workout-text">Meditation</a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
          <div class="card workout-card" style="width: 14rem">
            <img
              src="../Images/workout/cardio.svg"
              class="card-img-top mx-auto d-block workout-img"
              class="card-img-top workout-img"
            />
            <div class="card-body workout-card-body text-center">
              <a href="#" class="btn workout-button">View</a>
            </div>
          </div>
          <a href="#" class="workout-text">Cardio</a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
          <div class="card workout-card" style="width: 14rem">
            <img
              src="../Images/workout/msuclebuilding.svg"
              class="card-img-top mx-auto d-block workout-img"
              class="card-img-top workout-img"
            />
            <div class="card-body workout-card-body text-center">
              <a href="#" class="btn workout-button">View</a>
            </div>
          </div>
          <a href="#" class="workout-text">Muscle Building</a>
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
