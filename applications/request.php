<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of request
 *
 * @author root
 */
class request {
    /*
     * class attributes
     */
    private $_controller;
    private $_method;
    private $_argument;
    /*
     * constructor method
     */
    public function __construct() {
        if(isset($_GET['url']))
        {
            $url=  array_filter(explode('/', strtolower($_GET['url'])));
        }
        else
        {
            $url=array();
        }
        $this->setController(array_shift($url));
        $this->setMethod(array_shift($url));
        $this->setArgument($url);
    }
    /*
     * setters metods
     */
    public function setController($controller)
    {
        $this->_controller=$controller;
        if(!$this->_controller)
        {
            $this->_controller=  config::DEFAULT_CONTROLLER;
        }
    }
    public function setMethod($method)
    {
        $this->_method=$method;
        if(!$this->_method)
        {
            $this->_method='index';
        }
    }
    public function setArgument($argument)
    {
        $this->_argument=$argument;
        if(!isset($this->_argument))
        {
            $this->_argument=array();
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
    public function getArgument()
    {
        return $this->_argument;
    }
}

?>
