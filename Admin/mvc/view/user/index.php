<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>DANH SÁCH KHÁCH HÀNG</h1>

            <table class="table" style="margin-top: 50px;">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created at</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                <?php
                    include_once "mvc/models/Database.php";
                    $database = new \Admin\mvc\models\Database();
                    $sqlSelect = "SELECT * FROM users";
                    $users = $database->RunQuery($sqlSelect);
                ?>
                <?php if(isset($users) && !empty($users)) : ?>
                    <?php foreach ($users as $user) :?>
                    <tr>
                        <th scope="row"><?php echo $user['id']?></th>
                        <td><?php echo $user['user_name'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['created_at'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="index.php?controller=user&action=edit&id=<?php echo $user['id'] ?>">Sửa</a>
                            <a class="btn btn-danger" href="index.php?controller=user&action=delete&id=<?php echo $user['id'] ?>">Xóa</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                <?php else:?>
                    <?php "<br> Không có bản ghi nào trong CSDL"?>
                <?php endif; ?>
                </tbody>
            </table>
            <div>
                <a href="index.php?controller=user&action=create" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
    </div>
</div>