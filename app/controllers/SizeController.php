<?php 
require_once 'app/core/Controller.php';
require_once 'app/view/SizeView.php';

class SizeController extends Controller {

    function __construct() {
        $this->view = new SizeView;
        $this->products = new ProductsModel;
    }

    function actionGet() {
        $_POST['info'] = [];

        if (isset($_POST['size'])) {
            setcookie('size', $_POST['size']);
            header('location: /sauce');
        }
        if (isset($_POST['size-prev'])) {
            setcookie('type', $_POST['type'], time()-10);
            header('location: /type');
        }

        $_POST['info'] += ['style' => "<style>.button_size {background-color: rgb(255, 205, 65);}</style>"];

        $size = $this->products->selectSize($_COOKIE['type']);
        $_POST['info'] += ['size' => $size];
        
        $this->view->show();
    }
}