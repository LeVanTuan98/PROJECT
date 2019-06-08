<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Reset CSS-->
    <link rel="stylesheet" href="css/normalize.css">

    <!--Style.CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!--Responsive.CSS-->
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<!--PHP-->
<?php
include "PHP/config.php";
?>
<!--HTML-->
<div id="index" >
    <?php
        include "PHP/header.php";
        include "PHP/main-page-fpt.php";
        include "PHP/footer.php";
    ?>
</div>
<!--Javascript.js-->
<script language="JavaScript" src="js/responsive.js"></script>
<script language="JavaScript" src="js/javascript.js"></script>
</body>
</html>