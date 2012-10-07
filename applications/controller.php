<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controller
 *
 * @author root
 */
class controller {
     protected $_view;
    public function __construct() {
        $this->_view=new view(new request());
    }
    public function loadModel($model)
    {
        $model.='Model';
        $path_model=ROOT.'models'.DS.$model.'.php';
        if(is_readable($path_model))
        {
            require_once $path_model;
            $model=new $model;
            return $model;
        }
        else
        {
            throw new Exception('model not found');
        }
    }
}

?>
