<?php

class Application_Plugin_Menu extends Zend_Controller_Plugin_Abstract {

    public function preDispatch(Zend_Controller_Request_Abstract $request) {
        $repository = new Application_Model_DbTable_Type();
        $type = $repository->getList();
        Zend_Layout::getMvcInstance()->assign('type', $type);
    }

}
