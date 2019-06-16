<?php
namespace mvc\controllers;
class ErrorController{
    public function redirect404() {
        include_once "mvc/view/error/404.php";
    }
}