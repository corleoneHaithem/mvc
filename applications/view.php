<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of view
 *
 * @author root
 */
class view {
    private $_controller;
    public function __construct(request $req) {
        $this->_controller=$req->getController();
    }
    public function render($view)
    {
        if(is_readable(ROOT.'views'.DS.$this->_controller.DS.$view.'.phtml'))
        {
            require_once ROOT.'views'.DS.$this->_controller.DS.$view.'.phtml';
        }
        else
        {
            throw new Exception('unknown view');
        }
    }
    public function get($composant)
    {
        if(is_readable(ROOT.'views'.DS.'layout'.DS.config::DEFAULT_LAYOUT.DS.$composant.'.php'))
        {
            require_once ROOT.'views'.DS.'layout'.DS.config::DEFAULT_LAYOUT.DS.$composant.'.php';
        }
    }
   
}

?>
