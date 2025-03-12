<?php
namespace Controllers;
// require_once "Models/UserModel.php";
// require_once "Views/UserView.php";

use Models\UserModel;
use Views\UserView;

// Контроллер для зявзку моделі зі сторінкою
class UserController {
    private UserModel $model;
    private UserView $view;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    public function showUser() {
        $name = $this->model->getName();
        $this->view->render($name);
    }
}

