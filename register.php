<?php
    require_once("includes/header.php");
    if(isset($_SESSION['login_success']) == true){
        header("location:dashboard.php");
    }
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center text-info">Register Form</h2>
                    <div class="card-body">
                        <form action="register_post.php" method="POST">
                            <div class="form-group">
                                <?php  if(isset($_SESSION['exist_email_error'])): ?>
                                <div class="alert alert-danger">
                                    <?php 
                                        echo $_SESSION['exist_email_error'];
                                        unset($_SESSION['exist_email_error']);
                                    ?>
                                </div>
                                <?php endif; ?>
                                <label for="RegisterInputName">Your Name</label>
                                <input type="text" name="registerName" class="form-control" id="RegisterInputName" value="<?php
                                        if(isset($_SESSION['name'])){
                                            echo $_SESSION['name'];
                                            unset($_SESSION['name']);
                                        }
                                    ?>">
                                <small class="text-danger">
                                    <?php
                                        if(isset($_SESSION['error_name'])){
                                            echo $_SESSION['error_name'];
                                            unset($_SESSION['error_name']);
                                        }
                                    ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="RegisterInputEmail1">Email address</label>
                                <input type="text" name="registerEmail" class="form-control" id="RegisterInputEmail1" value="<?php
                                        if(isset($_SESSION['email'])){
                                            echo $_SESSION['email'];
                                            unset($_SESSION['email']);
                                        }
                                    ?>">
                                <small class="text-danger">
                                    <?php
                                        if(isset($_SESSION['error_email'])){
                                            echo $_SESSION['error_email'];
                                            unset($_SESSION['error_email']);
                                        }
                                    ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="RegisterInputPassword1">Password</label>
                                <input type="password" name="registerPassword" class="form-control" id="RegisterInputPassword1">
                                <small class="text-danger">
                                    <?php
                                        if(isset($_SESSION['error_password'])){
                                            echo $_SESSION['error_password'];
                                            unset($_SESSION['error_password']);
                                        }
                                    ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="RegisterInputConfirmPassword1">Confirm Password</label>
                                <input type="password" name="registerConfirmPassword" class="form-control" id="RegisterInputConfirmPassword1">
                                <small class="text-danger">
                                    <?php
                                        if(isset($_SESSION['error_confirm_password'])){
                                            echo $_SESSION['error_confirm_password'];
                                            unset($_SESSION['error_confirm_password']);
                                        }
                                    ?>
                                </small>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" name="registerCheckbox" class="form-check-input" id="Check">
                                <label class="form-check-label" for="Check">Do you agree with our terms & conditions?</label>
                                <small class="text-danger"><br>
                                    <?php
                                        if(isset($_SESSION['error_registerCheckbox'])){
                                            echo $_SESSION['error_registerCheckbox'];
                                            unset($_SESSION['error_registerCheckbox']);
                                        }
                                    ?>
                                </small>
                            </div>
                            <?php if(isset($_SESSION['password_generate'])): ?>
                             <p><span class="font-weight-bold">Your Random Password is: </span> 
                                 <?php echo $_SESSION['password_generate'];
                                 unset($_SESSION['password_generate']); 
                             ?>
                            </p>   
                            <?php endif; ?>
                            <!-- <a href="password_generate.php" class="btn btn-primary">Generate a New Password</a>
                            <br><br> -->
                            <button type="submit" name="register" class="btn btn-primary">Register</button>
                            <p class="text-center"><small>If you have account, <a href="login.php">Login</a> please</small></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
  require_once("includes/footer.php");
?>