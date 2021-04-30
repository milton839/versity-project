<?php
  require_once("includes/header.php");
  require_once("includes/nav-bar.php");
  require_once("includes/functions.php");
  require_once("includes/login_check.php");
?>
<div class="container">
  <div class="row">
    <div class="col-9">
      <div class="card border-primary mt-5 mb-5">
        <div class="card-header bg-info text-white">
          <h4 class="card-title text-center">Service List</h4>
        </div>
        <div class="card-body">
        <?php if(isset($_SESSION['service_update'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['service_update'];
                    unset($_SESSION['service_update']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
          <div class="card-content">
            <div class="table-responsive">
              <table class="table table-bordered mt-3">
                <thead class="bg-light">
                  <tr class="text-dark">
                    <th>Service No</th>
                    <th class="text-center">Service Title</th>
                    <th class="text-center">Service Description</th>
                    <th>Service Icon</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $user_serial = 0;
                    foreach(falcon_all('services') as $service): 
                  ?>
                    <td>
                      <?php
                      ++$user_serial;
                      echo $user_serial;
                    ?>
                    </td>
                    <td><?=$service['service_title']?></td>
                    <td><?=$service['service_description']?></td>
                    <td class="text-center"><i class="<?=$service['service_icon']?> font-weight-bold"></i></td>
                    <td>
                      <div class="row d-inline-block">
                        <div class="col-4">
                          <?php if($service['status'] == 1):?>
                            <button class="btn btn-success btn-sm service_publish_btn" value="service_publish.php?service_id=<?=$service['id']?>&work=publish"><i class="fa fa-arrow-right"></i></button>
                            <?php else: ?>
                            <button class="btn btn-warning btn-sm service_unpublish_btn" value="service_publish.php?service_id=<?=$service['id']?>&work=unpublish"><i class="fa fa-arrow-left"></i></button>
                          <?php endif; ?>
                        </div>
                        <div class="col-4">
                          <button class="btn btn-danger btn-sm mt-3 service_delete_btn" value="service_delete.php?service_id=<?=$service['id']?>"><i class="fa fa-trash"></i></button>
                        </div>
                        <div class="col-4">
                          <a class="btn btn-primary btn-sm mt-3" href="service_edit.php?service_id=<?=$service['id']?>"><i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  <?php if($user_serial == 0): ?>
                  <tr>
                    <td colspan="5" class="text-center text-danger">Service Not Found</td>
                  </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-3 mt-5 mb-5">

      <div class="card border-primary">
        <div class="card-header bg-info text-white text-center">
          <h3>Add Service</h3>
        </div>
        <?php if(isset($_SESSION['service_title_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['service_title_error'];
                    unset($_SESSION['service_title_error']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['service_description_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['service_description_error'];
                    unset($_SESSION['service_description_error']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['service_icon_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['service_icon_error'];
                    unset($_SESSION['service_icon_error']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['service_add_success'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['service_add_success'];
                    unset($_SESSION['service_add_success']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="card-body">
          <div class="card-content">
            <form action="service_post.php" method="POST">
              <div class="form-group">
                <label for="exampleText">Service Title</label>
                <input type="text" placeholder="Enter Service Title" name="service_title" class="form-control"id="exampleText">
              </div>
              <div class="form-group">
                <label for="exampleTextarea">Service Description</label>
                <textarea name="service_description" placeholder="Enter Service Description" class="form-control" id="exampleTextarea" rows="3"></textarea>
              </div>
              <div class="form-group">
                <input type="text" name="service_icon" class="form-control icon_value" id="service_icon_value" hidden readonly>
                <br>
                <select class="fa mt-3" id="my_select">
                  <option selected disabled>--Select Your Service Icon--</option>
                  <option value="fa fa-user">&#xf007; User</option>
                  <option value="fa fa-bug">&#xf188; Bug</option>
                  <option value="fa fa-briefcase">&#xf0b1; Briefcase</option>
                  <option value="fa fa-database">&#xf1c0; Database</option>
                  <option value="fa fa-commenting">&#xf27a; Commenting</option>
                  <option value="fa fa-diamond">&#xf219; Diamond</option>
                  <option value="fa fa-envelope">&#xf0e0; Envelope</option>
                  <option value="fa fa-cube">&#xf1b2; Cube</option>
                  <option value="fa fa-eye">&#xf06e; Eye</option>
                  <option value="fa fa-gift">&#xf06b; Gift</option>
                  <option value="fa fa-users">&#xf0c0; Users</option>
                  <option value="fa fa-heart">&#xf08a; Heart</option>
                  <option value="fa fa-industry">&#xf275; Industry</option>
                  <option value="fa fa-inbox">&#xf01c; Inbox</option>
                  <option value="fa fa-key">&#xf084; Key</option>
                  <option value="fa fa-magic">&#xf0d0; Magic</option>
                  <option value="fa fa-pencil">&#xf044; Edit</option>
                  <option value="fa fa-desktop">&#xf108; Desktop</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Add Service</button>
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
<script>
  $(document).ready(function(){

    $('#my_select').change(function(){
      var get_icon_value = $('#my_select option:selected').val();
      $('#service_icon_value').val(get_icon_value);
    });


    $('.service_publish_btn').on('click',function(b){  
      b.preventDefault();
      var service_publish = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to publish this service",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, publish it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Published!',
        'Your service has been publish.',
        'success',
      )
        window.location.href = service_publish
      }
    })

    });


    $('.service_unpublish_btn').on('click',function(b){  
      b.preventDefault();
      var service_unpublish = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to unpublish this service",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, unpublish it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'UnPublished!',
        'Your service has been unpublish.',
        'success',
      )
        window.location.href = service_unpublish
      }
    })

    });

    $('.service_delete_btn').on('click',function(b){  
      b.preventDefault();
      var service_delete = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete this service",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Deleted!',
        'Your service has been deleted.',
        'success',
      )
        window.location.href = service_delete
      }
    })

    });


  });
</script>