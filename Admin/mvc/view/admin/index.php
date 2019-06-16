<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>DANH SÁCH QUẢN TRỊ VIÊN</h1>

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
                    $sqlSelect = "SELECT * FROM admins";
                    $admins = $database->RunQuery($sqlSelect);
                ?>
                <?php if(isset($admins) && !empty($admins)) : ?>
                    <?php foreach ($admins as $admin) :?>
                    <tr>
                        <th scope="row"><?php echo $admin['id']?></th>
                        <td><?php echo $admin['user_name'] ?></td>
                        <td><?php echo $admin['email'] ?></td>
                        <td><?php echo $admin['created_at'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="index.php?controller=admin&action=edit&id=<?php echo $admin['id'] ?>">Sửa</a>
                            <a class="btn btn-danger" href="index.php?controller=admin&action=delete&id=<?php echo $admin['id'] ?>">Xóa</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                <?php else:?>
                    <?php "<br> Không có bản ghi nào trong CSDL"?>
                <?php endif; ?>
                </tbody>
            </table>
            <div>
                <a href="index.php?controller=admin&action=create" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
    </div>
</div>