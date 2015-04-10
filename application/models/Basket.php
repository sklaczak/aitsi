<?php

class Application_Model_Basket implements Application_Model_Singleton {

    protected static $instance = null;
    protected static $basket = null;
    protected function __construct() {
        
    }
    
    /** @return Application_Model_Basket */
    
    public static function getInstance() {
        $basket = new Zend_Session_Namespace('basket');
        self::$basket = $basket;
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function add($product, $quantity) {        
        if (isset(self::$basket->items[$product['id']][$product['price']]['quantity'])) {
            self::$basket->items[$product['id']][$product['price']]['quantity'] += $quantity;
        } else {
            self::$basket->items[$product['id']][$product['price']]['quantity'] = $quantity;
        }
        self::$basket->items[$product['id']][$product['price']]['info'] = $product;
        $this->calculate();
    }

    public function get() {
        return self::$basket;
    }
    
    public function clear() {
        unset(self::$basket->items);
        self::$basket->sum = 0;
        self::$basket->itemsCount = 0;
        self::$basket->itemsQuantity = 0;
    }

    protected function calculate() {
        $basket = new Zend_Session_Namespace('basket');
        $sum = 0;
        $itemsCount = 0;
        $itemsQuantity = 0;
        foreach ($basket->items as $line) {
            foreach ($line as $price => $item) {
                $sum += $price * $item['quantity'];
                $itemsCount++;
                $itemsQuantity += $item['quantity'];
            }
        }
        $basket->sum = $sum;
        $basket->itemsCount = $itemsCount;
        $basket->itemsQuantity = $itemsQuantity;
    }
    
    public function isEmpty() {
        if (isset(self::$basket->items) & count(self::$basket->items)>0 & self::$basket->itemsCount > 0) {
            return false;
        } else {
            return true;
        }
    }

}
