<!DOCTYPE html>
<html lang="en">
<head>
 <?php
 include 'bootstrap.php';
 include 'db.php';
 ?> 
</head>
<body>
    <?php
    include 'navbar.php';
    if (isset($_REQUEST['info'])) { ?>
<div class="container" style= "margin-top: 100px">
    <div class="row" style="text-align: center">
        <div class="img" > <img src = "../Images/mail.png" style="width: 300px; height:300px"></div>
      <div class="content mt-5" style="color: white">
          <h2>Thank You</h2>
          <h6>You will be hearing from us soon</h6>
      </div>
    </div>
</div>
   <?php }?> 
</body>
</html>