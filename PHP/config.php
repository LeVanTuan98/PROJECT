<?php
/*
 * Kết nối cơ sở dữ liệu
 * */
define("SERVER_NAME","localhost");
define("USER_NAME","root");
define("PASSWORD","");
define("DB_NAME","db_intro_company");

// Tạo kết nối
$connection = mysqli_connect(SERVER_NAME,USER_NAME,PASSWORD,DB_NAME);
mysqli_set_charset($connection,'utf8');

// Kiểm tra kết nối
if (!$connection) {
    die("Connection failed: ".mysqli_connect_error());
} else {
//    echo "Connected successfully";
}