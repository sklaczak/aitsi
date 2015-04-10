<?php


class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    public function _initPlugins() {
        
        $front = Zend_Controller_Front::getInstance();

        $front->registerPlugin(new Application_Plugin_Menu());  
        $front->registerPlugin(new Application_Plugin_Basket());  
        
    }
    
	public function _initApplication() {

		
		
		Zend_Session::start();
		
		date_default_timezone_set('Europe/Warsaw');
		
		Zend_Locale::setDefault('pl-PL');
		
	}
    
	

}

