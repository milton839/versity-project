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
                    <h2 class="text-center text-info">Login Form</h2>
                    <div class="card-body">
                        <form action="login_post.php" method="POST">
                            <div class="form-group">
                                <?php  if(isset($_SESSION['login_success_error'])):?>
                                <div class="alert alert-warning">
                                    <?php                                         
                                        echo $_SESSION['login_success_error'];
                                        unset($_SESSION['login_success_error']);
                                    ?>
                                </div>
                                <?php endif; ?>
                                <?php  if(isset($_SESSION['register_successful'])):?>
                                <div class="alert alert-success">
                                    <?php                                         
                                        echo $_SESSION['register_successful'];
                                        unset($_SESSION['register_successful']);
                                    ?>
                                </div>
                                <?php endif; ?>
                                <?php  if(isset($_SESSION['invalid_login'])):?>
                                <div class="alert alert-danger">
                                    <?php                                         
                                        echo $_SESSION['invalid_login'];
                                        unset($_SESSION['invalid_login']);
                                    ?>
                                </div>
                                <?php endif; ?>
                                <?php  if(isset($_SESSION['login_email_address'])):?>
                                <div class="alert alert-danger">
                                    <?php                                         
                                        echo $_SESSION['login_email_address'];
                                        unset($_SESSION['login_email_address']);
                                    ?>
                                </div>
                                <?php endif; ?>
                                <?php if(isset($_SESSION['login_valid_email'])):?>
                                <div class="alert alert-danger">
                                    <?php                                         
                                        echo $_SESSION['login_valid_email'];
                                        unset($_SESSION['login_valid_email']);
                                    ?>
                                </div>
                                <?php endif; ?>
                                <?php if(isset($_SESSION['logout_successful'])):?>
                                <div class="alert alert-success">
                                    <?php                                         
                                        echo $_SESSION['logout_successful'];
                                        unset($_SESSION['logout_successful']);
                                    ?>
                                </div>
                                <?php endif; ?>
                                <label for="LoginInputEmail1">Email address</label>
                                <input type="text" name="loginEmail" class="form-control" id="LoginInputEmail1" value="<?php if(isset($_SESSION['login_email_value'])){
                                    echo $_SESSION['login_email_value'];
                                    unset($_SESSION['login_email_value']);
                                }
                                 ?>">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                            <?php if(isset($_SESSION['login_password_valid'])):?>
                                <div class="alert alert-danger">
                                    <?php                                         
                                        echo $_SESSION['login_password_valid'];
                                        unset($_SESSION['login_password_valid']);
                                    ?>
                                </div>
                                <?php endif; ?>
                                <label for="LoginInputPassword1">Password</label>
                                <input type="password" name="loginPassword" class="form-control" id="LoginInputPassword1">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                            <p class="text-center"><small>If you haven't account, <a href="register.php">Register</a> please</small></p>
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