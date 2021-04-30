<?php
    require_once("includes/header.php");
    require_once("includes/nav-bar.php");
    require_once("includes/db.php");
    $brand_id = $_GET['brand_id'];
    $select_data = "SELECT * FROM brands WHERE id=$brand_id ORDER BY id DESC";
    $data_query = mysqli_query($db_connect, $select_data);
    foreach($data_query as $brand){

    }
?>
<div>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 pt-5">
                <div class="card-body">
                    <div class="card-content pt-3">
                        <form action="brand_update.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleText">Brand Name</label>
                                <input type="file" value="<?=$brand['brand_logo']?>" name="brand_logo" class="form-control" id="exampleText">
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?=$brand['id']?>" hidden name="brand_id" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Brand</button>
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

