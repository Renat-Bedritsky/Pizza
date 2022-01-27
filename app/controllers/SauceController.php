<?php 
require_once 'app/core/Controller.php';
require_once 'app/view/SauceView.php';

class SauceController extends Controller {

    function __construct() {
        $this->view = new SauceView;
        $this->sauce = new SauceModel;
    }

    function actionGet() {
        $_POST['info'] = [];

        if (isset($_POST['sauce'])) {
            setcookie('sauce', $_POST['sauce']);
            header('location: /order');
        }
        if (isset($_POST['sauce-prev'])) {
            setcookie('size', $_POST['size'], time()-10);
            header('location: /size');
        }

        $_POST['info'] += ['style' => "<style>.button_sauce {background-color: rgb(255, 205, 65);}</style>"];

        $add = $this->sauce->selectList();
        $_POST['info'] += ['add' => $add];
        
        $this->view->show();
    }
}