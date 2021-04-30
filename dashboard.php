<?php
    require_once("includes/header.php");
    require_once("includes/nav-bar.php");
    require_once("includes/db.php");
    require_once("includes/login_check.php");
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card border-primary mt-5 mb-5">
        <div class="card-header text-center bg-info text-white">
            <h4>Dashboard</h4>
        </div>
        <div class="card-body">
            <h5>Welcome, <span class="font-italic"><?=$_SESSION['username']?></span></h5>
            <span class="font-weight-bold">Email Address:</span> <span class="font-italic"><?=$_SESSION['login_success_email']?></span>
            <br>
            <span class="font-weight-bold">Registration Date:</span> <span class="font-italic"><?=$_SESSION['user_joining_date']?></span> 
          <div class="card-content pt-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
    require_once("includes/footer.php");
?>