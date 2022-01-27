<?php 
require_once 'app/core/Controller.php';
require_once 'app/view/OrderView.php';

class OrderController extends Controller {

    function __construct() {
        if (!isset($_COOKIE['sauce'])) {
            header('location: /type');
        }
        $this->view = new OrderView;
        $this->orders = new OrdersModel;
        $this->sauce = new SauceModel;
        $this->products = new ProductsModel;
    }

    function actionGet() {
        $_POST['info'] = [];

        $pricePizza = $this->products->PricePizza($_COOKIE['type'], $_COOKIE['size']);
        $priceSauce = $this->sauce->PriceSauce($_COOKIE['sauce']);
        $total = $pricePizza + $priceSauce;
        $_POST['info'] += ['pizza' => $pricePizza];
        $_POST['info'] += ['sauce' => $priceSauce];
        $_POST['info'] += ['total' => $total];

        if (isset($_POST['order_complet'])) {
            $this->orders->addOrder($_COOKIE['type'], $_COOKIE['size'], $_COOKIE['sauce'], $total);
            setcookie('type', $_COOKIE['type'], time()-10);
            setcookie('size', $_COOKIE['size'], time()-10);
            setcookie('sauce', $_COOKIE['sauce'], time()-10);
            header('Refresh: 5');
        }

        if (isset($_POST['order_cancel'])) {
            setcookie('type', $_COOKIE['type'], time()-10);
            setcookie('size', $_COOKIE['size'], time()-10);
            setcookie('sauce', $_COOKIE['sauce'], time()-10);
            header('Refresh: 0');
        }

        $_POST['info'] += ['style' => ""];
        
        $this->view->show();
    }
}