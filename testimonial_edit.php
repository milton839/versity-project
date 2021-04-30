<?php
  require_once("includes/header.php");
  require_once("includes/nav-bar.php");
  require_once("includes/functions.php");
  require_once("includes/login_check.php");
?>
<div class="container mt-2">
  <div class="row">

    <div class="col-6 m-auto mt-5 mb-5">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-light">
      <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="testimonial.php">Testimonial</a></li>
      <li class="breadcrumb-item active" aria-current="page">
          <?=$_GET['testimonial_id']?>
      </li>
    </ol>
  </nav>

<?php
$testimonial_id = $_GET['testimonial_id']; 
$testimonial_select_query = "SELECT * FROM testimonials WHERE id = $testimonial_id";
$testimonial_from_db = mysqli_query($db_connect,$testimonial_select_query);
$testimonial_from_db_after_assoc = mysqli_fetch_assoc($testimonial_from_db);
?>
  
      <div class="card border-primary">
        <div class="card-header bg-info text-white text-center">
          <h3>Edit Testimonial</h3>
        </div>
        <div class="card-body">
            <?php if(isset($_SESSION['file_error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php 
                        echo $_SESSION['file_error'];
                        unset($_SESSION['file_error']);
                    ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['testimonial_add_success'])): ?>
                <div class="alert alert-success bg-success text-white alert-dismissible fade show" role="alert">
                    <?php 
                        echo $_SESSION['testimonial_add_success'];
                        unset($_SESSION['testimonial_add_success']);
                    ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
          <div class="card-content">
            <form action="testimonial_edit_post.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="inputphoto">Testimonial Photo</label>
                <input type="hidden" name="testimonial_id" value="<?=$_GET['testimonial_id']?>">
                <input type="hidden" name="testimonial_photo" value="<?=$testimonial_from_db_after_assoc['testimonial_photo'];?>">
                <input type="file" name="new_testimonial_photo" class="form-control-file"id="inputphoto">
                <label for="inputphoto">Old Testimonial Photo</label><br>
                <img src="uploads/testimonial/<?=$testimonial_from_db_after_assoc['testimonial_photo'];?>" alt="<?=$testimonial_from_db_after_assoc['testimonial_photo'];?>">
              </div>

              <div class="form-group">
                <label for="inputText">Testimonial Text</label>
                <textarea name="testimonial_text" id="inputText" class="form-control"  rows="3" value="<?php
                if(isset($_SESSION['testimonial_text'])){
                  echo $_SESSION['testimonial_text'];
                  unset($_SESSION['testimonial_text']);
                }?>"><?=$testimonial_from_db_after_assoc['testimonial_text'];?></textarea>
                <small class="text-danger">
                  <?php
                  if(isset($_SESSION['testimonial_text_error'])){
                    echo $_SESSION['testimonial_text_error'];
                    unset($_SESSION['testimonial_text_error']);
                  }
                  ?>
                </small>
              </div>

              <div class="form-group">
                <label for="inputname">Testimonial Name</label>
                <input type="text" name="testimonial_name" class="form-control"id="inputname" value="<?=$testimonial_from_db_after_assoc['testimonial_name'];?>">
                <small class="text-danger">
                  <?php
                  if(isset($_SESSION['testimonial_name_error'])){
                    echo $_SESSION['testimonial_name_error'];
                    unset($_SESSION['testimonial_name_error']);
                  }
                  ?>
                </small>
              </div>

              <div class="form-group">
                <label for="inputdesig">Testimonial Designation</label>
                <input type="text" name="testimonial_designation" class="form-control"id="inputdesig" value="<?=$testimonial_from_db_after_assoc['testimonial_designation'];?>">

                <small class="text-danger">
                  <?php
                  if(isset($_SESSION['testimonial_designation_error'])){
                    echo $_SESSION['testimonial_designation_error'];
                    unset($_SESSION['testimonial_designation_error']);
                  }
                  ?>
                </small>
              </div>

              <div class="form-group">
                <label for="exampleText">Testimonial Stars</label>
                <input type="number" name="testimonial_star" class="form-control"id="exampleText" value="<?=$testimonial_from_db_after_assoc['testimonial_star'];?>">
                <small class="text-danger">
                  <?php
                  if(isset($_SESSION['testimonial_star_error1'])){
                    echo $_SESSION['testimonial_star_error1'];
                    unset($_SESSION['testimonial_star_error1']);
                  }
                  ?>
                </small>
                <small class="text-danger">
                  <?php
                  if(isset($_SESSION['testimonial_star_number_error'])){
                    echo $_SESSION['testimonial_star_number_error'];
                    unset($_SESSION['testimonial_star_number_error']);
                  }
                  ?>
                </small>
              </div>

              <button type="submit" class="btn btn-info">Submit</button>
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
<style>
     .mt-3, .my-3{
    margin: 0px!important;
  }
</style>
