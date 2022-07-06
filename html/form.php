<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'bootstrap.php';
  include "db.php"; ?>
</head>

<body>
  <?php include 'navbar.php'; ?>
  <div class="container form-container mt-5">
    <div class="row d-flex justify-content-around form-row ">
      <div class="img col-xl-6">
        <img class="d-none d-xl-block" src="../images/workout.png">
      </div>
      <div class="content col-xl-6">
        <div class="form-heading"><span id="hidden-heading">Get Your</span> Personalized Chart</div>
        <form class="row g-3" action="" method="POST">
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="col-md-6">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="col-12">
            <label for="goal" class="form-label">Goal</label>
            <input type="text" class="form-control" name="goal">
          </div>
          <div class="col-md-4">
            <label for="workout_lvl" class="form-label">Workout Level</label>
            <select class="form-select margin-input" name="workout_lvl">
              <option selected>Choose...</option>
              <option>Easy</option>
              <option>Intermediate</option>
              <option>Advance</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="diet" class="form-label">Diet</label>
            <select name="diet" class="form-select">
              <option selected>Choose...</option>
              <option>Veg</option>
              <option>Non-Veg</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="date" class="form-label">DOB</label>
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-md-4">
            <label for="height" class="form-label">Height</label>
            <input type="text" class="form-control" name="height" placeholder="in cm...">
          </div>
          <div class="col-md-4">
            <label for="weight" class="form-label">Weight</label>
            <input type="text" class="form-control" name="weight" placeholder="in KG...">
          </div>
          <div class="col-md-4">
            <label for="blood-grp" class="form-label">Blood Group</label>
            <input type="text" class="form-control " name="blood-grp" placeholder=" A+...">
          </div>
          <div class="col-12">
            <button type="submit" name="submit" class="btn form-btn mt-2">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>
</body>

</html>
