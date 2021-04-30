<?php
  require_once("includes/header.php");
  require_once("includes/nav-bar.php");
  require_once("includes/login_check.php");
  require_once("includes/db.php");
  $contact_id = $_GET['contact_message_id'];
  $select_data = "SELECT * FROM contact_messages WHERE id=$contact_id";
  $data_query = mysqli_query($db_connect, $select_data);
  $data_after_assoc = mysqli_fetch_assoc($data_query);
  
  $update_query = "UPDATE contact_messages SET message_status = 2 WHERE id=$contact_id";
  mysqli_query($db_connect, $update_query);
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card border-primary mt-5 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inbox.php">Inbox</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span class="card-title">Message Details of <?=$data_after_assoc['guest_name']?></span></li>
                    </ol>
                </nav>
                <div class="card-header">
                    <span class="card-title">Message Details of <b><?=$data_after_assoc['guest_name']?></b></span>
                </div>
                <div class="card-body">
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-bordered mt-3">
                                <thead class="bg-light">
                                </thead>
                                <tbody>
                                    <p class="font-weight-bold">Email: <?=$data_after_assoc['guest_email']?></p>
                                    <span class="font-weight-bold">Message:
                                        <?=$data_after_assoc['guest_message']?>
                                    </span>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <?php 
                        $date_and_time = strtotime($data_after_assoc['message_date_time']);
                        echo date('d M, Y h:i A', $date_and_time);
                      ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
  require_once("includes/footer.php");
?>