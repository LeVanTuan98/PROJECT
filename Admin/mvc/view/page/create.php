<?php
include_once "mvc/models/Database.php";
$database = new \Admin\mvc\models\Database();
$connection = $database->ConnectDatabase();


if(isset($_POST) && !empty($_POST)) {
    $error = array();
    $src = $_POST['src'];
    $alt = isset($_POST['alt']) ? $_POST['alt'] : '';

    $sqlInsert = "INSERT INTO slide_show (src,alt) VALUE ('$src','$alt')";
    if (mysqli_query($connection, $sqlInsert)) {

        echo "<div class='alert alert-success' style='text-align:center;'>";
        echo "Thêm hình ảnh mới thành công";
        echo "</div>";
    } else {
        echo "<div class='alert alert-danger' style='text-align: center;'>";
        echo "Thêm hình ảnh mới không thành công";
        echo "</div>";
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-10" style="margin: 0 auto;">
            <h1>THÊM HÌNH ẢNH</h1>
            <form name="create" action="#" method="post" style="margin-top: 50px;">
                <div class="form-group">
                    <label>Đường dẫn</label>
                    <input type="text" class="form-control" name="src" required>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" class="form-control" name="alt">
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
</div>