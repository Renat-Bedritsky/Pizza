<?php 
require_once 'app/core/Controller.php';
require_once 'app/view/BaseView.php';

class BaseController extends Controller {

    function __construct() {
        $this->view = new BaseView;
        $this->orders = new OrdersModel;
    }

    function actionGet() {
        $_POST['info'] = [];
        $_POST['title'] = 'Заказать';

        if (isset($_POST['table'])) {
            $content = $_POST['table'];
            $_POST['info'] += ['content' => $content];

            $table = $_POST['table'];
            $_POST['info'] += ['style' => "<style>.button_$table {background-color: rgb(255, 205, 65);}</style>"];
        }
        else {
            $_POST['info'] += ['content' => 'type'];
            $_POST['info'] += ['style' => "<style>.button_type {background-color: rgb(255, 205, 65);}</style>"];
        }
        
        $this->view->show();
    }
}