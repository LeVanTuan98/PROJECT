<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "partials/head.php";?>
</head>
<body>
<!--Database-->
<?php
require_once "../Admin/mvc/models/Database.php";
$database = new \Admin\mvc\models\Database();
?>
<!--HTML-->
<div id="index" >
    <?php include_once "partials/header.php";?>
    <div class="main-page">
        <?php include_once "partials/slide-show.php"; ?>

        <?php
        if(isset($_GET['page']) && $_GET['page']) {
            $filePath = dirname(__FILE__)."/pages/".trim($_GET['page']).".php";
            if(file_exists($filePath)) {
                include_once "pages/".trim($_GET['page']).".php";
                $_SESSION['current_path'] = "http://localhost/PROJECT/FPTTelecom/index.php?page=" . trim($_GET['page']);
            }
        }else {
            include_once "pages/gioi_thieu_chung.php";
            $_SESSION['current_path'] = "http://localhost/PROJECT/FPTTelecom/index.php?page=gioi_thieu_chung";
        }
        ?>
    </div>

    <?php include_once "partials/footer.php"; ?>
    <a id="on_top" href="#top"><img src="assets/images/right-site/top.png" alt="Trở lên trên"></i></a>
</div>
<!--Javascript.js-->
<script language="JavaScript" src="assets/js/responsive.js"></script>
<script language="JavaScript" src="assets/js/javascript.js"></script>
<script language="JavaScript" src="assets/js/back-to-top.js"></script>
<script language="JavaScript" src="assets/js/login.js"></script>
</body>
</html>
