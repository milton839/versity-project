<?php
  require_once("includes/header.php");
  require_once("includes/nav-bar.php");
  require_once("includes/functions.php");
  require_once("includes/login_check.php");
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card border-primary mt-5 mb-5">
        <div class="card-header bg-info text-white">
          <h4 class="card-title text-center">User List</h4>
        </div>
        <div class="card-body">
          <div class="card-content">
           <div class="table-responsive">
            <table class="table table-bordered mt-3">
              <thead class="bg-light">
                <tr class="text-dark">
                  <th>User No</th>
                  <th>User Name</th>
                  <th>User Email</th>
                  <th>Registration Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                    $user_serial = 0;
                    foreach(falcon_all('users') as $user_info): 
                  ?>
                  <td>
                    <?php
                      ++$user_serial;
                      echo $user_serial;
                    ?>
                  </td>
                  <td><?=$user_info['name']?></td>
                  <td><?=$user_info['email']?></td>
                  <td><?=$user_info['joining_date']?></td>
                </tr>
                  <?php endforeach; ?>
              </tbody>
            </table>
           </div>
          </div>
        </div>
        <div class="card-footer bg-dark text-white">
          <h4 class="card-title text-center">Total Users: <?php echo falcon_count('users')?></h4>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  require_once("includes/footer.php");
?>