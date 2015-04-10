<?php

class Application_Model_DbTable_Type extends Zend_Db_Table_Abstract
{

    protected $_name = 'type';

    const WOMAN = 1001;
    const MEN = 1002;
    const ACCESSORIES = 1003;
    
    public function getList() {
        
        $select = $this->select();
        $select->setIntegrityCheck(false);
        $select->from(array("type" => "type"));
        $select->where('type.id != ?', self::WOMAN);
        $select->where('type.id != ?', self::MEN);
        $select->where('type.id != ?', self::ACCESSORIES);
        $select->order('type.name');
        
        return $this->fetchAll($select)->toArray();

    }    
    
    
}

