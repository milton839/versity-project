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
          <h4 class="card-title text-center">Skills List</h4>
        </div>
        <div class="card-body">
        <?php if(isset($_SESSION['skill_update'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['skill_update'];
                    unset($_SESSION['skill_update']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
          <div class="card-content">
            <div class="table-responsive overflow-hidden">
              <table class="table table-bordered mt-3">
                <thead class="bg-light">
                  <tr class="text-dark">
                    <th>Skill No</th>
                    <th>Skill Name</th>
                    <th>Skill Description</th>
                    <th>Skill Percentage</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $user_serial = 0;
                    foreach(falcon_all('skills') as $skill): 
                  ?>
                    <td class="">
                      <?php
                      ++$user_serial;
                      echo $user_serial;
                    ?>
                    </td>
                    <td><?=$skill['skill_name']?></td>
                    <td><?=$skill['skill_description']?></td>
                    <td class="text-center"><?=$skill['skill_percentage']?>%</td>
                    <td>
                      <div class="row">
                        <div class="col-3">
                          <?php if($skill['status'] == 1):?>
                            <button class="btn btn-success btn-sm skill_publish_btn" value="skill_publish.php?skill_id=<?=$skill['id']?>&work=publish"><i class="fa fa-arrow-right"></i></button>
                            <?php else: ?>
                            <button class="btn btn-warning btn-sm skill_unpublish_btn" value="skill_publish.php?skill_id=<?=$skill['id']?>&work=unpublish"><i class="fa fa-arrow-left"></i></button>
                          <?php endif; ?>
                        </div>
                        <div class="col-3">
                          <button class="btn btn-danger btn-sm mt-3 skill_delete_btn" value="skill_delete.php?skill_id=<?=$skill['id']?>"><i class="fa fa-trash"></i></button>
                        </div>
                        <div class="col-3">
                          <a class="btn btn-primary btn-sm mt-3" href="skill_edit.php?skill_id=<?=$skill['id']?>"><i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  <?php if($user_serial == 0): ?>
                  <tr>
                    <td colspan="5" class="text-center text-danger">Skills Not Found</td>
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
          <p>Add Skill</p>
        </div>
        <div class="card-body">
        <?php if(isset($_SESSION['skill_name_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['skill_name_error'];
                    unset($_SESSION['skill_name_error']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['skill_description_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['skill_description_error'];
                    unset($_SESSION['skill_description_error']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['skill_percentage_error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['skill_percentage_error'];
                    unset($_SESSION['skill_percentage_error']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(isset($_SESSION['skill_add_success'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php 
                    echo $_SESSION['skill_add_success'];
                    unset($_SESSION['skill_add_success']);
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
          <div class="card-content">
            <form action="skill_post.php" method="POST">
              <div class="form-group">
                <label for="exampleText">Skill Name</label>
                <input type="text" placeholder="Enter Skill Name" name="skill_name" class="form-control"id="exampleText">
              </div>
              <div class="form-group">
                <label for="exampleTextarea">Skill Description</label>
                <textarea name="skill_description" placeholder="Enter Skill Description" class="form-control" id="exampleTextarea" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleNumber">Skill Percentage</label>
                <input type="number" placeholder="Enter Skill Percentage" name="skill_percentage" class="form-control"id="exampleNumber">
              </div>
              <button type="submit" class="btn btn-primary">Add Skill</button>
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

    $('.skill_publish_btn').on('click',function(b){  
      b.preventDefault();
      var skill_publish = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to publish this skill",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, publish it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Published!',
        'Your skill has been publish.',
        'success',
      )
        window.location.href = skill_publish
      }
    })

    });

    $('.skill_unpublish_btn').on('click',function(b){  
      b.preventDefault();
      var skill_unpublish = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to unpublish this skill",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, unpublish it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'UnPublished!',
        'Your skill has been unpublish.',
        'success',
      )
        window.location.href = skill_unpublish
      }
    })

    });

    $('.skill_delete_btn').on('click',function(b){  
      b.preventDefault();
      var skill_delete = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete this skill",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Deleted!',
        'Your skill has been delete.',
        'success',
      )
        window.location.href = skill_delete
      }
    })

    });




    });
</script>
