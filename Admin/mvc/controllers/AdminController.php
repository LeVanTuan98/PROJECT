<?php
namespace mvc\controllers;
class AdminController{

    public function index(){
        //Include View
        include_once "mvc/view/admin/index.php";
    }

    public function create(){
        //Include View
        include_once "mvc/view/admin/create.php";
    }

    public function edit(){
        //Include View
        include_once "mvc/view/admin/edit.php";
    }

    public function update() {
        //Include View
        include_once "mvc/view/admin/update.php";
    }


    public function delete(){
        //Include View
        include_once "mvc/view/admin/delete.php";
    }

    public function deleted(){
        //Include View
        include_once "mvc/view/admin/process-delete.php";
    }
}