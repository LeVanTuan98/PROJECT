<?php
namespace mvc\controllers;
class PageController{
    public function index(){
        //Include View
        include_once "mvc/view/page/index.php";
    }

    public function create(){
        //Include View
        include_once "mvc/view/page/create.php";
    }

    public function edit(){
        //Include View
        include_once "mvc/view/page/edit.php";
    }

    public function update() {
        //Include View
        include_once "mvc/view/page/update.php";
    }


    public function delete(){
        //Include View
        include_once "mvc/view/page/delete.php";
    }

}