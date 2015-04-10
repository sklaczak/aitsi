<?php

class Application_Model_DbTable_Order extends Zend_Db_Table_Abstract {

    protected $_name = 'order';

    public function getListForSessionQuery() {
        $query = $this->select();
        $query->setIntegrityCheck(false);
        $query->from(array("order" => "order"));
        $query->where("order.session_id = ?", Zend_Session::getId());
        $query->order('order.id');
        return $query;
    }

    public function getListForSession() {
        return $this->fetchAll($this->getListForSessionQuery())->toArray();
    }

    public function create($name, $email, $address, $basket) {

        $orderId = $this->insert(array(
            'session_id' => Zend_Session::getId(),
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'amount' => $basket->sum,
            'creation_date' => new Zend_Db_Expr('NOW()'),
        ));

        $orderItems = new Application_Model_DbTable_OrderItem();

        foreach ($basket->items as $productId => $line) {
            foreach ($line as $price => $item) {
                $orderItems->addToOrder($orderId, $productId, $item['quantity'], $price);
            }
        }
    }

}
