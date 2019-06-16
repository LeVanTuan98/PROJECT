<?php
namespace Admin\mvc;

use mvc\controllers\AdminController;
use mvc\controllers\ErrorController;


class Route {
    public function run() {

        $controller = isset($_REQUEST['controller']) ? trim($_REQUEST['controller']) : '';
        $controller = ucfirst($controller);
        $controllerName = 'mvc\\controllers\\'.$controller.'Controller';// mvc\controllers\AdminController

        /*
         * Mặc định thì controller = admin
         * action = index
         */
        if (class_exists($controllerName)) {
            $controllerObject = new $controllerName();
            $action = isset($_REQUEST['action']) ? trim($_REQUEST['action']) : '';
            if (method_exists($controllerName,$action)) {
                /*
                 * $controllerObject->index()
                 * $controllerObject->edit()
                 * $controllerObject->delete()
                 * $action = index,edit,create,delete
                 */
                return $controllerObject->$action();
            } else {
                $controllerObject = new ErrorController();
                return $controllerObject->redirect404();
            }
        }else {
            $controllerObject = new ErrorController();
            return $controllerObject->redirect404();
        }

    }
}

