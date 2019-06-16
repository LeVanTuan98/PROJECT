<?php
include_once "mvc/models/Database.php";
$database = new \Admin\mvc\models\Database();
$connection = $database->ConnectDatabase();
$error = array();
if(isset($_POST) && !empty($_POST)) {

    $id = (int)$_POST['id'];
    $src = $_POST['src'];
    $alt = isset($_POST['alt']) ? $_POST['alt'] : '';

    $sqlUpdade = "UPDATE slide_show SET src = '$src', alt = '$alt' WHERE id =".$id;

    if (mysqli_query($connection, $sqlUpdade)) {
        echo "<div class='alert alert-success' style='text-align: center;'>";
        echo "Cập nhật hình ảnh thành công";
        echo "</div>";
    }
} else {
    echo "<div class='alert alert-danger' style='text-align: center;'>";
    echo "Cập nhật hình ảnh không thành công";
    echo "</div>";
}
?>
