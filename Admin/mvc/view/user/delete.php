<?php
include_once "mvc/models/Database.php";
$database = new \Admin\mvc\models\Database();
$connection = $database->ConnectDatabase();
$error = array();
if(isset($_GET['id']) && !empty($_GET['id'])) {

    $id = (int)$_GET['id'];

    // Để đảm bảo an toàn khi insert dữ liệu thì dùng VALUE(?,?,?) thay vì truyền các biến vào VALUE
    $sqlDelete = "DELETE FROM users WHERE id = ? ";

    // Chuẩn bị cho phần SQL
    $stmt = $connection->prepare($sqlDelete);
    // Bind 3 biến vào câu lệnh SQL 'sss': Định dạng của 3 biến bind vào là String-String-String
    $stmt->bind_param("i",  $id);

    $stmt->execute();
    $stmt->close();
    echo "<div class='alert alert-success' style='text-align: center;'>";
    echo "Xóa tài khoản thành công";
    echo "</div>";
}else {
    echo "<div class='alert alert-danger' style='text-align: center;'>";
    echo "Xóa tài khoản không thành công";
    echo "</div>";
}

?>
