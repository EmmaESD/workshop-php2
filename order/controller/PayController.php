<?php

require_once './order/model/repository/OrderRepository.php';
require_once './products/model/entity/Products.php';
require_once './products/model/repository/ProductRepository.php';

class PayController{
    
    public function pay()
    {
        $orderRepository = new OrderRepository();
        $order = $orderRepository->find();



        if (!$order) {
            require_once './order/view/404.php';
            return;
        }

        require_once './order/view/pay.php';
    }
}