<?php
  require_once("includes/header.php");
  require_once("includes/nav-bar.php");
  require_once("includes/login_check.php");
?>
<div class="container pt-5">
    <div class="row">
        <div class="col-6">
           <div class="card">
               <div class="card-header">
                   <p>Edit Your Name</p>
               </div>
               <div class="card-body">
                <?php  if(isset($_SESSION['new_username'])): ?>
                    <div class="alert alert-success">
                        <?php 
                            echo $_SESSION['new_username'];
                            unset($_SESSION['new_username']);
                        ?>
                    </div>
                <?php endif; ?>
                <?php  if(isset($_SESSION['name_empty'])): ?>
                    <div class="alert alert-danger">
                        <?php 
                            echo $_SESSION['name_empty'];
                            unset($_SESSION['name_empty']);
                        ?>
                    </div>
                <?php endif; ?>
                <?php  if(isset($_SESSION['name_exist'])): ?>
                    <div class="alert alert-danger">
                        <?php 
                            echo $_SESSION['name_exist'];
                            unset($_SESSION['name_exist']);
                        ?>
                    </div>
                <?php endif; ?>
                   <form action="profile_edit_post.php" method="POST">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="email" value="<?=$_SESSION['login_success_email']?>">
                    </div>
                    <div class="form-group">
                        <label for="editYourName">Your Name</label>
                        <input type="text" class="form-control" name="name" value="<?=$_SESSION['username']?>" id="editYourName">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Change Name" class="bg-primary border-0 text-light">
                    </div>
                   </form>
               </div>
           </div>
        </div>
        <div class="col-6">
        <div class="card">
               <div class="card-header">
                   <p>Change Your Password</p>
               </div>
               <div class="card-body">
                   <form action="edit_password_post.php" method="POST">
                    <div class="form-group">
                    <?php  if(isset($_SESSION['password_not_match'])): ?>
                    <div class="alert alert-danger">
                        <?php 
                            echo $_SESSION['password_not_match'];
                            unset($_SESSION['password_not_match']);
                        ?>
                    </div>
                <?php endif; ?>
                <?php  if(isset($_SESSION['password_changed'])): ?>
                    <div class="alert alert-success">
                        <?php 
                            echo $_SESSION['password_changed'];
                            unset($_SESSION['password_changed']);
                        ?>
                    </div>
                <?php endif; ?>
                        <input type="hidden" class="form-control" name="email" value="<?=$_SESSION['login_success_email']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="old_password" id="oldPassword" placeholder="Enter Your Old Password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="new_password" id="newPassword" placeholder="Enter Your New Password">
                    </div>
                    <?php  if(isset($_SESSION['new_password_error'])): ?>
                    <div class="alert alert-danger">
                        <?php 
                            echo $_SESSION['new_password_error'];
                            unset($_SESSION['new_password_error']);
                        ?>
                    </div>
                <?php endif; ?>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="change_password" value="Change Password" class="bg-primary border-0 text-light">
                    </div>
                   </form>
               </div>
           </div>
        </div>
    </div>
</div>
<?php
  require_once("includes/footer.php");
?>