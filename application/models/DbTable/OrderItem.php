<?php

class Application_Model_DbTable_OrderItem extends Zend_Db_Table_Abstract {

    protected $_name = 'order_item';

    public function addToOrder($orderId, $productId, $quantity, $price) {
        $this->insert(array(
            'fk_order' => $orderId,
            'fk_product' => $productId,
            'quantity' => $quantity,
            'price' => $price,
            'amount' => $quantity * $price,
        ));
    }

}
