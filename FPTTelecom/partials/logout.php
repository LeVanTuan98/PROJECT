<?php
session_start();
$local = "Location:".$_SESSION['current_path'];
// remove all session variables
session_unset();

echo"$local";
header($local);
exit;
?>
