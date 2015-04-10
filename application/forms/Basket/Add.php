<?php

class Application_Form_Basket_Add extends Zend_Form {

    public function init() {
        $this->addElementProductId()
                ->addElementQuantity()
                ->addElementPrice();
    }

    protected function addElementProductId() {
        $element = new Zend_Form_Element_Text('product_id');
        $element->addValidator(new Zend_Validate_Int());
        $element->setRequired();
        $this->addElement($element);
        return $this;
    }

    protected function addElementPrice() {
        $element = new Zend_Form_Element_Text('price');
        $element->addValidator(new Zend_Validate_Float());
        $this->addElement($element);
        return $this;
    }

    protected function addElementQuantity() {
        $element = new Zend_Form_Element_Text('quantity');
        $element->addValidator(new Zend_Validate_Int());
        $element->setRequired();
        $this->addElement($element);
        return $this;
    }

}
