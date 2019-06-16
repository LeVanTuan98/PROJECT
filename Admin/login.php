<?php
    session_start();
    include_once "mvc/models/Database.php";
    $database = new \Admin\mvc\models\Database();
    $connection = $database->ConnectDatabase();
    /*
     * Biến lưu trữ lỗi trong quá tình đăng nhập
     */
    $error = array();
    /*
     * Xử lý đăng nhập
     */
    if(isset($_POST) && !empty($_POST)) {
        if(!isset($_POST['username']) || empty($_POST['username'])) {
            $error[] = "Chưa nhập user name";
        }
        if(!isset($_POST['password']) ||empty($_POST['password'])) {
            $error[] = "Chưa nhập password";
        }
        /*
         * Nếu mảng error bị rỗng nghĩa là không có lỗi đăng nhập
         */
        if(is_array($error) && empty($error)) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            // Để đảm bảo an toàn
            $sqlLogin = "SELECT * FROM admins WHERE user_name = ? AND password = ?";

            // Chuẩn bị cho phần SQL
            $stmt = $connection->prepare($sqlLogin);
            // Bind 2biến vào câu lệnh SQL
            $stmt->bind_param("ss", $username, $password);
            //Thực thi câu lệnh SQL
            $stmt->execute();
            //Lấy ra bản ghi
            $res = $stmt->get_result();
            //Chuyển kết quả $res thành mảng
            $row = $res->fetch_array(MYSQLI_ASSOC);

            if(isset($row['id']) && $row['id'] > 0) {
                /*
                 * Nếu tồn tại bản ghi thì sẽ tạo ra SESSION đăng nhập
                 */
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $row['user_name'];
            }else {
                $error[] = "Tài khoản không tồn tại";
            }
        }
    }
    if(is_array($error) && !empty($error)) {
        $error_string = implode('<br>', $error);
        echo "<div class='alert alert-danger' style='text-align:center;'>";
        echo $error_string;
        echo "</div>";
    }

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ) {
    header('location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="assets/images/tuanle.jpg" id="icon" alt="User Icon" style="width: 30%;border-radius: 50%;padding:20px 0">
        </div>

        <!-- Login Form -->
        <form name="login" method="post" action="#">
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="Enter Username">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Enter Password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>
</body>
</html>