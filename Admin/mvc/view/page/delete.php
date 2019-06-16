<?php
include_once "mvc/models/Database.php";
$database = new \Admin\mvc\models\Database();
$connection = $database->ConnectDatabase();
if(isset($_GET['id']) && !empty($_GET['id'])) {

    $id = (int)$_GET['id'];
    $sqlDelete = "DELETE FROM slide_show WHERE id =".$id;
    if (mysqli_query($connection, $sqlDelete)) {
        echo "<div class='alert alert-success' style='text-align: center;'>";
        echo "Xóa hình ảnh thành công";
        echo "</div>";
    }
}else {
    echo "<div class='alert alert-danger' style='text-align: center;'>";
    echo "Xóa hình ảnh không thành công";
    echo "</div>";
}

?>
