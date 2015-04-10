<?php

class Application_Form_Order extends Zend_Form {

    public function init() {
        $this->addElementName()
                ->addElementAddress()
                ->addElementEmail()
                ->addElementSubmit();
    }

    protected function addElementName() {
        $element = new Zend_Form_Element_Text('name');
        $element->setLabel('Twoje imię i nazwisko ');
        $element->setRequired();
        $this->addElement($element);
        return $this;
    }

    protected function addElementAddress() {
        $element = new Zend_Form_Element_Text('addres');
        $element->setLabel('Twój adres dostawy');
        $element->setRequired();
        $this->addElement($element);
        return $this;
    }
    
    protected function addElementEmail() {
        $element = new Zend_Form_Element_Text('email');
        $element->setLabel('Twój email');
        $element->addValidator(new Zend_Validate_EmailAddress());
        $element->setRequired();
        $this->addElement($element);
        return $this;
    }
    
    protected function addElementSubmit() {
        $element = new Zend_Form_Element_Submit('submit');
        $element->setValue('Wyślij');
        $this->addElement($element);
        return $this;
    }

}
