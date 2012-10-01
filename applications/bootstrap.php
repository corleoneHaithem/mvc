<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author root
 */
class bootstrap {
    private $_controller;
    private $_method;
    /*
     * constructor method
     */
    public function __construct(request $req)
    {
        $this->setController($req->getController());
        if(isset($this->_controller))
        {
            $argument=$req->getArgument();
            $this->setMethod($req->getMethod());
            if(!empty($argument))
            {
                call_user_func_array(array(
                    $this->_controller,  
                    $this->_method
                        ), $argument);
                
            }
            else
            {
                call_user_func(array($this->_controller,  $this->_method));
            }
        }
        else
        {
           throw new Exception("unknown controller");
        }
    }
    /*
     * seteers methods
     */
    public function setController($controller)
    {
        $controller.='Controller';
        if(is_readable(ROOT.'controllers'.DS.$controller.'.php'))
        {
            require_once ROOT.'controllers'.DS.$controller.'.php';
            $this->_controller=new $controller;
        }
        else
        {
            $this->_controller=null;
        }
    }
    public function setMethod($method)
    {
        $this->_method=$method;
        if(!method_exists($this->_controller, $method))
        {
            $this->_method='index';
        }
    }
    /*
     * getters methods
     */
    public function getController()
    {
        return $this->_controller;
    }
    public function getMethod()
    {
        return $this->_method;
    }
}

?>
