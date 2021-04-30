<?php
    require_once("includes/header.php");
    require_once("includes/nav-bar.php");
    require_once("includes/db.php");
    $award_id = $_GET['award_id'];
    $select_data = "SELECT * FROM awards WHERE id=$award_id ORDER BY id DESC";
    $data_query = mysqli_query($db_connect, $select_data);
    foreach($data_query as $award){

    }
?>
<div>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 pt-5">
                <div class="card-body">
                    <div class="card-content pt-3">
                        <form action="award_update.php" method="POST">
                            <div class="form-group">
                                <label for="exampleText">Award Title</label>
                                <input type="text" value="<?=$award['award_title']?>" name="award_title" class="form-control" id="exampleText">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Award Count</label>
                                <input value="<?=$award['award_count']?>" name="award_count" class="form-control" id="exampleTextarea"></input>
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?=$award['id']?>" hidden name="award_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Award Icon</label>
                                <input value="<?=$award['award_icon']?>" type="text" name="award_icon" class="form-control icon_value"
                                    id="service_icon_value" readonly>
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
                                    <option value="fa fa-star">&#xf005; Start</option>
                                    <option value="fa fa-thumbs-up">&#xf164; Thumbs Up</option>
                                    <option value="fa fa-calendar">&#xf073; Calendar</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Award</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
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

    
    });
</script>
