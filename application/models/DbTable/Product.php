<?php

class Application_Model_DbTable_Product extends Zend_Db_Table_Abstract {

    protected $_name = 'product';

    public function getListQuery() {
        $query = $this->select();
        $query->setIntegrityCheck(false);
        $query->from(array("product" => "product"));
        $query->join(array("foto" => "product_foto"), 'foto.fk_product = product.id');
        $query->order('product.id');
        return $query;
    }
    
    public function getListByTypeQuery($type) {
        $query = $this->select();
        $query->setIntegrityCheck(false);
        $query->from(array("product" => "product"));
        $query->join(array("foto" => "product_foto"), 'foto.fk_product = product.id');
        $query->join(array("type" => "product_type"), 'type.fk_product = product.id');
        $query->where("type.fk_type = ?", $type);
        $query->order('product.id');
        return $query;
    }

    public function getList() {
        return $this->fetchAll($this->getListQuery())->toArray();
    }

    public function getListByType($type) {
        return $this->fetchAll($this->getListByTypeQuery($type))->toArray();
    }

    public function getOne($id) {

        $select = $this->select();
        $select->setIntegrityCheck(false);
        $select->from(array("product" => "product"));
        $select->join(array("foto" => "product_foto"), 'foto.fk_product = product.id');
        $select->where('product.id = ?', $id);

        $product = $this->fetchRow($select);

        if ($product !== null) {
            return $product->toArray();
        } else {
            return null;
        }
    }

}
