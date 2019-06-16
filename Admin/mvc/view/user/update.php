<?php
include_once "mvc/models/Database.php";
$database = new \Admin\mvc\models\Database();
$connection = $database->ConnectDatabase();
$error = array();
if(isset($_POST) && !empty($_POST)) {

    $id = (int)$_POST['id'];
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $created_at = date("y-m-d H:i:s");

    $success = array();
    // Để đảm bảo an toàn khi insert dữ liệu thì dùng VALUE(?,?,?) thay vì truyền các biến vào VALUE
    $sqlUpdate = "UPDATE users SET user_name = ?, email = ?, password = ? , created_at = ? WHERE id = ? ";

    // Chuẩn bị cho phần SQL
    $stmt = $connection->prepare($sqlUpdate);
    // Bind 3 biến vào câu lệnh SQL 'sss': Định dạng của 3 biến bind vào là String-String-String
    $stmt->bind_param("ssssi", $username,$email, $password, $created_at, $id);

    $stmt->execute();
    $stmt->close();
    echo "<div class='alert alert-success' style='text-align: center;'>";
    echo "Cập nhật thông tin thành công";
    echo "</div>";

} else {
    echo "<div class='alert alert-danger' style='text-align: center;'>";
    echo "Cập nhật thông tin không thành công";
    echo "</div>";
}

?>
