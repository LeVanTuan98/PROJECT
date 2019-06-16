<?php
include_once "mvc/models/Database.php";
$database = new \Admin\mvc\models\Database();
$connection = $database->ConnectDatabase();


if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $error = array();

    $sqlCheck = "SELECT * FROM slide_show WHERE id =".$id;
    $result = mysqli_query($connection, $sqlCheck);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>Chỉnh sửa hình ảnh</h1>
            <form name="edit" action="index.php?controller=page&action=update" method="post" style="margin-top: 50px;">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <div class="form-group">
                    <label>Đường dẫn</label>
                    <input type="text" class="form-control" name="src" value="<?php echo $row['src']?>" required>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $row['alt']?>">
                </div>
                <button type="submit" class="btn btn-primary">Xác nhận</button>
            </form>
        </div>
    </div>
</div>