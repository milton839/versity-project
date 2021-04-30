<?php
  require_once("includes/header.php");
  require_once("includes/nav-bar.php");
  require_once("includes/login_check.php");
  require_once("includes/db.php");
  $select_all_data = "SELECT * FROM contact_messages WHERE delete_status=2 ORDER BY id DESC";
  $mysqli_query = mysqli_query($db_connect, $select_all_data);
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card border-primary mt-5 mb-5">
        <div class="card-header">
          <div class="row">
            <div class="col-5">
              <span class="card-title font-weight-bold">Trash Messages</span>
            </div>
            <div class="col-2">
                <button id="restore_all" value="contact_all_restore.php?delete_type=all" class="btn btn-danger pull-right fa fa-undo"> Restore All</button>
            </div>
            <div class="col-2">
              <form id="mark_restore_form" action="contact_mark_restore.php" method="POST">
                <button type="submit" class="btn btn-danger pull-right fa fa-check" id="mark_restore"> Mark Restore</button>
            </div>
            <div class="col-3">
              <button id="permanent_delete_all" value="contact_permanent_delete.php?delete_type=all" class="btn btn-danger pull-right fa fa-trash"> Permanently Delete All</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="card-content">
            <div class="table-responsive">
              <table class="table table-bordered mt-3">
                <thead class="bg-light">
                  <tr class="text-dark">
                    <th>Check</th>
                    <th>Serial No</th>
                    <th>Name</th>
                    <th>Message Date time</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $serial_no = 1;
                      foreach($mysqli_query as $user_message): 
                  ?>
                  <tr>
                    <td>
                      <input type="checkbox" name="check_delete[]" value="<?=$user_message['id']?>">
                    </td>
                    <td><?=$serial_no++;?></td>
                    <td><?=$user_message['guest_name']?></td>
                    <td>
                      <?php 
                        $date_and_time = strtotime($user_message['message_date_time']);
                        echo date('d M, Y h:i A', $date_and_time);
                      ?>
                    </td>
                    
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button value="contact_all_restore.php?contact_message_id=<?=$user_message['id']?>&delete_type=single"
                          class="btn btn-success fa fa-undo restore_message"> Restore</button>
                        <button value="contact_permanent_delete.php?contact_message_id=<?=$user_message['id']?>&delete_type=single" class="btn btn-danger fa fa-trash delete_message"> Delete</button>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  <?php if($serial_no == 1): ?>
                  <tr>
                    <td colspan="6" class="text-center text-danger">No Data Found</td>
                  </tr>
                  <?php endif; ?>
                </tbody>
              </table>
              </form>
            </div>
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
    
    $('.delete_message').on('click',function(b){  
      b.preventDefault();
      var delete_message = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to permanently delete this messages",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
        'Deleted!',
        'Your message has been deleted.',
        'success',
      )
        window.location.href = delete_message
      }
    })

    });


    $('.restore_message').on('click',function(b){  
      b.preventDefault();
      var restore_message = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to restore this messages",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, restore it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Restored!',
        'Your message has been restored.',
        'success',
      )
        window.location.href = restore_message
      }
    })

    });


    $('#mark_restore').on('click',function(b){  
      b.preventDefault();
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to restore all selected message ",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, restore all!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Restored!',
        'Your message has been restored.',
        'success',
      )
        $('#mark_restore_form').submit();
      }
    })

    });


    $('#restore_all').on('click',function(b){  
      b.preventDefault();
      var restore_all = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to restore all messages",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, restore all!',
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Restored!',
        'Your message has been restored.',
        'success',
      )
        window.location.href = restore_all
      }
    })

    });


    $('#permanent_delete_all').on('click',function(b){  
      b.preventDefault();
      var permanent_delete_all = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete all messages",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, delete all!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Deleted!',
        'Your message has been deleted.',
        'success',
      )
        window.location.href = permanent_delete_all
      }
    })

    });



  });
</script>