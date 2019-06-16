<?php
session_start();
/*
 * Kiểm tra xem người dùng đã đăng nhập chưa
 * nếu chưa đăng nhập thì redirect về trang login.php
 */
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    // Chuyển hướng redirect trong php => sử dụng hàm header
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
   <?php include_once "partials/head.php" ?>
</head>
<body class="cbp-spmenu-push">
<div class="main-content">
    <?php include_once "partials/sidebar.php";?>
    <!--left-fixed -navigation-->

    <!-- header-starts -->
    <?php include_once "partials/header.php";?>
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            <?php
                if(!isset($_REQUEST['controller']) || empty($_REQUEST['controller'])) {
                    include_once "pages/main-page.php";
                }else {
                    include_once "mvc/Route.php";
                    include_once "mvc/controllers/AdminController.php";
                    include_once "mvc/controllers/UserController.php";
                    include_once "mvc/controllers/ErrorController.php";
                    include_once "mvc/controllers/PageController.php";
                    include_once "mvc/models/Database.php";

                    $route = new \Admin\mvc\Route();
                    $route->run();
                }

            ?>

        </div>
    </div>
    <!--footer-->
    <?php include_once "partials/footer.php";?>
    <!--//footer-->
</div>

<!-- new added graphs chart js-->
<?php include_once "partials/main-js.php";?>

</body>
</html>