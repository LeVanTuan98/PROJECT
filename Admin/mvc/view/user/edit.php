<?php
include_once "mvc/models/Database.php";
$database = new \Admin\mvc\models\Database();
$connection = $database->ConnectDatabase();

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $error = array();

    $sqlCheck = "SELECT * FROM users WHERE id = ?";

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
}

?>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>Cập nhật thông tin khách hàng</h1>
            <form name="edit" action="index.php?controller=user&action=update" method="post" style="margin-top: 50px;">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" name="user_name" value="<?php echo $row['user_name']?>" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $row['email']?>" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Xác nhận</button>
            </form>
        </div>
    </div>
</div>