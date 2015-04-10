<?php

class OrderController extends Zend_Controller_Action {

    public function indexAction() {

        $basket = Application_Model_Basket::getInstance();

        if (!$basket->isEmpty()) {

            $form = new Application_Form_Order();
            
            if ($this->getRequest()->isPost()) {

                if ($form->isValid($this->getAllParams())) {

                    $values = $form->getValues();

                    $order = new Application_Model_DbTable_Order();
                    $order->create($values['name'], $values['email'], $values['addres'], $basket->get());

                    $this->forward('summary');
                }
            }

            $this->view->form = $form;
        } else {

            $this->forward('empty-basket');
        }
    }

    public function summaryAction() {
        $basket = Application_Model_Basket::getInstance();
        if ($basket->isEmpty()) {
            $this->forward('emptyBasket');
        }
        $basket->clear();
    }

    public function emptyBasketAction() {
        
    }

    public function listAction() {

        $repository = new Application_Model_DbTable_Order();

        $this->view->orders = $repository->getListForSession();
    }

}
