<?php
    include_once "mvc/models/Database.php";
    $database = new \Admin\mvc\models\Database();
    $connection = $database->ConnectDatabase();

    if(isset($_POST) && !empty($_POST)) {
        $error = array();

        if($_POST['password'] !== $_POST['confirm_password']) {
            $error[] = "Password không trùng khớp";
        }

        if(empty($error)) {
            /*
             * Nếu không có lỗi thì thực thi câu lệnh insert vào CSDL
             */
            $username = $_POST['user_name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']); //md5() : mã hóa 1 chiều
            $created_at = date("y-m-d H:i:s");
            /*
             * Kiểm tra đã tồn tại tài khoản đăng ký chưa
             */
            // Để đảm bảo an toàn
            $sqlCheck = "SELECT id,user_name,email FROM admins WHERE user_name = ? OR email = ?";

            // Chuẩn bị cho phần SQL
            $stmt = $connection->prepare($sqlCheck);
            // Bind 2biến vào câu lệnh SQL
            $stmt->bind_param("ss", $username,$email);
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
                if($row['user_name'] === $username) {
                    $error[] = "User name đã tồn tại";
                }
                if($row['email'] === $email) {
                    $error[] = "Email đã được đăng ký";
                }


            }else {
                // Để đảm bảo an toàn khi insert dữ liệu thì dùng VALUE(?,?,?) thay vì truyền các biến vào VALUE
                $sqlInsert = "INSERT INTO admins (user_name,email,password,created_at) VALUE (?,?,?,?)";

                // Chuẩn bị cho phần SQL
                $stmt = $connection->prepare($sqlInsert);
                // Bind 3 biến vào câu lệnh SQL 'sss': Định dạng của 3 biến bind vào là String-String-String
                $stmt->bind_param("ssss", $username, $email, $password, $created_at);

                $stmt->execute();
                $stmt->close();
                echo "<div class='alert alert-success' style='text-align: center;'>";
                echo "Thêm Admin mới thành công";
                echo "</div>";
            }

        }
        if(is_array($error) && !empty($error)) {
            $error_string = implode('<br>', $error);
            echo "<div class='alert alert-danger' style='text-align: center;'>";
            echo $error_string;
            echo "</div>";
        }
    }

?>

<div class="container">
    <div class="row">
        <div class="col-md-10" style="margin: 0 auto;">
            <h1>THÊM MỚI QUẢN TRỊ VIÊN</h1>
            <form name="create" action="#" method="post" style="margin-top: 50px;">
                <div class="form-group">
                    <label>User name</label>
                    <input type="text" class="form-control" name="user_name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
</div>