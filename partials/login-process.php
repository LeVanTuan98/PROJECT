<?php
// Create the session
session_start();
$local = "Location:".$_SESSION['current_path'];
// remove session variables 'status'
unset($_SESSION['status']);

require_once "Database.php";
$database = new Database();
$connection = $database->ConnectDatabase();
if (isset($_POST) && !empty($_POST)) {
    $number_user = $_POST['number_user'];
    $password = $_POST['password'];

    // Để đảm bảo an toàn
    $sqlLogin = "SELECT * FROM users WHERE number_user = ? AND password = ?";

    // Chuẩn bị cho phần SQL
    $stmt = $connection->prepare($sqlLogin);
    // Bind 2biến vào câu lệnh SQL
    $stmt->bind_param("ss", $number_user, $password);
    //Thực thi câu lệnh SQL
    $stmt->execute();
    //Lấy ra bản ghi
    $result = $stmt->get_result();
    //Chuyển kết quả $res thành mảng
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if(isset($row['id']) && $row['id'] > 0) {
        $_SESSION['status'] = true;
    }else {
        $_SESSION['status'] = false;
    }
    header($local);
    exit;
}