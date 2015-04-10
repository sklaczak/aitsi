<?php

class Application_Plugin_Basket extends Zend_Controller_Plugin_Abstract {

    public function postDispatch(Zend_Controller_Request_Abstract $request) {
        $basket = Application_Model_Basket::getInstance();
        Zend_Layout::getMvcInstance()->assign('basket', $basket->get());
    }

}
