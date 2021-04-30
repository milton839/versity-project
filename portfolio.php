<?php
require_once("includes/header.php");
require_once("includes/nav-bar.php");
require_once("includes/functions.php");
require_once("includes/login_check.php");
?>
<div class="container mt-2">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-light">
      <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-9">
      <div class="card border-primary mb-5">
        <div class="card-header bg-info text-light">
          <h4 class="card-title text-center">Portfolio List</h4>
        </div>
        <div class="card-body">
          <div class="card-content">
            <div class="table-responsive overflow-hidden">
              <table class="table table-bordered">
                <thead class="bg-light">
                  <tr class="text-dark text-center">
                    <th>SL: NO:</th>
                    <th>Portfolio Text</th>
                    <th>Portfolio Name</th>
                    <th>Portfolio Designation</th>
                    <th>Portfolio Photo</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <?php
                    $user_serial = 0;
                    foreach (falcon_all('testimonials') as $testimonial) :
                    ?>
                      <td>
                        <?php
                        ++$user_serial;
                        echo $user_serial;
                        ?>
                      </td>
                      <td><?= $testimonial['testimonial_text'] ?></td>
                      <td><?= $testimonial['testimonial_name'] ?></td>
                      <td><?= $testimonial['testimonial_designation'] ?></td>
                      <td><img src="uploads/testimonial/<?= $testimonial['testimonial_photo'] ?>" alt="<?= $testimonial['testimonial_photo'] ?>"></td>

                      <td>
                        <div class="row">
                          <div class="col-6 mt-3">
                            <?php if ($testimonial['status'] == 1) : ?>
                              <a class="btn btn-success  testimonial_publish_btn" href="testimonial_change_status.php?testimonial_id=<?= $testimonial['id'] ?>&work=publish">Publish</a>
                            <?php else : ?>
                              <a class="btn btn-warning btn-sm testimonial_unpublish_btn" href="testimonial_change_status.php?testimonial_id=<?= $testimonial['id'] ?>&work=unpublish">Unpublish</a>
                            <?php endif; ?>
                          </div>
                          <div class="col-2">
                            <button class="btn btn-danger btn-sm mt-3 testimonial_delete_btn" value="testimonial_delete.php?testimonial_id=<?= $testimonial['id'] ?>"><i class="fa fa-trash"></i></button>
                          </div>
                          <div class="col-2">
                            <a class="btn btn-primary btn-sm mt-3" href="testimonial_edit.php?testimonial_id=<?= $testimonial['id'] ?>"><i class="fa fa-pencil-square-o"></i></a>
                          </div>
                        </div>
                      </td>
                  </tr>
                <?php endforeach; ?>
                <?php if ($user_serial == 0) : ?>
                  <tr>
                    <td colspan="6" class="text-center text-danger">Testimonial Not Found</td>
                  </tr>
                <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-3 mb-5">

      <div class="card border-primary">
        <div class="card-header bg-info text-light text-center">
          <h3>Add Portfolio</h3>
        </div>
        <div class="card-body">
          <?php if (isset($_SESSION['file_error'])) : ?>
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
          <?php if (isset($_SESSION['testimonial_add_success'])) : ?>
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
            <form action="testimonial_post.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="inputphoto">Portfolio Photo</label>
                <input type="file" name="testimonial_photo" class="form-control-file" id="inputphoto">
              </div>
              <div class="form-group">
                <label for="inputname">Portfolio Name</label>
                <input type="text" name="testimonial_name" class="form-control" id="inputname" value="<?php
                                                                                                      if (isset($_SESSION['testimonial_name'])) {
                                                                                                        echo $_SESSION['testimonial_name'];
                                                                                                        unset($_SESSION['testimonial_name']);
                                                                                                      }
                                                                                                      ?>">
                <small class="text-danger">
                  <?php
                  if (isset($_SESSION['testimonial_name_error'])) {
                    echo $_SESSION['testimonial_name_error'];
                    unset($_SESSION['testimonial_name_error']);
                  }
                  ?>
                </small>
              </div>

              <div class="form-group">
                <label for="inputdesig">Portfolio Designation</label>
                <input type="text" name="testimonial_designation" class="form-control" id="inputdesig" value="<?php
                                                                                                              if (isset($_SESSION['testimonial_designation'])) {
                                                                                                                echo $_SESSION['testimonial_designation'];
                                                                                                                unset($_SESSION['testimonial_designation']);
                                                                                                              }
                                                                                                              ?>">

                <small class="text-danger">
                  <?php
                  if (isset($_SESSION['testimonial_designation_error'])) {
                    echo $_SESSION['testimonial_designation_error'];
                    unset($_SESSION['testimonial_designation_error']);
                  }
                  ?>
                </small>
              </div>

              <div class="form-group">
                <label for="exampleText">Portfolio Stars</label>
                <input type="number" name="testimonial_star" class="form-control" id="exampleText" value="<?php
                                                                                                          if (isset($_SESSION['testimonial_star'])) {
                                                                                                            echo $_SESSION['testimonial_star'];
                                                                                                            unset($_SESSION['testimonial_star']);
                                                                                                          }
                                                                                                          ?>">
                <small class="text-danger">
                  <?php
                  if (isset($_SESSION['testimonial_star_error1'])) {
                    echo $_SESSION['testimonial_star_error1'];
                    unset($_SESSION['testimonial_star_error1']);
                  }
                  ?>
                </small>
                <small class="text-danger">
                  <?php
                  if (isset($_SESSION['testimonial_star_number_error'])) {
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
<!-- <style>
  .mt-3,
  .my-3 {
    margin: 0px !important;
  }
</style> -->
<!-- <script>
  $(document).ready(function() {
    $('.testimonial_delete_btn').on('click', function(b) {
      b.preventDefault();
      var testimonial_delete = $(this).val()
      Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete this testimonial",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#1e7e34',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {

          Swal.fire(
            'Deleted!',
            'Your testimonial has been delete.',
            'success',
          )
          window.location.href = testimonial_delete
        }
      })

    });


  });
</script> -->