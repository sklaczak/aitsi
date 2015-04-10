<?php

class BasketController extends Zend_Controller_Action {

    protected $basket;
    
    public function init() {
        $this->basket = Application_Model_Basket::getInstance();
    }
    
    public function addAction() {
        
        $form = new Application_Form_Basket_Add();
            
        if ($form->isValid($this->getAllParams())) {
            
            $values = $form->getValues();
            
            $productsRepository = new Application_Model_DbTable_Product();
            $product = $productsRepository->getOne($values['product_id']);
            if ($product !== null) {
                $this->basket->add($product, 1);
                $response = array ('status' => 'OK', 'msg' => 'OK', 'product' => $product, 
                    'basket' => array(
                        'itemsQuantity' => $this->basket->get()->itemsQuantity,
                        'itemsCount' => $this->basket->get()->itemsCount,
                        'sum' => $this->basket->get()->sum,
                    ),
                );
            } else{
                $response = array ('status' => 'ER', 'msg' => 'Product nie istnieje.');
            }

        } else {
            $response = array ('status' => 'ER', 'msg' => $form->getMessages());
        }
        
        $this->_helper->json($response);
    }
    
    public function showAction() {
        $this->view->basket = $this->basket->get();
    }
    
    public function clearAction() {
        $this->basket->clear();
        $this->forward('show');
    }

}
