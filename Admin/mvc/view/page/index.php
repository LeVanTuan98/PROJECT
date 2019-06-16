<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>DANH MỤC HÌNH ẢNH GIỚI THIỆU</h1>

            <table class="table" style="margin-top: 50px;">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"">Đường dẫn</th>
                    <th scope="col">Mô tả</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                <?php
                    include_once "mvc/models/Database.php";
                    $database = new \Admin\mvc\models\Database();
                    $sqlSelect = "SELECT * FROM slide_show";
                    $images = $database->RunQuery($sqlSelect);
                ?>
                <?php if(isset($images) && !empty($images)) : ?>
                    <?php foreach ($images as $image) :?>
                    <tr>
                        <th scope="row"><?php echo $image['id']?></th>
                        <td style="width: 350px; display:block;"><?php echo $image['src'] ?></td>
                        <td><?php echo $image['alt'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="index.php?controller=page&action=edit&id=<?php echo $image['id'] ?>">Sửa</a>
                            <a class="btn btn-danger" href="index.php?controller=page&action=delete&id=<?php echo $image['id'] ?>">Xóa</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                <?php else:?>
                    <?php "<br> Không có bản ghi nào trong CSDL"?>
                <?php endif; ?>
                </tbody>
            </table>
            <div>
                <a href="index.php?controller=page&action=create" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
    </div>
</div>