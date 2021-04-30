<?php
  require_once("includes/header.php");
  require_once("includes/nav-bar.php");
  require_once("includes/functions.php");
  require_once("includes/login_check.php");
?>
<div class="container">
  <div class="row">
    <div class="col-7">
      <div class="card border-primary mt-5 mb-5">
        <div class="card-header bg-info text-white">
          <h4 class="card-title text-center">Brands List</h4>
        </div>
        <div class="card-body">
          <div class="card-content">
            <div class="table-responsive overflow-hidden">
              <table class="table table-bordered">
                <thead class="bg-light">
                  <tr class="text-dark text-center">
                    <th>Brand No</th>
                    <th>Brand Logo</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <?php
                    $user_serial = 0;
                    foreach(falcon_all('brands') as $brand): 
                  ?>
                    <td>
                      <?php
                      ++$user_serial;
                      echo $user_serial;
                    ?>
                    </td>
                    <td><img src="uploads/brands/<?=$brand['brand_logo']?>" alt="<?=$brand['brand_logo']?>"></td>
                    <td>
                       <div class="row">
                         <div class="col-2"></div>
                        <div class="col-4 mt-3">
                            <?php if($brand['status'] == 1):?>
                            <button class="btn btn-success btn-sm brand_publish_btn" value="brand_publish.php?brand_id=<?=$brand['id']?>&work=publish">Publish</button>
                            <?php else: ?>
                            <button class="btn btn-warning btn-sm brand_unpublish_btn" value="brand_publish.php?brand_id=<?=$brand['id']?>&work=unpublish">Unpublish</a>
                            <?php endif; ?>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-danger btn-sm mt-3 brand_delete_btn" value="brand_delete.php?brand_id=<?=$brand['id']?>"><i class="fa fa-trash"></i></button>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-primary btn-sm mt-3" href="brand_edit.php?brand_id=<?=$brand['id']?>"><i class="fa fa-pencil-square-o"></i></a>
                        </div>
                        <div class="col-2"></div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  <?php if($user_serial == 0): ?>
                  <tr>
                    <td colspan="5" class="text-center text-danger">Brand Not Found</td>
                  </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-1"></div>
    <div class="col-4 mt-5 mb-5">

      <div class="card border-primary">
        <div class="card-header bg-info text-white text-center">
          <h3>Add Brand</h3>
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
            <?php if(isset($_SESSION['file_added_success'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php 
                        echo $_SESSION['file_added_success'];
                        unset($_SESSION['file_added_success']);
                    ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
          <div class="card-content">
            <form action="brand_post.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleText">Brand Logo</label>
                <input type="file" name="brand_logo" class="form-control-file"id="exampleText">
              </div>
              <button type="submit" class="btn btn-primary">Add Brand</button>
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

    $('.brand_publish_btn').on('click',function(b){  
      b.preventDefault();
      var brand_publish = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to publish this brand",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, publish it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Published!',
        'Your brand has been publish.',
        'success',
      )
        window.location.href = brand_publish
      }
    })

    });

    $('.brand_unpublish_btn').on('click',function(b){  
      b.preventDefault();
      var brand_unpublish = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to unpublish this brand",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, unpublish it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'UnPublished!',
        'Your brand has been unpublish.',
        'success',
      )
        window.location.href = brand_unpublish
      }
    })

    });

    $('.brand_delete_btn').on('click',function(b){  
      b.preventDefault();
      var brand_delete = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete this brand",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Deleted!',
        'Your brand has been delete.',
        'success',
      )
        window.location.href = brand_delete
      }
    })

    });


  });
</script>