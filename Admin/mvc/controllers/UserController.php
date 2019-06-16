<?php
namespace mvc\controllers;
class UserController{
    public function index(){
        //Include View
        include_once "mvc/view/user/index.php";
    }

    public function create(){
        //Include View
        include_once "mvc/view/user/create.php";
    }

    public function edit(){
        //Include View
        include_once "mvc/view/user/edit.php";
    }

    public function update() {
        //Include View
        include_once "mvc/view/user/update.php";
    }


    public function delete(){
        //Include View
        include_once "mvc/view/user/delete.php";
    }


}