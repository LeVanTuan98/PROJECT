<?php
include_once "mvc/models/Database.php";
$database = new \Admin\mvc\models\Database();
$connection = $database->ConnectDatabase();

if(isset($_POST) && !empty($_POST)) {
    $error = array();
    /*
     * Kiểm tra password của tài khoản đang sửa có đúng không
     */
    $id = (int)$_POST['id'];
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $c_password = md5($_POST['current_password']);
    $n_password = md5($_POST['new_password']);
    $created_at = date("y-m-d H:i:s");

    // Để đảm bảo an toàn
    $sqlCheck = "SELECT * FROM admins WHERE id = ?";

    // Chuẩn bị cho phần SQL
    $stmt = $connection->prepare($sqlCheck);
    // Bind 2biến vào câu lệnh SQL
    $stmt->bind_param("i", $id);
    //Thực thi câu lệnh SQL
    $stmt->execute();
    //Lấy ra bản ghi
    $res = $stmt->get_result();
    //Chuyển kết quả $res thành mảng
    $row = $res->fetch_array(MYSQLI_ASSOC);

    if(isset($row['id']) && $row['id'] > 0) {
        /*
         * Nếu tồn tại bản ghi thì sẽ báo lỗi
         */
        if ($row['password'] !== $c_password) {
            $error[] = "Password không hợp lệ";
        }

        if ($_POST['new_password'] !== $_POST['confirm_password']) {
            $error[] = "Password không trùng khớp";
        }
    }
    if (empty($error)) {
        if($username === $_SESSION['username']) {
            // Để đảm bảo an toàn khi insert dữ liệu thì dùng VALUE(?,?,?) thay vì truyền các biến vào VALUE
            $sqlUpdate = "UPDATE admins SET  password = ? , created_at = ? WHERE id = ? ";

            // Chuẩn bị cho phần SQL
            $stmt = $connection->prepare($sqlUpdate);
            // Bind 3 biến vào câu lệnh SQL 'sss': Định dạng của 3 biến bind vào là String-String-String
            $stmt->bind_param("ssi", $n_password, $created_at, $id);

            $stmt->execute();
            $stmt->close();
            echo "<div class='alert alert-success' style='text-align: center;'>";
            echo "Đổi Password thành công";
            echo "</div>";
            // remove all session variables
            unset($_SESSION['loggedin']);
            exit;
        }else {
            /*
            * Nếu không có lỗi thì thực thi câu lệnh update vào CSDL
            */
            $success = array();
            // Để đảm bảo an toàn khi insert dữ liệu thì dùng VALUE(?,?,?) thay vì truyền các biến vào VALUE
            $sqlUpdate = "UPDATE admins SET  password = ? , created_at = ? WHERE id = ? ";

            // Chuẩn bị cho phần SQL
            $stmt = $connection->prepare($sqlUpdate);
            // Bind 3 biến vào câu lệnh SQL 'sss': Định dạng của 3 biến bind vào là String-String-String
            $stmt->bind_param("ssi", $n_password, $created_at, $id);

            $stmt->execute();
            $stmt->close();
            $success[] = "Đổi Password thành công";
        }

    }

    if (is_array($error) && !empty($error)) {
        $error_string = implode('<br>', $error);
        echo "<div class='alert alert-danger' style='text-align: center;'>";
        echo $error_string;
        echo "</div>";
    } else {
        $success_string = implode('<br>', $success);
        echo "<div class='alert alert-success' style='text-align: center;'>";
        echo $success_string;
        echo "</div>";
    }
}
?>
