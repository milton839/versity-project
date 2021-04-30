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
        <div class="card-header">
          <h4 class="card-title text-center">Awards List</h4>
        </div>
        <div class="card-body">
        <?php if(isset($_SESSION['award_updated_success'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['award_updated_success'];
                    unset($_SESSION['award_updated_success']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
          <div class="card-content">
            <div class="table-responsive overflow-hidden">
              <table class="table table-bordered">
                <thead class="bg-light">
                  <tr class="text-dark">
                    <th>Award No</th>
                    <th>Award Title</th>
                    <th>Award Counts</th>
                    <th>Award Icon</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $user_serial = 0;
                    foreach(falcon_all('awards') as $award): 
                  ?>
                    <td>
                      <?php
                      ++$user_serial;
                      echo $user_serial;
                    ?>
                    </td>
                    <td><?=$award['award_title']?></td>
                    <td class="text-center"><?=$award['award_count']?></td>
                    <td class="text-center"><i class="<?=$award['award_icon']?> font-weight-bold"></i></td>
                    <td>
                      <div class="row">
                        <div class="col-3 mt-3">
                            <?php if($award['status'] == 1):?>
                            <button class="btn btn-success btn-sm award_publish_btn" value="award_publish.php?award_id=<?=$award['id']?>&work=publish"><i class="fa fa-arrow-right"></i></button>
                            <?php else: ?>
                            <button class="btn btn-warning btn-sm award_unpublish_btn" value="award_publish.php?award_id=<?=$award['id']?>&work=unpublish"><i class="fa fa-arrow-left"></i></i></a>
                            <?php endif; ?>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-danger btn-sm mt-3 award_delete_btn" value="award_delete.php?award_id=<?=$award['id']?>"><i class="fa fa-trash"></i></button>
                        </div>
                        <div class="col-3">
                            <a class="btn btn-primary btn-sm mt-3" href="award_edit.php?award_id=<?=$award['id']?>"><i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  <?php if($user_serial == 0): ?>
                  <tr>
                    <td colspan="5" class="text-center text-danger">Award Not Found</td>
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
        <div class="card-header">
          <p>Add Award</p>
        </div>
        <?php if(isset($_SESSION['award_add_success'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['award_add_success'];
                    unset($_SESSION['award_add_success']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['award_title_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['award_title_error'];
                    unset($_SESSION['award_title_error']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['award_count_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['award_count_error'];
                    unset($_SESSION['award_count_error']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['award_icon_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['award_icon_error'];
                    unset($_SESSION['award_icon_error']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="card-body">
          <div class="card-content">
            <form action="awards_post.php" method="POST">
              <div class="form-group">
                <label for="exampleText">Award Title</label>
                <input type="text" placeholder="Enter Award Title" name="award_title" class="form-control"id="exampleText">
              </div>
              <div class="form-group">
                <label for="exampleAwardCount">Award Count Number</label>
               <input type="number" class="form-control" placeholder="Enter Count Number" name="award_count" id="exampleAwardCount">
              </div>
              <div class="form-group">
                <input type="text" name="award_icon" class="form-control icon_value" id="award_icon_value" readonly hidden>
                <br>
                <select class="fa mt-3" id="my_select">
                  <option selected disabled>--Select Your Award Icon--</option>
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
                  <option value="fa fa-star">&#xf005; Start</option>
                  <option value="fa fa-thumbs-up">&#xf164; Thumbs Up</option>
                  <option value="fa fa-calendar">&#xf073; Calendar</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Add Award</button>
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
<script>
  $(document).ready(function(){

    $('#my_select').change(function(){
      var get_icon_value = $('#my_select option:selected').val();
      $('#award_icon_value').val(get_icon_value);
    });

    
    $('.award_publish_btn').on('click',function(b){  
      b.preventDefault();
      var award_publish = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to publish this award",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, publish it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Published!',
        'Your award has been publish.',
        'success',
      )
        window.location.href = award_publish
      }
    })

    });


    $('.award_unpublish_btn').on('click',function(b){  
      b.preventDefault();
      var award_unpublish = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to unpublish this award",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, unpublish it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'UnPublished!',
        'Your award has been unpublish.',
        'success',
      )
        window.location.href = award_unpublish
      }
    })

    });


    $('.award_delete_btn').on('click',function(b){  
      b.preventDefault();
      var award_delete = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete this award",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Deleted!',
        'Your award has been delete.',
        'success',
      )
        window.location.href = award_delete
      }
    })

    });



  });
</script>