<?php
    require_once("includes/header.php");
    require_once("includes/nav-bar.php");
    require_once("includes/db.php");
    $skill_id = $_GET['skill_id'];
    $select_data = "SELECT * FROM skills WHERE id=$skill_id ORDER BY id DESC";
    $data_query = mysqli_query($db_connect, $select_data);
    foreach($data_query as $skill){

    }
?>
<div>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 pt-5">
                <div class="card-body">
                    <div class="card-content pt-3">
                        <form action="skill_update.php" method="POST">
                            <div class="form-group">
                                <label for="exampleText">Skill Name</label>
                                <input type="text" value="<?=$skill['skill_name']?>" name="skill_name" class="form-control" id="exampleText">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Skill Description</label>
                                <input value="<?=$skill['skill_description']?>" name="skill_description" class="form-control" id="exampleTextarea"></input>
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?=$skill['id']?>" hidden name="skill_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="skillPer">Skill Percentage</label>
                                <input value="<?=$skill['skill_percentage']?>" type="number" name="skill_percentage" class="form-control" id="skillPer">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Skill</button>
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

