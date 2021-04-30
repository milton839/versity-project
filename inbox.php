<?php
  require_once("includes/header.php");
  require_once("includes/nav-bar.php");
  require_once("includes/login_check.php");
  require_once("includes/db.php");
  $select_all_data = "SELECT * FROM contact_messages WHERE delete_status=1 ORDER BY id DESC";
  $mysqli_query = mysqli_query($db_connect, $select_all_data);
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card border-primary mt-5 mb-5">
        <div class="card-header">
          <div class="row">
            <div class="col-4">
              <span class="card-title font-weight-bold">Contact Messages</span>
            </div>
            <div class="col-2">
                <a href="contact_all_unread.php" class="btn btn-danger pull-right fa fa-eye-slash">Unread All</a>
            </div>
            <div class="col-2">
                <a href="contact_all_read.php" class="btn btn-danger pull-right fa fa-eye">Read All</a>
            </div>
            <div class="col-2">
              <form id="mark_trash_form" action="mark_delete.php" method="POST">
                <button type="submit" class="btn btn-danger pull-right fa fa-check" id="mark_trash"> Mark Trash</button>
            </div>
            <div class="col-2">
              <button value="message_delete.php?delete_type=all" class="btn btn-danger pull-right fa fa-trash" id="trash_all"> Trash All</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="card-content">
            <div class="table-responsive">
              <table class="table table-bordered mt-3">
                <thead class="bg-light">
                  <tr class="text-dark">
                    <th>Mark Delete</th>
                    <th>Serial No</th>
                    <th>Name</th>
                    <th>Message Date time</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $serial_no = 1;
                      foreach($mysqli_query as $user_message): 
                  ?>
                  <tr class="
                  <?php if($user_message['message_status'] == 1): ?>
                    bg-dark text-light
                  <?php endif; ?> 
                  ">
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
                      <?php if($user_message['message_status'] == 1): ?>
                      <span class="badge badge-danger">Unread</span>
                      <?php else:?>
                      <span class="badge badge-success">Read</span>
                      <?php endif;?>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="message_view.php?contact_message_id=<?=$user_message['id']?>"
                          class="btn btn-success">View</a>
                          <button value="message_delete.php?contact_message_id=<?=$user_message['id']?>&delete_type=single" type="button" class="btn btn-danger fa fa-recycle recycle_btn"> Recycle</button>
                        <!-- <a href="message_delete.php?contact_message_id=<?=$user_message['id']?>&delete_type=single" type="button" class="btn btn-danger fa fa-recycle"> Recycle</a> -->
                        <?php if($user_message['message_status'] == 2): ?>
                        <a href="message_unread.php?contact_message_id=<?=$user_message['id']?>"
                          class="btn btn-success">Make as Unread</a>
                        <?php endif;?>
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
    $('.recycle_btn').click(function(){
      var button_value = $(this).val()
      
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to recycle this message ",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, recycle it!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Recycled!',
        'Your message has been recycled.',
        'success',
      )
        window.location.href = button_value
      }
    })

    });

    $('#mark_trash').on('click',function(b){  
      b.preventDefault();
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to recycle all selected message ",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, recycle all!'
    }).then((result) => {
      if (result.isConfirmed) {

        Swal.fire(
        'Recycled!',
        'All selected message has been recycled.',
        'success',
      )
        $('#mark_trash_form').submit();
      }
    })

    });

    $('#trash_all').on('click',function(b){  
      b.preventDefault();
      var trash_all = $(this).val()
      Swal.fire({
      title: 'Are you sure?',
      text: "You want to recycle all messages",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#1e7e34',
      confirmButtonText: 'Yes, recycle all!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
        'Recycled!',
        'Your message has been recycled.',
        'success',
      )
        window.location.href = trash_all
      }
    })

    });



  });
</script>