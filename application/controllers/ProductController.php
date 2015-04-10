<?php

class ProductController extends Zend_Controller_Action {

    public function listAction() {

        $type = $this->getParam('type', false);

        $repository = new Application_Model_DbTable_Product();

        if ($type) {
            $adapter = new Zend_Paginator_Adapter_DbSelect($repository->getListByTypeQuery($type));
        } else {
            $adapter = new Zend_Paginator_Adapter_DbSelect($repository->getListQuery());
        }

        $paginator = new Zend_Paginator($adapter);
        $paginator->setCurrentPageNumber($this->_getParam('page'));
        $paginator->setItemCountPerPage(16);
        $this->view->paginator = $paginator;
    }

}
