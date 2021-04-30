<?php
require_once("includes/header.php");
require_once("includes/nav-bar.php");
require_once("includes/functions.php");
require_once("includes/login_check.php");
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-info text-white text-center">
                    <h5>Settings(Text)</h5>
                </div>
                <div class="card-body">
                    <form action="settings_post.php" method="POST">

                        <?php foreach (falcon_all('settings') as $setting) : ?>
                            <div class="form-group">
                                <label><?= $setting['setting_name'] ?></label>
                                <input type="text" class="form-control" name="setting_name[<?= $setting['setting_name'] ?>]" value="<?= $setting['setting_data'] ?>">
                            </div>
                        <?php endforeach; ?>

                        <button type="submit" class="btn btn-primary">Update Settings</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header bg-info text-white text-center">
                    <h5>Settings(Images)</h5>
                </div>
                <div class="card-body">
                    <form action="settings_image_post.php" method="POST" enctype="multipart/form-data">

                        <?php foreach (falcon_all('settings_image') as $setting) : ?>
                            <div class="form-group">
                                <label><?= $setting['setting_name'] ?></label>
                                <br>
                                <img class="img-fluid" width="100" src="<?= $setting['setting_data'] ?>" alt="">
                                <br>
                                <label>Please give a new photo for update</label>
                                <br>


                                <br>
                                <input type="file" name="<?= $setting['setting_name'] ?>">

                            </div>
                        <?php endforeach; ?>

                        <?php if (isset($_SESSION['file_error'])) : ?>
                            <div class="alert alert-danger">
                                <?php
                                echo $_SESSION['file_error'];
                                unset($_SESSION['file_error']);
                                ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['file_error1'])) : ?>
                            <div class="alert alert-danger">
                                <?php
                                echo $_SESSION['file_error1'];
                                unset($_SESSION['file_error1']);
                                ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['file_error2'])) : ?>
                            <div class="alert alert-danger">
                                <?php
                                echo $_SESSION['file_error2'];
                                unset($_SESSION['file_error2']);
                                ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <br>

                        <button type="submit" class="btn btn-primary">Update Images</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







<?php
require_once("includes/footer.php");
?>